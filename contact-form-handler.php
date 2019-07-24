<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'daniellenicoledoty@gmail.com';

$email_subject = "test";

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n". 
                "User Message: $message.\n";

$to = "daniellenicoledoty@gmail.com";

$headers = "From: $email_from \r\n";

$headers = "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>