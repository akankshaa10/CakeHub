<!DOCTYPE html>
<html>
<head>
	<title>Delete Raw Materials Supplier</title>
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

<center><h2>***  DELETE  RAW  MATERIAL  SUPPLIER  ***</h2></center>
<br><br><br><br>

<script type="text/javascript">
	
function bck()
{
	window.location.assign('rawsuppinfo.php');
}

</script>


<center>
<form action="" method="POST">
	
	
			<label>Supplier ID :</label>&nbsp&nbsp
			<input type="text" name="suppid" required="">
		<br><br><br><br>	

	

		<input type="submit" name="delsup" value="DELETE">
	&nbsp&nbsp&nbsp&nbsp

	
		<input type="button" name="bckbut2" value="<--BACK" onclick="bck()">
	
<br><br>
</form>

<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'customerdb');

if(isset($_POST['delsup']))
{
	$id=$_POST['suppid'];

	$query="DELETE FROM rawsuppliers WHERE suppid='$id'";
	$query_run=mysqli_query($connection,$query);

	if($query_run)
	{
		echo '<script> alert("Data Deleted") </script>';
	}
	else
	{
		echo '<script> alert("Data Not Deleted") </script>';
	}
}

?>
</center>
</body>
</html>