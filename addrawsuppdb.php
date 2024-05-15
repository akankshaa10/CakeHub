<!DOCTYPE html>
<html>

<head>
	<title>Add raw Materials Supplier Details </title>
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
		$suppid = $_REQUEST['suppid'];
		$suppnme = $_REQUEST['suppnme'];
		$suppag = $_REQUEST['suppag'];
		$suppgen = $_REQUEST['suppgen'];
		$phnno = $_REQUEST['phnno'];
		$suppitm = $_REQUEST['suppitm'];
		$bil = $_REQUEST['bil'];
		$suppdate = $_REQUEST['suppdate'];
		$adres = $_REQUEST['adres'];
		$suppem = $_REQUEST['suppem'];
		
		
		
		$sql = "INSERT INTO rawsuppliers VALUES ('$suppid',
			'$suppnme','$suppag','$suppgen','$phnno','$suppitm','$bil','$suppdate','$adres','$suppem')";
		
		if(mysqli_query($conn, $sql)){

				echo ('<script>alert("data stored in a database successfully.'
				. ' Please browse your localhost php my admin'
				. ' to view the updated data");
				window.location.assign("addrawsupp.php");</script>');


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

