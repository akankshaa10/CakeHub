<!DOCTYPE html>
<html>

<head>
	<title>Add Equipment Supplier Details </title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "customerdb");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$supid = $_REQUEST['supid'];
		$supnme = $_REQUEST['supnme'];
		$supage = $_REQUEST['supage'];
		$supgend = $_REQUEST['supgend'];
		$phone = $_REQUEST['phone'];
		$supitem = $_REQUEST['supitem'];
		$totbil = $_REQUEST['totbil'];
		$supdte = $_REQUEST['supdte'];
		$addres = $_REQUEST['addres'];
		$supeml = $_REQUEST['supeml'];
		
		
		
		$sql = "INSERT INTO equipsuppliers VALUES ('$supid',
			'$supnme','$supage','$supgend','$phone','$supitem','$totbil','$supdte','$addres','$supeml')";
		
		if(mysqli_query($conn, $sql)){

				echo ('<script>alert("data stored in a database successfully.'
				. ' Please browse your localhost php my admin'
				. ' to view the updated data");
				window.location.assign("addeqpsupp.php");</script>');


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

