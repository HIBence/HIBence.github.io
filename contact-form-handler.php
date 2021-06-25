<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = $visitor_email;

$email_subject = $subject;
$email_body = $message;
$to = "hibence.dev@gmail.com"
mail($to,$email_subject,$email_body)

?>