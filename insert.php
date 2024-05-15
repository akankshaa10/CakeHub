<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "regdb");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$fname = $_REQUEST['fname'];
		$mob = $_REQUEST['mob'];
		$passw = $_REQUEST['passw'];
		$cpassw = $_REQUEST['cpassw'];
		$eml = $_REQUEST['eml'];
		$utype = $_REQUEST['utype'];
		$cty = $_REQUEST['cty'];
		$stat = $_REQUEST['stat'];
		$pinc = $_REQUEST['pinc'];
		$fadd = $_REQUEST['fadd'];
		
		
		
		$sql = "INSERT INTO register VALUES ('$fname',
			'$mob','$passw','$cpassw','$eml','$utype','$cty','$stat','$pinc','$fadd')";
		
		if(mysqli_query($conn, $sql)){

				echo ('<script>alert("data stored in a database successfully.'
				. ' Please browse your localhost php my admin'
				. ' to view the updated data");
				window.location.assign("login.php");</script>');


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

