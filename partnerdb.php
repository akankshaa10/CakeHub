<!DOCTYPE html>
<html>

<head>
	<title>Partner with database</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "contactdb");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$pname = $_REQUEST['pname'];
		$pem = $_REQUEST['pem'];
		$pmobno = $_REQUEST['pmobno'];
		$pwsno = $_REQUEST['pwsno'];
		$ref = $_REQUEST['ref'];
		$req = $_REQUEST['req'];
		
		
		
		
		$sql = "INSERT INTO partnertbl VALUES ('$pname',
			'$pem','$pmobno','$pwsno','$ref','$req')";
		
		if(mysqli_query($conn, $sql)){

				echo ('<script>alert("data stored in a database successfully.'
				. ' Please browse your localhost php my admin'
				. ' to view the updated data");
				window.location.assign("partner.php");</script>');


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

