<!DOCTYPE html>
<html>
<head>
	<title>Email sending...</title>
</head>
<body>

<?php     
$to_email = 'kateamol3532@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: noreply @ company . com';
mail($to_email,$subject,$message,$headers);
?>

</body>
</html>
