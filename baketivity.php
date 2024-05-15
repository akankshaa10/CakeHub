<!DOCTYPE html>
<html>
<head>
  <title>Baketivity...</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("https://cdn0.weddingwire.com/articles/images/5/1/1/5/img_5115/cake-topper.jpg");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(5px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.6); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
button {
  background-color:  DodgerBlue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: DodgerBlue;
}

a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #4CAF50;
  color: white;
}

.round {
  border-radius: 50%;
}
</style>
</head>
<body>
 
<div class="bg-image"></div>

<div class="bg-text">
   <FORM ACTION="https://baketivity.com/virtual-baking-summer-camp/">
  <h1 style="font-size:50px">Baketivity Baking Summer Camp</h1>
  <p>1) As a Bake-a-Camp camper you’ll receive a big box with 4 kits- one for every week of the month. Each kit will feature a specific country and culture, while exploring pastries that they’re famous for. You’ll pick up advanced baking skills while diving headfirst into fascinating cultures.<br><br>
  2) With pre-measured and color coded ingredients and step-by-step instructions, you’ll be set up for success. Your box will contain practically everything you need for a smashing, interesting summer at home.<br><br>
3) Aside from convenience of the package recipe, ingredients and instruction, you’ll have personal guidance from our top-of-the-line baker, Madison. With valuable, entertaining Zoom classes, you’ll experience the baking summer camp to the max. You’ll get to make new friends from all over the country, and bake, learn and play together.<br><br></p>

   <button type="submit">   
   VIEW DETAILS ABOUT ONLINE CAMP</a></button><BR><BR>
   <a href="camp.php" class="previous round">&#8249;</a>
<a href="jeanette.php" class="next round">&#8250;</a>
 
</div>

</body>
</html>