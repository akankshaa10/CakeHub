<!DOCTYPE html>
<html>

<head>
	<title>Shipping Address Stored</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "shippingadddb");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$cname = $_REQUEST['cname'];
		$stret = $_REQUEST['stret'];
		$housno = $_REQUEST['housno'];
		$city = $_REQUEST['city'];
		$state = $_REQUEST['state'];
		$coun = $_REQUEST['coun'];
		$pincde = $_REQUEST['pincde'];
		
		
		$sql = "INSERT INTO address VALUES ('$cname',
			'$stret','$housno','$city','$state','$coun','$pincde')";
		
		if(mysqli_query($conn, $sql)){

				echo '<script>alert("data stored in a database successfully.'
				. ' Please browse your localhost php my admin'
				. ' to view the updated data")
				window.location.assign("checkout.php");</script>';
				

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

