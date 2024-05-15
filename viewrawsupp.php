<!DOCTYPE html>
<html>
<head>
	<title>View Raw Materials Supplier</title>
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

<script type="text/javascript">
	
function bck()
{
	window.location.assign('rawsuppinfo.php');
}

</script>

<center><h2>***  VIEW  RAW  MATERIAL  SUPPLIER  ***</h2></center>
<br><br><br><br>


<center>
<form action="" method="POST">
	
	
			<label>Supplier ID :</label>&nbsp&nbsp
			<input type="text" name="suppid" required="">
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
	$id=$_POST['suppid'];

	$query="SELECT * FROM rawsuppliers WHERE suppid='$id'";
	$query_run=mysqli_query($connection,$query);

	while($row=mysqli_fetch_array($query_run))
	{
		?>
		

		<form action="" method="POST">
			
			<input type="hidden" name="suppid" value="<?php echo $row['suppid'] ?>"><br><br><br>
              
			<label>Supplier Name :</label>&nbsp&nbsp
<input type="text" name="suppnme" value="<?php echo $row['suppnme'] ?>"/>
		
	<br><br><br>

	
			<label>Supplier Age :</label>&nbsp&nbsp
<input type="text" name="suppag" value="<?php echo $row['suppag'] ?>"/>
		<br><br><br>

	
			<label>Supplier Gender :</label>&nbsp&nbsp
<input type="text" name="suppgen" value="<?php echo $row['suppgen'] ?>"/>
		<br><br><br>

	
			<label>Phone Number :</label>&nbsp&nbsp
<input type="text" name="phnno" value="<?php echo $row['phnno'] ?>"/>
		<br><br><br>

	
			<label>Supplied Item :</label>&nbsp&nbsp
<input type="text" name="suppitm" value="<?php echo $row['suppitm'] ?>"/>
		<br><br><br>

	
			<label>Bill :</label>&nbsp&nbsp
<input type="text" name="bil" value="<?php echo $row['bil'] ?>"/>
		<br><br><br>

	
			<label>Date :</label>&nbsp&nbsp
<input type="date" name="suppdate" value="<?php echo $row['suppdate'] ?>"/>
		<br><br><br>

	
			<label>Supplier Address :</label>&nbsp&nbsp
<input type="text" name="adres" value="<?php echo $row['adres'] ?>">
		<br><br><br>

	
		<label>Supplier Email :</label>&nbsp&nbsp
<input type="text" name="suppem" value="<?php echo $row['suppem'] ?>"/>
	<br><br><br><br><br>

		</form>
	

		<?php
	}
}

?>
</center>
</body>
</html>