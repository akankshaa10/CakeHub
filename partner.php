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

<!DOCTYPE html>
<html>
<head>
  <title>Partner With Us...</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  table {
    border-collapse: separate;
    border-spacing: 40px 30px;
  }

body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('bgmyacc1.jpg');
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

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  width: 7%;
  padding: 0.3%;
}

input[type=reset] {
  background-color: #04AA6D;
  color: white;
  width: 7%;
  padding: 0.3%;
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
  
   <a href="http://localhost/CSS%20programs/partner.php">Partner With Us</a>
  <a href="http://localhost/CSS%20programs/customcake.php">Customize Cakes</a>
  <a href="http://localhost/CSS%20programs/contactus.php">Contact Us</a>
  <a href="logout.php">LOGOUT</a>

</div>
  <h1 style="color:yellow;">Partner With Us</h1>
  <hr>

  

<br>
<p>Are you looking Cake Franchisees? Join hands with Cake Hub and market your cake shop to sell and provide services in your desired area nearby you , with verities of latest unique delicious cakes.</p><br><br>

<b><big style="color: pink">WE COULD PARTNER IN SEVERAL DIFFERENT WAYS :</big></b><br><br>
<p>1) Provides several way to start cake services & in your locations or<br><br>
2) Enter into a franchise arrangement where we can set up the cake shop for you and train you to manage it competently and professionally, or<br><br>
3) Let us market and manage the cake shop for you</p><br><br>

<p>Interested? Write to us at <a>kateamol3532@gmail.com</a> for a prompt response.</p><br>
<hr><br>
    

    <h3>Franchisee Enquiry fill up the below Details :</h3><br><br>

      <img src="partnerus.jpg" usemap="#prtus" height="300" width="300" align="right">
<map name="prtus">
<area shape="rect" coords="1,2,297,448">


<table align="center"><br><br>

    <form action="partnerdb.php" method="post">
      
      <label>Name :</label><br>
      <input type="text" name="pname" align="center" placeholder="Anvi Sunil Kumbhar" required=""> <br><br><br>

      <label>Email ID :</label> <br>
      <input type="email" name="pem" align="center" placeholder="anvi001@gmail.com" 
          title="Please provide E-mail address in the format kateamol3532@gmail.com" required=""><br><br><br>

      <label>Mobile Number:</label> <br>
      <input type="number" name="pmobno" align="center" placeholder="8798563412" required=""><br><br><br>

      <label>What's App Number:</label> <br>
      <input type="number" name="pwsno" align="center" placeholder="9970452378" required=""><br><br><br>


     <label for="ref">Reference</label><br><br>
            <select name="ref" id="ref" width="500" style="padding: 0.5%" required="">
              <option value="selec">-- Select --</option>
              <option value="jst">Justdial</option>
              <option value="gog">Google</option>
              <option value="frnd">Friend</option>
              <option value="on">Online</option>
              <option value="nebr">Neighbours</option>
            </select>
            <br><br><br>

      <label>Enter Your franchise requirement and your proposed shop location :</label><br><br>
      <textarea name="req" rows="6" cols="25" placeholder="Enter franchise requirement and shop location" required=""></textarea><br><br><br>

      

      
      
      &nbsp&nbsp&nbsp&nbsp&nbsp<input class="btn btn-primary" type="submit" value="Submit">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input class="btn btn-primary" type="reset" value="Reset">

    </form>
  </table><br><br><br>

  <p>==> Download Cake Hub various cake catalog - Form from the below download link.</p>
       <br>
       <a href="http://cakestorydesserts.com/assets/images/Brochure_cakestory.pdf" style="color: yellow"> Download</a>

</body>
</html>