<!DOCTYPE html>
<html>
<head>
	<title>Supplier Type Information</title>
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

<center><img src="supp.jpg" width="30%"></center><br><br>

<center><h2>***  Supplier  Information  ***</h2></center>
<br><br><br><br>

<script type="text/javascript">
	
function admbck()
  {
    window.location.assign('admin.php');
  }

  function rawsup()
  {
    window.location.assign('rawsuppinfo.php');
  }

  function eqpsup()
  {
    window.location.assign('equipsuppinfo.php');
  }

</script>

<form>

<center>	
<input type="button" name="raw" value="RAW MATERIALS SUPPLIER" onclick="rawsup()"><br><br><br><br><br><br> 
<input type="button" name="equip" value="EQUIPMENT SUPPLIER" onclick="eqpsup()"><br><br><br><br> <br><br>
<input type="button" name="bck1" value="<--BACK" onclick="admbck()"><br><br><br><br>
</center>

</form>

</body>
</html>