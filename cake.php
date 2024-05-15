<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  background-image: url('bgimg1.jpg');
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


<!--<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>



<form class="example" action="/action_page.php">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

<p>Centered inside a form with max-width:</p>
<form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

</body>
</html>-->

<br><br>

<!DOCTYPE html>
<html>
<head>
<title>Cake Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('bgimg1.jpg');
}

h1{
  color: pink;
}

h6
{
  color: pink;
}

h2
{
  color: skyblue;
  font-family: Brush Script MT;
  font-size: 400%;

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

<script type="text/javascript">
var image=new Array("cake1.jpg","slidcake1.jpg","slidcake2.jpg","slidcake6.jpg");
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

<body onload="change()" style="background-color:LightGray;">
<marquee behavior="scroll" direction="left" style="color: white"> Free Shipping on Orders above Rs. 1499 /-   Cash on Delivery on Orders above Rs.999 </marquee>
<!--<a href="" style="text-decoration: none;">
    <figure>
   <img src="https://img.pngio.com/download-for-free-10-png-cake-logo-transparent-top-images-at-cake-logo-png-452_640.jpg" width="100" height="100"/>
   
 </figure>
</a>
</a>
</a>-->

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

<img height="800" width="100%" name="i">
<!--<img src="" usemap="#cakim" height="600" width="1270">
<map name="cakim">
<area shape="rect" coords="2,2,764,262">
</map>-->

<br><br>
<center>
  <h2>Welcome to Cake Hub</h2><br><br>
  <p>We are all aware that cakes are now one of the most essentials when it comes to any celebrations from birthdays to anniversaries to special events cakes have become the ﬁrst to order item for all events. Not only events cakes are also one of the most enjoyed dessert.</p>
</center>
</body>
</html>
<html>
<div id="about">
<a href="aboutpg.php"></a>
</div>
</html>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: "Lato", sans-serif;}

.tablink {
  background-color: orange;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 33.3%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content */
.tabcontent {
  color: white;
  display: none;
  padding: 70px;
  text-align: center;
}

#faci {background-color:black;}
#royq {background-color:black;}
#prodser {background-color:black;}

</style>
</head>
<body>



<div id="faci" class="tabcontent">
  <h1>FACILITIES</h1>
  <p>Franchisee available on demand basis or Long-Term Association.<br><br>
Explore pre-screened Franchises for sale with verified contact details.<br><br>
Several types of support are avaliable<br><br>
Provide Franchisees for Cake in small investment with dedicated team support.</p>
</div>

<div id="royq" class="tabcontent">
  <h1>ROYAL QUALITY</h1>
  <p>Our wide range of Delicious various party occasion Cakes.<br><br>
Products that includes Cakes, Cookies, Buns, Rusk, Cakes Rusk and various others.<br><br>
Highly admired for their delicious taste and varied flavors and recipe.<br><br>
Comprehensive range of Birthday Cakes in various flavors.</p> 
</div>

<div id="prodser" class="tabcontent">
  <h1>PRODUCTS & SERVICES</h1>
  <p>Fast & On time delivery in Bulk Order.<br><br>
We don’t compromise on quality & taste.<br><br>
Dedicated & Experienced Team.<br><br>
Unique and latest verities of flavors.<br><br>
Cake Varities Birthday Cakes,Wedding Cakes,Anniversary cake, party cake etc .</p>
</div>



<button class="tablink" onclick="openCity('faci', this, 'skyblue')" id="defaultOpen" style="color: black">FACILITIES</button>
<button class="tablink" onclick="openCity('royq', this, 'skyblue')" style="color: black">ROYAL QUALITY</button>
<button class="tablink" onclick="openCity('prodser', this, 'skyblue')" style="color: black">PRODUCTS & SERVICES</button>


<script>
function openCity(cityName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(cityName).style.display = "block";
  elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 
