<?php 
 
// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
require 'C:\xampp\htdocs\PHPMailer-6.4.1\src\Exception.php'; 
require 'C:\xampp\htdocs\PHPMailer-6.4.1\src\PHPMailer.php'; 
require 'C:\xampp\htdocs\PHPMailer-6.4.1\src\SMTP.php'; 
 
 
$mail = new PHPMailer; 
 
$mail->isSMTP();                      // Set mailer to use SMTP 
$mail->Host = 'ssl://smtp.gmail.com';       // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;               // Enable SMTP authentication 
$mail->Username = 'kateamol3532@gmail.com';   // SMTP username 
$mail->Password = 'akanksha102520';   // SMTP password 
$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 587;                    // TCP port to connect to 
$mail->Host = gethostbyname('smtp.gmail.com');
 
// Sender info 
$mail->setFrom('kateamol3532@gmail.com', 'CodexWorld'); 
$mail->addReplyTo('suchitad123@gmail.com', 'CodexWorld'); 
 
// Add a recipient 
$mail->addAddress('suchitad123@gmail.com'); 
 
//$mail->addCC('cc@example.com'); 
//$mail->addBCC('bcc@example.com'); 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Mail subject 
$mail->Subject = 'Email from Localhost by CodexWorld'; 
 
// Mail body content 
$bodyContent = '<h1>How to Send Email from Localhost using PHP by CodexWorld</h1>'; 
$bodyContent .= '<p>This HTML email is sent from the localhost server using PHP by <b>CodexWorld</b></p>'; 
$mail->Body    = $bodyContent; 
 
// Send email 
if(!$mail->send()) { 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
} else { 
    echo 'Message has been sent.'; 
} 


echo !extension_loaded('openssl')?"Not Available":"Available";
 
?>