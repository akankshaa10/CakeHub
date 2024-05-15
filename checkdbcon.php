<!DOCTYPE html>
<html>

<head>
	<title>Checkout DB Connection</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "checkoutdb");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$cardname = $_REQUEST['cardname'];
		$cardnumber = $_REQUEST['cardnumber'];
		$cardtyp = $_REQUEST['cardtyp'];
		$expmonth = $_REQUEST['expmonth'];
		$expyear = $_REQUEST['expyear'];
		$cvv = $_REQUEST['cvv'];
		$amtpd = $_REQUEST['amtpd'];
		
		
		
		
		$sql = "INSERT INTO payment VALUES ('$cardname',
			'$cardnumber','$cardtyp','$expmonth','$expyear','$cvv','$amtpd')";
		
		if(mysqli_query($conn, $sql)){

				echo ('<script>alert("data stored in a database successfully.'
				. ' Please browse your localhost php my admin'
				. ' to view the updated data");
				window.location.assign("orderconfirm.php");</script>');


			//echo nl2br("\n$fname\n $mob\n "
				//. "$passw\n $cpassw\n $eml"."$cty\n $stat\n $pinc\n $fadd");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>

