<!DOCTYPE html>
<html>

<head>
	<title>Custom Cake DB Connection</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "customdb");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$em = $_REQUEST['em'];
		$mobno = $_REQUEST['mobno'];
		$expdte = $_REQUEST['expdte'];
		$rqwt = $_REQUEST['rqwt'];
		$requi = $_REQUEST['requi'];
		$uplimg = $_REQUEST['uplimg'];
		
		
		
		
		$sql = "INSERT INTO customizecake VALUES ('$name',
			'$em','$mobno','$expdte','$rqwt','$requi','$uplimg')";
		
		if(mysqli_query($conn, $sql)){

				echo ('<script>alert("data stored in a database successfully.'
				. ' Please browse your localhost php my admin'
				. ' to view the updated data");
				window.location.assign("customcake.php");</script>');


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

