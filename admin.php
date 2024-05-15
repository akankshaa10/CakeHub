<!DOCTYPE html>

<html>
<head>
<title>Admin Side...</title>
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

<script type="text/javascript">
var image=new Array("admincake1.jpg","admincake2.jpg","admincake3.jpg");
j=0;
function change()
{
      document.i.src=image[j];
      if(j<image.length-1)

     {
          j++;
     }
    else
    {
           j=0;
    }
    setTimeout("change()",2000);
}
</script>
</head>

<body onload="change()">
<h1>Cake Hub - Online Cake Ordering Website</h1>
<h6>Free Delivery, Great Discounts, Variety Of Products...</h6>
<center><img height="50%" width="50%" name="i"></center>
<br><br><br><br> <br><br> 

<script type="text/javascript">

  function custin()
  {
    window.location.assign('custinfo.php');
  }

   function suppin()
  {
    window.location.assign('supptype.php');
  }

  function logot()
  {
    window.location.assign('login.php');
  }

</script>

<form>
<audio autoplay loop>
      <source src="http://localhost/CSS%20programs/admin%20login%20voice%202.aac"/>
      <source src="http://localhost/CSS%20programs/admin%20login%20voice%202.ogg"/>
    </audio>
<center>	
<input type="button" name="cust" value="CUSTOMER" onclick="custin()"><br><br><br><br><br><br> 
<input type="button" name="supp" value="SUPPLIER" onclick="suppin()"><br><br><br><br> <br><br> 
<input type="button" name="log" value="LOGOUT" onclick="logot()"><br><br><br><br> 
</center>

</form>
</body>
</html>