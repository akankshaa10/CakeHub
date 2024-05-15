<!DOCTYPE html>
<html>
<head>
	<title>Add Equipment Supplier</title>
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

</style>
</head>
<body>

<h1>Cake Hub - Online Cake Ordering Website</h1>
<h6>Free Delivery, Great Discounts, Variety Of Products...</h6>

<br><br><br><br>

<center><h2>***  ADD  EQUIPMENT  SUPPLIER  ***</h2></center>
<br><br><br><br>

<script type="text/javascript">
	
function bck()
{
	window.location.assign('equipsuppinfo.php');
}

</script>

<form action="addeqpsuppdb.php" method="post">
	<center>
	<tr>
		<td>
			<label>Supplier ID :</label>&nbsp&nbsp
			<input type="text" name="supid" required="">
		</td>
	</tr><br><br><br>	

	<tr>
		<td>
			<label>Supplier Name :</label>&nbsp&nbsp
<input type="text" name="supnme" required="">
		</td>
	</tr><br><br><br>

	<tr>
		<td>
			<label>Supplier Age :</label>&nbsp&nbsp
<input type="text" name="supage" required="">
		</td>
	</tr><br><br><br>

	<tr>
		<td>
			<label>Supplier Gender :</label>&nbsp&nbsp
<input type="text" name="supgend" required="">
		</td>
	</tr><br><br><br>

	<tr>
		<td>
			<label>Phone Number :</label>&nbsp&nbsp
<input type="text" name="phone" required="">
		</td>
	</tr><br><br><br>

	<tr>
		<td>
			<label>Supplied Item :</label>&nbsp&nbsp
<input type="text" name="supitem" required="">
		</td>
	</tr><br><br><br>

	<tr>
		<td>
			<label>Bill :</label>&nbsp&nbsp
<input type="text" name="totbil" required="">
		</td>
	</tr><br><br><br>

	<tr>
		<td>
			<label>Date :</label>&nbsp&nbsp
<input type="date" name="supdte" required="">
		</td>
	</tr><br><br><br>

	<tr>
		<td>
			<label>Supplier Address :</label>&nbsp&nbsp
<textarea name="addres" rows="4" cols="25" required=""></textarea>
		</td>
	</tr><br><br><br>

	<tr>
		<td>
		<label>Supplier Email :</label>&nbsp&nbsp
<input type="text" name="supeml" required="">
	</td>
</tr><br><br><br><br><br>

<tr>
	<td>
		<input type="submit" name="adcust" value="ADD">
	</td>&nbsp&nbsp&nbsp&nbsp

	<td>
		<input type="button" name="bckbut" value="<--BACK" onclick="bck()">
	</td>
</tr><br><br>

</center>
</form>

</body>
</html>