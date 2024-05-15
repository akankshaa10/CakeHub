<!DOCTYPE html>
<html>
<head>
	<title>View Customers</title>
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

<center><h2>***  VIEW  CUSTOMERS  ***</h2></center>
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

	

		<input type="submit" name="adcust" value="VIEW">
	&nbsp&nbsp&nbsp&nbsp

	
		<input type="button" name="bckbut" value="<--BACK" onclick="bck()">
	
<br><br>
</form>

<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'customerdb');

if(isset($_POST['adcust']))
{
	$id=$_POST['custid'];

	$query="SELECT * FROM customers WHERE custid='$id'";
	$query_run=mysqli_query($connection,$query);

	while($row=mysqli_fetch_array($query_run))
	{
		?>
		

		<form action="" method="POST">
			
			<input type="hidden" name="custid" value="<?php echo $row['custid'] ?>"><br><br><br>
              
			<label>Customer Name :</label>&nbsp&nbsp
<input type="text" name="custnme" value="<?php echo $row['custnme'] ?>"/>
		
	<br><br><br>

	
			<label>Customer Age :</label>&nbsp&nbsp
<input type="text" name="custag" value="<?php echo $row['custag'] ?>"/>
		<br><br><br>

	
			<label>Customer Gender :</label>&nbsp&nbsp
<input type="text" name="custgen" value="<?php echo $row['custgen'] ?>"/>
		<br><br><br>

	
			<label>Phone Number :</label>&nbsp&nbsp
<input type="text" name="phno" value="<?php echo $row['phno'] ?>"/>
		<br><br><br>

	
			<label>Date :</label>&nbsp&nbsp
<input type="date" name="dte" value="<?php echo $row['dte'] ?>"/>
		<br><br><br>

	
			<label>Buyed Cake Name :</label>&nbsp&nbsp
<input type="text" name="cakenm" value="<?php echo $row['cakenm'] ?>"/>
		<br><br><br>

	
			<label>Total Cost of Cake :</label>&nbsp&nbsp
<input type="text" name="cost" value="<?php echo $row['cost'] ?>"/>
		<br><br><br>

	
			<label>Customer Address :</label>&nbsp&nbsp
<input type="text" name="addr" value="<?php echo $row['addr'] ?>">
		<br><br><br>

	
		<label>Customer Email :</label>&nbsp&nbsp
<input type="text" name="custem" value="<?php echo $row['custem'] ?>"/>
	<br><br><br><br><br>

		</form>
	

		<?php
	}
}

?>
</center>
</body>
</html>