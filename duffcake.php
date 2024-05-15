<!DOCTYPE html>
<html>
<head>
  <title>Duffcake...</title>
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
   <FORM ACTION="https://duffscakemix.com/summer-cake-camp/">
  <h1 style="font-size:50px">Duff's Cakemix Summer Cake Camp</h1>
  <p>Learn how to decorate like the pros! From piping to airbrushing, build a solid cake decorating foundation with our one-of-a-kind, week-long summer program. By the end of the week, you’ll take home your own two-tier masterpiece for the entire family to enjoy.<br><br>
  LEARN HOW TO:<br><br>
1) Customize Your Own Apron<br><br>
2) Roll, Sculpt, And Cover Cakes With Fondant<br><br>
3) Prepare, Apply, Pipe, And Smooth Buttercream<br><br>
4) Airbrush A Cake With Edible Spray</p>

   <button type="submit">   
   VIEW DETAILS ABOUT ONLINE CAMP</a></button><BR><BR>
   <a href="jeanette.php" class="previous round">&#8249;</a>
<a href="mymake.php" class="next round">&#8250;</a>
 
</div>

</body>
</html>