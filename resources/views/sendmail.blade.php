<?php
            if (isset($_POST['submitForm'])) {
                $captcha_response = true;
                $recaptcha = $_POST['g-recaptcha-response'];

                $url = 'https://www.google.com/recaptcha/api/siteverify';
                $data = array(
                    'secret' => '6LfA06QaAAAAAI-X9DKHatxp0mLFz_mLfejaMN3u',
                    'response' => $recaptcha
                );
                $options = array(
                    'http' => array (
                        'method' => 'POST',
                        'content' => http_build_query($data)
                    )
                );
                $context  = stream_context_create($options);
                $verify = file_get_contents($url, false, $context);
                $captcha_success = json_decode($verify);
                $captcha_response = $captcha_success->success;

                if ($captcha_response) {
                    echo '<p class="alert alert-success">Procesar datos...</p>';
                } else {
                    echo '<p class="alert alert-danger">Debes indicar que no eres un robot.';
                }
            }
            ?>

<?php

$name       = @trim(stripslashes($_POST['name'])); 
$from       = @trim(stripslashes($_POST['email'])); 
$subject    = @trim(stripslashes($_POST['subject'])); 
$message    = @trim(stripslashes($_POST['message'])); 
$to   		= 'joelmarquez@gmail.com';

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