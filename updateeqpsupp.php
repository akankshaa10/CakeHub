<!DOCTYPE html>
<html>
<head>
	<title>Update Equipment Supplier</title>
	<style type="text/css">

  table {
    border-collapse: separate;
    border-spacing: 40px 30px;
  }

body {
    font-family: Arial, Helvetica, sans-serif;
  background-image: url('bgadmin1.jpg');
}

h1{
  color: pink;
}

h2{
  color: pink;
}

h3{
  color: pink;
}

h6
{
  color: pink;
}

p{
  color: white;
}


label {
   width: 200px;
   display: inline-block;
   text-align: left;
    color: white;
    text-shadow: 1px 1px 2px 1px grey;
}

input[type=button] {
  background-color: #04AA6D;
  color: white;
  width: 10%;
  padding: 9px;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  width: 10%;
  padding: 9px;
}

input{
	box-shadow: 1px 1px 2px 1px grey;
}

</style>
</head>
<body>

<h1>Cake Hub - Online Cake Ordering Website</h1>
<h6>Free Delivery, Great Discounts, Variety Of Products...</h6>

<br><br><br><br>

<center><h2>***  UPDATE  EQUIPMENT  SUPPLIER  ***</h2></center>
<br><br><br><br>

<script type="text/javascript">
	
function bck()
{
	window.location.assign('equipsuppinfo.php');
}

</script>


<center>
<form action="" method="POST">
	
	
			<label>Supplier ID :</label>&nbsp&nbsp
			<input type="text" name="supid" required="">
		<br><br><br><br>	

	

		<input type="submit" name="adsup" value="VIEW">
	&nbsp&nbsp&nbsp&nbsp

	
		<input type="button" name="bckbut1" value="<--BACK" onclick="bck()">
	
<br><br>
</form>

<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'customerdb');

if(isset($_POST['adsup']))
{
	$id=$_POST['supid'];

	$query="SELECT * FROM equipsuppliers WHERE supid='$id'";
	$query_run=mysqli_query($connection,$query);

	while($row=mysqli_fetch_array($query_run))
	{
		?>
		

		<form action="" method="POST">
			
			<input type="hidden" name="supid" value="<?php echo $row['supid'] ?>"><br><br><br>
              
			<label>Supplier Name :</label>&nbsp&nbsp
<input type="text" name="supnme" value="<?php echo $row['supnme'] ?>"/>
		
	<br><br><br>

	
			<label>Supplier Age :</label>&nbsp&nbsp
<input type="text" name="supage" value="<?php echo $row['supage'] ?>"/>
		<br><br><br>

	
			<label>Supplier Gender :</label>&nbsp&nbsp
<input type="text" name="supgend" value="<?php echo $row['supgend'] ?>"/>
		<br><br><br>

	
			<label>Phone Number :</label>&nbsp&nbsp
<input type="text" name="phone" value="<?php echo $row['phone'] ?>"/>
		<br><br><br>

	
			<label>Supplied Item :</label>&nbsp&nbsp
<input type="text" name="supitem" value="<?php echo $row['supitem'] ?>"/>
		<br><br><br>

	
			<label>Bill :</label>&nbsp&nbsp
<input type="text" name="totbil" value="<?php echo $row['totbil'] ?>"/>
		<br><br><br>

	
			<label>Date :</label>&nbsp&nbsp
<input type="date" name="supdte" value="<?php echo $row['supdte'] ?>"/>
		<br><br><br>

	
			<label>Supplier Address :</label>&nbsp&nbsp
<input type="text" name="addres" value="<?php echo $row['addres'] ?>">
		<br><br><br>

	
		<label>Supplier Email :</label>&nbsp&nbsp
<input type="text" name="supeml" value="<?php echo $row['supeml'] ?>"/>
	<br><br><br><br><br>

	<input type="submit" name="updte" value="UPDATE">

		</form>
	

		<?php
	}
}

?>
</center>
</body>
</html>

<?php

$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'customerdb');

if(isset($_POST['updte']))
{
	$suppnme=$_POST['supnme'];
	$suppag=$_POST['supage'];
	$suppgen=$_POST['supgend'];
	$phnno=$_POST['phone'];
	$suppitm=$_POST['supitem'];
	$bil=$_POST['totbil'];
	$suppdate=$_POST['supdte'];
	$adres=$_POST['addres'];
	$suppem=$_POST['supeml'];


	$query="UPDATE equipsuppliers SET supnme='$_POST[supnme]',supage='$_POST[supage]',supgend='$_POST[supgend]',phone='$_POST[phone]',supitem='$_POST[supitem]',totbil='$_POST[totbil]',supdte='$_POST[supdte]',addres='$_POST[addres]',supeml='$_POST[supeml]' WHERE supid='$_POST[supid]'";

	$query_run=mysqli_query($connection,$query);

	if($query_run)
	{
		echo '<script> alert("Data Updated") </script>';
	}
	else
	{
		echo '<script> alert("Data Not Updated") </script>';
	}
 }

?>