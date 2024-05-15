<!DOCTYPE html>
<html>
<head>
	<title>Customer Information</title>
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

label{
  color: white;
}

input[type=button] {
  background-color: #04AA6D;
  color: white;
  width: 20%;
  padding: 12px;
}

</style>
</head>
<body>

<h1>Cake Hub - Online Cake Ordering Website</h1>
<h6>Free Delivery, Great Discounts, Variety Of Products...</h6>

<br><br><br><br>

<center><img src="cust.jpg" width="30%"></center><br><br>

<center><h2>***  Customer  Information  ***</h2></center>
<br><br><br><br>

<script type="text/javascript">
	
function adm()
  {
    window.location.assign('admin.php');
  }

  function add()
  {
    window.location.assign('addcust.php');
  }

  function viv()
  {
    window.location.assign('viewcust.php');
  }

  function updt()
  {
    window.location.assign('updatecust.php');
  }

  function dele()
  {
    window.location.assign('deletecust.php');
  }

</script>

<form>

<center>	
<input type="button" name="ad" value="ADD CUSTOMER" onclick="add()"><br><br><br><br><br><br> 
<input type="button" name="viw" value="VIEW CUSTOMER" onclick="viv()"><br><br><br><br> <br><br>
<input type="button" name="upd" value="UPDATE CUSTOMER" onclick="updt()"><br><br><br><br><br><br> 
<input type="button" name="del" value="DELETE CUSTOMER" onclick="dele()"><br><br><br><br> <br><br>
<input type="button" name="bck" value="<--BACK" onclick="adm()"><br><br><br><br>
</center>

</form>

</body>
</html>