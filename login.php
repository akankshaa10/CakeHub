<!DOCTYPE html>
<html>
<head>
	<title>Login...</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  table {
    border-collapse: separate;
    border-spacing: 40px 30px;
  }

  /* Style all input fields */
input {
  width: 30%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;

}

/* Style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  width: 10%;
}

input[type=reset] {
  background-color: #04AA6D;
  color: white;
  width: 10%;
}

input[type=checkbox] {
  background-color: #04AA6D;
  color: white;
  width: 1%;
}

/* Style the container for inputs */
.container {
 
  padding: 10px;

}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
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

</style>
</head>
<body>
<h1>Cake Hub - Online Cake Ordering Website</h1>
<h6>Free Delivery, Great Discounts, Variety Of Products...</h6>

  <fieldset><legend align="center"><h1 style="color:orange;">Customer Login</h1></legend><br><br>

    <!--<img src="contactimg.jpg" usemap="#contim" height="300" width="300" align="right">
<map name="contim">
<area shape="rect" coords="1,2,297,448">-->


  
    <div class="container">
    
  	<form name="f1" action="authentication.php" method="POST">

      <audio autoplay loop>
      <source src="http://localhost/CSS%20programs/login%20voice.aac"/>
      <source src="http://localhost/CSS%20programs/login%20voice.ogg"/>
    </audio>

      <label for="User Type"><b>User Type:</b></label><br>
      <input type="text" name="utype" align="center" placeholder="Enter User Type" required=""> <br><br>
  		
  		<label for="Username"><b>Username:</b></label><br>
  		<input type="text" name="fname" align="center" placeholder="Enter User Name" required=""> <br><br>

  		<label for="Password"><b>Password:</b></label> <br>
  		<input type="password" id="passw" name="passw" align="center" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required=""><br><br>


      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label><br><br>

      <p>By creating an account you agree to our <a href="http://localhost/CSS%20programs/tandc.php" style="color:dodgerblue">Terms & Privacy</a>.</p><br><br>

  		
      &nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="sub" value="Login">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="reset" name="res" value="Cancel"><br><br>
</form>
</div>

<div id="message">
  <h3 style="color: black;">Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
        
<script>
var myInput = document.getElementById("passw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>




<!--<script type="text/javascript">
  function validation()
  {
    var ut=document.f1.utype.value;
    var id=document.f1.fname.value;
    var ps=document.f1.passw.value;
    if(id.length=="" && ps.length=="" && ut.length=="")
    {
      alert("User Type, User Name and Password fields are empty");
      return false;
    }
    else
    {
      if(ut.length=="")
      {
        alert("User Type is empty");
        return false;
      }

      if(id.length=="")
      {
        alert("Username is empty");
        return false;
      }

      if(ps.length=="")
      {
        alert("Password is empty");
        return false;
      }
    }
  }
</script>-->
<div class="container">
<a href="http://localhost/CSS%20programs/regpg.php" style="color: orange;"><big>Not Having Account ! Register Yourself</big></a>
</div><br>

<hr><legend style="color: yellow"><center>OR</center></legend>
   
<table>
  <tr>
    <td>
<a href="https://accounts.google.com/AccountChooser/signinchooser?flowName=GlifWebSignIn&flowEntry=AccountChooser" style="text-decoration: none;">
    <figure>
   <img src="https://img-authors.flaticon.com/google.jpg" width="100" height="100"/>
   
 </figure>
</a>
</a>
</a>
</td>

<td>
<a href="https://www.facebook.com/login/web/" style="text-decoration: none;">
    <figure>
   <img src="https://icon-library.com/images/facebook-login-icon-download/facebook-login-icon-download-14.jpg" width="100" height="100"/>
   
 </figure>
</a>
</a>
</a>
</td>

<td>
<a href="https://www.linkedin.com/login" style="text-decoration: none;">
    <figure>
   <img src="https://media-exp1.licdn.com/dms/image/C4D0BAQGyOWvr4W0Pow/company-logo_200_200/0/1590003577120?e=2159024400&v=beta&t=CtsDFVp0TAdwyg73A8F82MohzKpAQy-pUGA13atPG6A" width="100" height="100"/>
   
 </figure>
</a>
</a>
</a>
</td>
</tr>
</table>
  
</fieldset>
</body>
</html>