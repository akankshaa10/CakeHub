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

<!DOCTYPE html>
<html>
<head>
  <title>Customize Cakes...</title>
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

  <marquee behavior="scroll" direction="left" style="color: white"> Free Shipping on Orders above Rs. 1499 /-   Cash on Delivery on Orders above Rs.999 </marquee>
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
  
   <a href="file:///E:/CSS%20programs/contactus.html">My Orders</a>
  <a href="http://localhost/CSS%20programs/myaccount.php">My Account</a>
  <a href="http://localhost/CSS%20programs/contactus.php">Contact Us</a>
  <a href="file:///E:/CSS%20programs/contactus.html">LOGOUT</a>

</div>
  <fieldset><legend><h1 style="color:yellow;">Customize Cakes</h1></legend>

    <img src="contactimg.jpg" usemap="#contim" height="300" width="300" align="right">
<map name="contim">
<area shape="rect" coords="1,2,297,448">


<p>Just Cake provides customized cakes in Pune! You can send your requirements and we will design a cake as per your special design. Most of our customers demand custom cakes to make their celebration memorable. Custom Cake requires large quantity. It depends on which type of cake you want. If you are arranging a big party or celebration at that time you will require large cakes. Most of the organizations order such cakes for their parties, anniversary days, etc. We can make up to 50 Pound (25 KG) Cake for your celebration. Please fill the order form and specify your requirements. We will contact you to get more details about your order and to confirm your order.</p><br><br><br><br>

<b><big style="color: pink">FREQUENTLY ASKED QUESTIONS WHILE ORDERING CUSTOMIZED DESIGNER CAKES IN PUNE:</big></b><br><br>
<p>1) I don’t find design on website that I want.<br><br> <b>Answer: </b> Please fill the order form. We will check and get back to you.<br><br>

2) I am not in Pune. How can I pay for customize design because I can’t order it from website?<br><br> <b>Answer:</b> Don’t worry. We will send you an invoice for the same and you can pay through your credit / debit card or internet banking. Even if you are not in India, you can pay through PayPal invoice.</p>
    

    <h3>Please Fill Form Below & Send Your Requirements</h3>
<table align="center">
    <form>
      
      <label>Your Name:</label><br>
      <input type="text" name="name" align="center"> <br><br>

      <label>Your Email:</label> <br>
      <input type="text" name="em" align="center"><br><br>

      <label>Your Mobile Number:</label> <br>
      <input type="text" name="mobno" align="center"><br><br>

      <label>Expected Delivery Date:</label> <br>
      <input type="date" name="expdte" align="center"><br><br>

      <label>Required Cake Weight:</label> <br>
      <input type="date" name="expdte" align="center"><br><br>

      <label>Mentioned Your Requirements :</label><br>
      <textarea name="req" rows="6" cols="25"></textarea><br><br><br>

      
      
      &nbsp&nbsp&nbsp&nbsp&nbsp<input class="btn btn-primary" type="submit" value="Submit">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input class="btn btn-primary" type="reset" value="Reset">

    </form>
  </table>
</fieldset>
</body>
</html>