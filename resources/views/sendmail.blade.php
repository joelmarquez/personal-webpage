
<?php

$name       = @trim(stripslashes($_POST['name'])); 
$from       = @trim(stripslashes($_POST['email'])); 
$subject    = @trim(stripslashes($_POST['subject'])); 
$message    = @trim(stripslashes($_POST['message'])); 
$to   		= 'joelmarquez@gmail.com';

$ip = $_SERVER['REMOTE_ADDR'];
$captcha = $_POST['g-recaptcha-response'];
$secretkey = "6LfA06QaAAAAANF57k_3XFuE81jv1e9iLZCHizJl";

// Enviamos una URL para la validación
$respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");

$atributos = Json_decode($respuesta, TRUE);

if(!$atributos['success']){
    echo '<center>' . "<p> Hubo un problema: Verifica el Captcha. </p>" . '<center>' ;
    echo '<a href="javascript:history.back()">' . "<p> Volver Atrás </p>" . '</a>';
    header("refresh:10;url=https://joelmarquez.net");
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

//Establecer el encabezado de actualización utilizando PHP.
header("refresh:4;url=https://joelmarquez.net");

?>