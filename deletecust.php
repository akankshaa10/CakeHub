<!DOCTYPE html>
<html>
<head>
	<title>Delete Customers</title>
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

<center><h2>***  DELETE  CUSTOMERS  ***</h2></center>
<br><br><br><br>

<script type="text/javascript">
	
function bck()
{
	window.location.assign('custinfo.php');
}

</script>

<center>
<form action="" method="POST">
	
	
			<label>Customer ID :</label>&nbsp&nbsp
			<input type="text" name="custid" required="">
		<br><br><br><br>	

	

		<input type="submit" name="delcust" value="DELETE">
	&nbsp&nbsp&nbsp&nbsp

	
		<input type="button" name="bckbuton" value="<--BACK" onclick="bck()">
	
<br><br>
</form>

<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'customerdb');

if(isset($_POST['delcust']))
{
	$id=$_POST['custid'];

	$query="DELETE FROM customers WHERE custid='$id'";
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