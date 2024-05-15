<?php
$to_email = "suchitad123@gmail.com";
$subject = "Example Email";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: kateamol3532@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}