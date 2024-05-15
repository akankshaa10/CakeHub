<!DOCTYPE html>
<html>
<head>
  <title>Jeanette's...</title>
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
   <FORM ACTION="https://jeanettescakes.com/camps/">
  <h1 style="font-size:50px">Jeanette's Baking Summer Camp</h1>
  <p>Jeanette Bugler, love for the culinary and especially the confectionary arts started at a very young age. After high school Jeanette completed courses and diplomas in catering and food service management at the Johannesburg Hotel School and Vaal Triangle University of Technology. She went on to work in hotels and restaurants in South Africa, Germany and Switzerland.<br>

Jeanette is passionate about sharing this wonderful creative medium with young and old and creating memories. As she would say: “You are never too young or too old to begin your journey in this wonderful form of art.”<br><br>
WE SET THE BAR FOR CULINARY CAMPS - <br>
1) Hosted over 120 camps since 2008<br>
2) Fully-equipped studio, specially designed for culinary workshops<br>
3) 12  Camps (full day and half day) to choose from<br>
4) We teach valuable lifeskill & provide a space where everyone feels included and has fun!<br><br>

WHAT EACH PARTICIPANT RECEIVES - <br>
1) Top quality ingredients<br>
2) The use of Kitchen aid mixers, induction cooktops and professional tools and equipment<br>
3) Each person will make their own baked goods, confections or meal<br>
4) Course notes – where applicable<br><br>

Since the provincial government has authorised summer day camps, Jeanettes’s Cakes will be offering baking, cooking and cake decorating camps this summer and are taking bookings now</p>

   <button type="submit">   
   VIEW DETAILS ABOUT ONLINE CAMP</a></button><BR><BR>
   <a href="baketivity.php" class="previous round">&#8249;</a>
<a href="duffcake.php" class="next round">&#8250;</a>
 
</div>

</body>
</html>