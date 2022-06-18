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