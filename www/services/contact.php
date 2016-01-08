<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$from = 'Lab Grid Contact';
$to = 'theodoreando99@gmail.com';
$subject = 'Contact Request';
$body = "From: $name\nEmail: $email\nMessage:\n$message";

mail($to, $subject, $body, $from);
