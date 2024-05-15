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
  <a href="http://localhost/CSS%20programs/camp.php">Summer Cooking Camps</a>
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
	<title>Recipes of Cakes</title> 
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
  color: white;
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

h4{
  color: pink;
}

h15{
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

a{
  color: orange;
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
  <a href="logout.php">LOGOUT</a>

</div>
 
 <br>
 <br>
 <h3>Recipes</h3>
 
 <hr><br>
 
 <table>
  <tr>
    <td>
<a href=" http://localhost/CSS%20programs/egglessbutter.php">
	 <a href="http://localhost/CSS%20programs/egglessbutter.php" style="text-decoration: none;">
    <figure>
   <img src="https://bakebunsacademy.com/wp-content/uploads/2018/08/EGGLESS-CAKES-WORKSHOP.jpg" width="200" height="200"/>
   <figcaption>Eggless Butterscotch Cake<br>500 Rs</figcaption>
 </figure>
</a>
</a>
</a>
</td>

<td>
<!--<a href=" https://api.whatsapp.com/send?phone=+919763572528">-->
	 <a href="http://localhost/CSS%20programs/egglesscardamom.php" style="text-decoration: none;">
    <figure>
   <img src="https://www.aayisrecipes.com/wp-content/uploads/2014/08/eggless-cardamom-cake.jpg" width="200" height="200"/>
   <figcaption>Eggless Cardamom Cake<br>400 Rs</figcaption>
 </figure>
</a>
</a>
</a>
</td>

<td>

	 <a href="http://localhost/CSS%20programs/egglessblackfor.php" style="text-decoration: none;">
    <figure>
   <img src="https://www.cookwithmanali.com/wp-content/uploads/2018/02/Eggless-Black-Forest-Cake-500x500.jpg" width="200" height="200"/>
   <figcaption>Eggless Black Forest Chocolate Cake<br>400 Rs</figcaption>
 </figure>
</a>
</a>
</a>
</td>

<td>

	 <a href="http://localhost/CSS%20programs/egglessredvelv.php" style="text-decoration: none;">
    <figure>
   <img src="https://static.wixstatic.com/media/ca0f79_fbafdb9d789143ba82abf60c54e2b98d~mv2_d_5184_3456_s_4_2.jpg/v1/crop/x_2,y_0,w_5179,h_3456/fill/w_538,h_359,al_c,q_80,usm_0.66_1.00_0.01/IMG_1411a.webp" width="200" height="200"/>
   <figcaption>Eggless Red Velvet Cake <br>700 Rs</figcaption>
 </figure>
</a>
</a>
</a>
</td>
</tr>

<tr>
  <td>

	 <a href="http://localhost/CSS%20programs/egglessstrawjam.php" style="text-decoration: none;">
    <figure>
   <img src="https://tmbidigitalassetsazure.blob.core.windows.net/rms3-prod/attachments/37/1200x1200/Strawberry-Jam-Cake_EXPS_FT21_92780_F_0218_1.jpg" width="200" height="200"/>
   <figcaption>Eggless Strawberry Jam Cake<br>1000 Rs</figcaption>
 </figure>
</a>
</a>
</a>
</td>

<td>

	 <a href="http://localhost/CSS%20programs/egglessrosepista.php" style="text-decoration: none;">
    <figure>
   <img src="https://i.ytimg.com/vi/kupeUv-3aCk/maxresdefault.jpg" width="200" height="200"/>
   <figcaption>Eggless Rose and Pistachio Cake<br>300 Rs </figcaption>
 </figure>
</a>
</a>
</a>
</td>

<td>

   <a href="http://localhost/CSS%20programs/panda.php" style="text-decoration: none;">
    <figure>
   <img src="https://assets.winni.in/c_limit,dpr_2,fl_progressive,q_80,w_220/44480_adorable-panda-cake-for-toddler.jpeg" width="200" height="200"/>
   <figcaption>Panda Cake<br>500 Rs</figcaption>
</figure>
</a>
</a>
</a>
</td>

<td>

   <a href="http://localhost/CSS%20programs/minnie.php" style="text-decoration: none;">
    <figure>
   <img src="https://amphorabakery.com/wp-content/uploads/2018/12/C-54.jpg" width="200" height="200"/>
   <figcaption>Minny Mouse Cake<br>400 Rs</figcaption>
</figure>
</a>
</a>
</a>
</td>
</tr>

<tr>
<td>

   <a href="http://localhost/CSS%20programs/barbie.php" style="text-decoration: none;">
    <figure>
   <img src="https://www.indiagiftskart.com/upload/productimg/20200827095134_large_Barbie-the-kid-cake.jpg" width="200" height="200"/>
   <figcaption>Barbie Cake<br>800 Rs</figcaption>
</figure>
</a>
</a>
</a>
</td>

<td>

   <a href="http://localhost/CSS%20programs/minion.php" style="text-decoration: none;">
    <figure>
   <img src="https://www.giftmyemotions.com/image/cache/floralnation/cakes/GME-FNC-047-800x800.jpg" width="200" height="200"/>
   <figcaption>Minions Cake <br>700 Rs</figcaption>
</figure>
</a>
</a>
</a>
</td>



  <td>

   <a href="http://localhost/CSS%20programs/bheem.php" style="text-decoration: none;">
    <figure>
   <img src="https://www.kcbakers.com/wp-content/uploads/2017/07/chhota-bheem-gang-photo-cake.jpg" width="200" height="200"/>
   <figcaption>Chota Bheem Cake<br>1000 Rs</figcaption>
</figure>
</a>
</a>
</a>
</td>

<td>

   <a href="http://localhost/CSS%20programs/smiley.php" style="text-decoration: none;">
    <figure>
   <img src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/28012019/Smiley-cake_6-600x600.jpg" width="200" height="200"/>
   <figcaption>Smiley Cake<br>300 Rs </figcaption>
</figure>
</a>
</a>
</a>
</td>
</tr>


<tr>
 <td>

   <a href="http://localhost/CSS%20programs/chocostraw.php" style="text-decoration: none;">
    <figure>
   <img src="https://i.pinimg.com/originals/db/81/a4/db81a48c37cc4edc4f188266be2e9847.jpg" width="200" height="200"/>
   <figcaption>Chocolate Strawberry Cake<br>500 Rs</figcaption>
   </figure>
</a>
</a>
</a>
</td>

<td>

   <a href="http://localhost/CSS%20programs/chocomoist.php" style="text-decoration: none;">
    <figure>
   <img src="https://www.sugarsaltmagic.com/wp-content/uploads/2016/04/Black-Magic-Cake-1-1.jpg" width="200" height="200"/>
   <figcaption>Moist Chocolate Cake<br>350 Rs</figcaption>
   </figure>
</a>
</a>
</a>
</td>

<td>

   <a href="http://localhost/CSS%20programs/chococaramel.php" style="text-decoration: none;">
    <figure>
   <img src="https://i1.wp.com/sugarspiceslife.com/wp-content/uploads/2018/05/Chocolate-Caramel-Cake-1-1.jpg?resize=1024%2C683&ssl=1" width="200" height="200"/>
   <figcaption>Chocolate Caramel Cake<br>400 Rs</figcaption>
   </figure>
</a>
</a>
</a>
</td>






  <td>

   <a href="http://localhost/CSS%20programs/chocoice.php" style="text-decoration: none;">
    <figure>
   <img src="https://www.oliveandmango.com/images/uploads/2018_08_15_chocolate_oreo_cookie_ice_cream_cake_1.jpg" width="200" height="200"/>
   <figcaption>Ice Creame Chocolate Cake<br>800 Rs</figcaption>
   </figure>
</a>
</a>
</a>
</td>
</tr>

<tr>
<td>

   <a href="http://localhost/CSS%20programs/chocorasp.php" style="text-decoration: none;">
    <figure>
   <img src="https://www.homecookingadventure.com/images/recipes/chocolate_raspberry_cake_m1.jpg" width="200" height="200"/>
   <figcaption>Raspberry Chocolate Cake<br>400 Rs </figcaption>
   </figure>
</a>
</a>
</a>
</td>

<td>

   <a href="http://localhost/CSS%20programs/cosmetic.php" style="text-decoration: none;">
    <figure>
   <img src="https://static.halfcute.com/rs:600:auto:auto/jpeg:85/cakeszone/product/cakezone-diva-cosmetics-delight-halfcute-diva-cosmetics-delight1510750490.png" width="200" height="200"/>
   <figcaption>Cosmetics Delight Premium Cake<br>1700 Rs</figcaption>
 </figure>
</a>
</a>
</a>
</td>



<td>

   <a href="http://localhost/CSS%20programs/overloaded.php" style="text-decoration: none;">
    <figure>
   <img src="https://joykascakes.com/wp-content/uploads/2020/09/IMG_20200605_140152-01.jpeg" width="200" height="200"/>
   <figcaption>Chocolate Overloaded Premium Cake<br>1600 Rs</figcaption>
 </figure>
</a>
</a>
</a>
</td>



<td>

   <a href="http://localhost/CSS%20programs/belgian.php" style="text-decoration: none;">
    <figure>
   <img src="https://www.bangalorebakers.com/thumbimages/belgian-chocolate-gateaux4.jpg" width="200" height="200"/>
   <figcaption>Belgian Chocolate Cherry Premium Cake<br>1000 Rs</figcaption>
 </figure>
</a>
</a>
</a>
</td>
</tr>


<tr>
  <td>

   <a href="http://localhost/CSS%20programs/vancho.php" style="text-decoration: none;">
    <figure>
   <img src="https://i.pinimg.com/474x/20/e2/0f/20e20fbc8282ea0a3c81a569afc63503.jpg" width="200" height="200"/>
   <figcaption>Dark Vancho Premium Cake<br>1200 Rs</figcaption>
 </figure>
</a>
</a>
</a>
</td>



<td>

   <a href="http://localhost/CSS%20programs/oreo.php" style="text-decoration: none;">
    <figure>
   <img src="https://www.bangalorebakers.com/thumbimages/eggless-oreo-cheese-cake-16.jpg" width="200" height="200"/>
   <figcaption>Oreo Premium Cake<br>800 Rs </figcaption>
 </figure>
</a>
</a>
</a>
</td>



    <td>

   <a href="http://localhost/CSS%20programs/drycherry.php" style="text-decoration: none;">
    <figure>
   <img src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/IMG/1571236685IMG_3237-600x600.jpg" width="200" height="200"/>
   <figcaption>Cherry Chocolate Dry Cake<br>800 Rs</figcaption>
   </figure>
</a>
</a>
</a>
</td>



<td>

   <a href="http://localhost/CSS%20programs/datesval.php" style="text-decoration: none;">
    <figure>
   <img src="https://i1.fnp.com/images/pr/l/v20200205192510/dry-cake-with-dates-n-walnuts_1.jpg" width="200" height="200"/>
   <figcaption>Dry Cake with Dates and Valnuts<br>1000 Rs</figcaption>
   </figure>
</a>
</a>
</a>
</td>
</tr>

<tr>
<td>

   <a href="http://localhost/CSS%20programs/vanalmond.php" style="text-decoration: none;">
    <figure>
   <img src="https://5.imimg.com/data5/XX/QR/GLADMIN-14355281/vanilla-almond-dry-cake-500x500.png" width="200" height="200"/>
   <figcaption>Vanilla Almond Dry Cake<br>700 Rs</figcaption>
   </figure>
</a>
</a>
</a>
</td>

<td>

   <a href="http://localhost/CSS%20programs/cheese.php" style="text-decoration: none;">
    <figure>
   <img src="https://3.imimg.com/data3/XC/QU/MY-16449266/cheese-dry-cake-500x500.jpg" width="200" height="200"/>
   <figcaption>Cheese Dry Cake<br>400 Rs</figcaption>
   </figure>
</a>
</a>
</a>
</td>




<td>

   <a href="http://localhost/CSS%20programs/blueber.php" style="text-decoration: none;">
    <figure>
   <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4WMi14y00CK7hF5r5i-3RNtOCLF918m3edg&usqp=CAU" width="200" height="200"/>
   <figcaption>Blueberry Dry Cake<br>700 Rs</figcaption>
   </figure>
</a>
</a>
</a>
</td>



<td>

   <a href="http://localhost/CSS%20programs/mango.php" style="text-decoration: none;">
   <figure><img src="https://www.tarladalal.com/members/9306/big/big_mango_cake-12897.jpg" width="200" height="200"/>
    <figcaption>Mango Dry Cake<br>400 Rs </figcaption>
   </figure>
</a>
</a>
</a>
</td>
</tr>
</table>

</body>
</html>