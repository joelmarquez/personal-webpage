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

die;