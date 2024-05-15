<!DOCTYPE html>
<html>
<head>
	<title>Equipment Supplier Information</title>
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

<center><img src="eqpsupp.jpg" width="30%"></center><br><br>

<center><h2>***  Equipment  Supplier  Information  ***</h2></center>
<br><br><br><br>

<script type="text/javascript">
	
function admbck()
  {
    window.location.assign('supptype.php');
  }

  function add()
  {
    window.location.assign('addeqpsupp.php');
  }

  function viv()
  {
    window.location.assign('vieweqpsupp.php');
  }

  function updt()
  {
    window.location.assign('updateeqpsupp.php');
  }

  function dele()
  {
    window.location.assign('deleteeqpsupp.php');
  }

</script>

<form>

<center>	
<input type="button" name="ad3" value="ADD EQUIPMENT MATERIALS SUPPLIER" onclick="add()"><br><br><br><br><br><br> 
<input type="button" name="viw3" value="VIEW EQUIPMENT MATERIALS SUPPLIER" onclick="viv()"><br><br><br><br> <br><br>
<input type="button" name="upd3" value="UPDATE EQUIPMENT MATERIALS SUPPLIER" onclick="updt()"><br><br><br><br><br><br> 
<input type="button" name="del3" value="DELETE EQUIPMENT MATERIALS SUPPLIER" onclick="dele()"><br><br><br><br> <br><br>
<input type="button" name="bck3" value="<--BACK" onclick="admbck()"><br><br><br><br>
</center>

</form>

</body>
</html>