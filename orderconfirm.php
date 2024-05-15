<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="http://localhost/CSS%20programs/recipeinfo.php">Recipes</a>
  <a href="http://localhost/CSS%20programs/rawmaterials.php">Buy Raw Materials for Cake</a>
  <a href="http://localhost/CSS%20programs/academy.php">Cake Academy</a>
  <a href="http://localhost/CSS%20programs/camp.php#">Summer Cooking Camps</a>
  <a href="http://localhost/CSS%20programs/gallery.php">Gallery</a>
  <a href="https://docs.google.com/forms/d/e/1FAIpQLSfPyhAdtAR6vnlh9w97v0OZqtm_XnaNBneePbCPplThuVoTlg/viewform?usp=sf_link">Feedback</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ </button> &nbsp&nbsp
   
  <!--<h2>Collapsed Sidebar</h2>
  <p>Click on the hamburger menu/bar icon to open the sidebar, and push this content to the right.</p>
</div>-->

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 

<?php
session_start();
require_once("cakedatabase.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  case "add":
    if(!empty($_POST["quantity"])) {
      $productByCode = $db_handle->runQuery("SELECT * FROM allcaketbl WHERE code='" . $_GET["code"] . "'");
      $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
      
      if(!empty($_SESSION["cart_item"])) {
        if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
          foreach($_SESSION["cart_item"] as $k => $v) {
              if($productByCode[0]["code"] == $k) {
                if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                  $_SESSION["cart_item"][$k]["quantity"] = 0;
                }
                $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
              }
          }
        } else {
          $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
        }
      } else {
        $_SESSION["cart_item"] = $itemArray;
      }
    }
  break;
  case "remove":
    if(!empty($_SESSION["cart_item"])) {
      foreach($_SESSION["cart_item"] as $k => $v) {
          if($_GET["code"] == $k)
            unset($_SESSION["cart_item"][$k]);        
          if(empty($_SESSION["cart_item"]))
            unset($_SESSION["cart_item"]);
      }
    }
  break;
  case "empty":
    unset($_SESSION["cart_item"]);
  break;  
}
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Order Confirmation</title> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  table {
    border-collapse: separate;
    border-spacing: 40px 30px;
  }

body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('bgcontact1.jpg');
}

h1{
  color: pink;
}

h3{
  color: pink;
}

h2{
  color: skyblue;
}

h6
{
  color: pink;
}

p{
  color: white;
}

.navbar {
  overflow: hidden;
  background-color: orange;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: DarkCyan;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: DarkSlateGray;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body style="background-color:LightGray;">
<h1>Cake Hub - Online Cake Ordering Website</h1>
<h6>Free Delivery, Great Discounts, Variety Of Products...</h6>
<div class="navbar">
  <a href="http://localhost/CSS%20programs/cake.php">Home</a>
  <a href="http://localhost/CSS%20programs/about.php">About</a>
  <a href="http://localhost/CSS%20programs/allcakes.php">All Cakes</a>

  <div class="dropdown">
    <button class="dropbtn">Shop By Category
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a href="http://localhost/CSS%20programs/eggless.php">Eggless Cakes</a>
      <a href="http://localhost/CSS%20programs/kids.php">Kids Cake</a>
      <a href="http://localhost/CSS%20programs/photo.php">Photo Cake</a>
      <a href="http://localhost/CSS%20programs/premium.php">Premium Cake</a>
      <a href="http://localhost/CSS%20programs/chocolate.php">Chocolate Cake</a>
      <a href="http://localhost/CSS%20programs/dry.php">Dry Cake</a>

    </div>
  </div>
  
   <a href="http://localhost/CSS%20programs/partner.php">Partner With Us</a>
  <a href="http://localhost/CSS%20programs/customcake.php">Customize Cakes</a>
  <a href="http://localhost/CSS%20programs/contactus.php">Contact Us</a>
  <a href="file:///E:/CSS%20programs/contactus.html">LOGOUT</a>

</div>
</body>
</html>

 
 <!--<br>
 <br>-->
 
 
<HTML>
<HEAD>
<TITLE>All Cakes</TITLE>
<link href="allcakestyle.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>
<div id="shopping-cart">
<div class="txt-heading" style="color: white"><b>Order Confirmed</b></div>

<br><br>
<h2><b><center>Your Order Has Been Confirmed. Your Order Will Be Delivered In 30 Minutes. <br><br>If You want To Cancel Your Order Kindly Please Message Us within 10 Minutes Of Order Placing On 80802288700 </center></b></h2>

<br><br><br><br>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>  
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>

</tr> 
<?php   
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
    ?>
        <tr>
        <td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
        <td><?php echo $item["code"]; ?></td>
        <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
        <td  style="text-align:right;"><?php echo "Rs. ".$item["price"]; ?></td>
        <td  style="text-align:right;"><?php echo "Rs. ". number_format($item_price,2); ?></td>
       
        </tr>
        <?php
        $total_quantity += $item["quantity"];
        $total_price += ($item["price"]*$item["quantity"]);
    }
    ?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "Rs. ".number_format($total_price, 2); ?></strong></td>

</tr>
</tbody>
</table>    
  <?php
} else {
?>
<div class="no-records" style="color: white">No Orders</div>
<?php 
}
?>
</div> 

<!--<div id="product-grid">
  <div class="txt-heading" style="color: white">Products</div>-->
  <!--<?php
  $product_array //= $db_handle->//runQuery("SELECT * FROM allcaketbl ORDER BY id ASC");
  //if (!empty($product_array)) { 
   // foreach($product_array as $key=>$value){ 
  ?>-->
  <!--<script type="text/javascript">
    var links=new Array("foregglessinfo1.php","foregglessinfo2.php");
    count=0;
    function disp()
    {
      document.location.href=links[count-1];
    }

  </script>-->
  
 
</div>
</BODY>
</HTML>
<br>
<br>


