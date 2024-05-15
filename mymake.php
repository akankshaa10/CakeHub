<!DOCTYPE html>
<html>
<head>
  <title>Mymake Studio...</title>
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
   <FORM ACTION="https://www.mymakestudio.com/week-long-camps">
  <h1 style="font-size:50px">My Make Studio Summer Cake Camp</h1>
  <p>At MY MAKE STUDIO, we specialize in bringing the art of cupcake and cake decorating to all ages and skill levels. Our KITS have been designed to help you decorate incredible masterpieces whether it’s animal cupcakes, birthday cakes, or holiday inspired creations.<br>
  We are the perfect place to come in for the afternoon, host a fabulous team building event, or celebrate a special occasion. We are also proud to be shipping our KITS nationwide so you can have a piece of My Make Studio right at home.<br><br>
We like to keep things simple:<br>

1. Make a reservation at MY MAKE STUDIO. Include the TOTAL number of people in your group (even if they aren’t decorating so we can have an appropriate table set up).<br>
2. Show up for your reservation! Wear a mask. Wash your hands when you arrive. We will seat you at a pre assigned table that has been thoroughly cleaned and spaced appropriately.<br>
3. Fill out our “kit menu” with the KIT(S) and flavors of cupcakes you want. We have vanilla, chocolate, red velvet, party, GF vanilla, GF chocolate. Yes you can mix and match cupcake flavors. Yes you can share kits. Each kit makes 12 cupcakes with 6 unique designs OR 1 6” cake.<br>
4. Your KIT will have everything you need to DECORATE right at your table! We will give you written directions to follow or you can watch our YouTube tutorials from your phone. You have 90 minutes to decorate. Should you need any other materials, staff can assist you in retrieving them.<br>
5. Once completed we have a box for you to take your edible creations home and we do all of the cleaning! Yes, you heard that right!</p>

   <button type="submit">   
   VIEW DETAILS ABOUT ONLINE CAMP</a></button><BR><BR>
   <a href="duffcake.php" class="previous round">&#8249;</a>
<a href="#" class="next round">&#8250;</a>
 
</div>

</body>
</html>