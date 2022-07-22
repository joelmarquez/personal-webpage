
<?php
header('content-type: application/json');
    $name       = @trim(stripslashes(htmlspecialchars($_POST['name']))); 
    $from       = @trim(stripslashes(htmlspecialchars($_POST['email']))); 
    $subject    = @trim(stripslashes(htmlspecialchars($_POST['subject']))); 
    $message    = @trim(stripslashes(htmlspecialchars($_POST['message']))); 
    $to   		= 'joelmarquez@gmail.com';

    // Comprobamos que los campos NO esten vacios
    if  (isset($_POST['name']) && !empty($_POST['name']) &&
        isset($_POST['email']) && !empty($_POST['email']) &&
        isset($_POST['subject']) && !empty($_POST['subject']) &&
        isset($_POST['message']) && !empty($_POST['message']))

    {

        $ip = $_SERVER['REMOTE_ADDR'];
        $captcha = $_POST['g-recaptcha-response'];
        $secretkey = "6LfA06QaAAAAANF57k_3XFuE81jv1e9iLZCHizJl";

        // Enviamos una URL para la validación
        $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");

        $atributos = Json_decode($respuesta, TRUE);

        print(Json_encode($atributos['success']));
        
        // echo '<pre>';
        // var_dump($atributos);
        // var_dump($atributos['success'];
        // die();
        // echo '</pre>';  

        if(!$atributos['success']){
            echo '<center>' . "<p> Hubo un problema: Verifica el Captcha. </p>" . '<center>' ;
            echo '<a href="javascript:history.back()">' . "<p> Volver Atrás </p>" . '</a>';
            header("refresh:10;url=https://joelmarquez.net");
            // return print(json_encode('no'));
            die();
        }

        $headers   = [
            'MIME-Version' => 'MIME-Version: 1.0',
            'Content-type' => 'text/plain; charset=UTF-8',
            'From' => "{$name} <{$from}>",
            'Reply-To' => $from,
            'X-Mailer' => 'PHP/' . phpversion(),
        ];

        mail($to, $subject, $message, $headers);

        echo '<center>' . "Gracias" . "<b> $name </b>" . "por enviar tu email". '<center>' . "<br>" ;
        echo '<center>' . "<p> Te respondere a la brevedad posible. </p>" . '<center>' ;
        // return print(json_encode('ok'));
        //Establecer el encabezado de actualización utilizando PHP.
        header("refresh:4;url=https://joelmarquez.net");

    }


?>