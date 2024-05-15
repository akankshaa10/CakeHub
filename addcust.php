<!DOCTYPE html>
<html>
<head>
	<title>Add Customers</title>
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

<center><h2>***  ADD  CUSTOMERS  ***</h2></center>
<br><br><br><br>

<script type="text/javascript">
	
function bck()
{
	window.location.assign('custinfo.php');
}

</script>

<form action="addcustdb.php" method="post">
	<center>
	<tr>
		<td>
			<label>Customer ID :</label>&nbsp&nbsp
			<input type="text" name="custid" required="">
		</td>
	</tr><br><br><br>	

	<tr>
		<td>
			<label>Customer Name :</label>&nbsp&nbsp
<input type="text" name="custnme" required="">
		</td>
	</tr><br><br><br>

	<tr>
		<td>
			<label>Customer Age :</label>&nbsp&nbsp
<input type="text" name="custag" required="">
		</td>
	</tr><br><br><br>

	<tr>
		<td>
			<label>Customer Gender :</label>&nbsp&nbsp
<input type="text" name="custgen" required="">
		</td>
	</tr><br><br><br>

	<tr>
		<td>
			<label>Phone Number :</label>&nbsp&nbsp
<input type="text" name="phno" required="">
		</td>
	</tr><br><br><br>

	<tr>
		<td>
			<label>Date :</label>&nbsp&nbsp
<input type="date" name="dte" required="">
		</td>
	</tr><br><br><br>

	<tr>
		<td>
			<label>Buyed Cake Name :</label>&nbsp&nbsp
<input type="text" name="cakenm" required="">
		</td>
	</tr><br><br><br>

	<tr>
		<td>
			<label>Total Cost of Cake :</label>&nbsp&nbsp
<input type="text" name="cost" required="">
		</td>
	</tr><br><br><br>

	<tr>
		<td>
			<label>Customer Address :</label>&nbsp&nbsp
<textarea name="addr" rows="4" cols="25" required=""></textarea>
		</td>
	</tr><br><br><br>

	<tr>
		<td>
		<label>Customer Email :</label>&nbsp&nbsp
<input type="text" name="custem" required="">
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