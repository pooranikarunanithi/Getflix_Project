<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Getflix</title>
<link rel="icon" href="./images/movie-theater.png" type="image/png" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="slideshow.css">
</head>
<body>

	<div class="navbar" id="nav">
    <li class="nav-item"> <a href="slideshow.php" class="nav-link kRed text-light navLink"> <img src="./images/logo-small.jpg" alt="" width="80" height="60"> </a></li>
	  <a href="signup.php" class="active">SignUp</a>
	  <a href="login.php">Login</a>
	  <div class="dropdown">
		<button class="btn">Settings
		  <i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-menu">
		  <a href="privacystatements.php">Privacy Statements</a>
		  <a href="PlansAndPricing.php">Plans and Pricing</a>
		  <a href="billing.php">Billing</a>
		</div>
       
	  </div> 
      <a href="login.php">Logout</a>
	  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
	</div>

	<h2>GETFLIX</h2>
<p>Watch Unlimited Movies and Web-series</p>

<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img class="img-fluid" src="./images/encanto.jpg" style="width:1000px; height:500px">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img class="img-container fluid" src="./images/bossbaby.jpeg" style="width:1000px; height:500px">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img class="img-container fluid" src="./images/sooryavanshi1.jpg" style="width:1000px; height:500px">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img class="img-container fluid" src="./images/spider-man.jpg" style="width:1000px; height:500px">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img class="img-container fluid" src="./images/money-haist1.jpg" style="width:1000px; height:500px">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img class="img-container fluid"  src="./images/the-family-man-season-2-.jpg" style="width:1000px; height:500px">
  <div class="text"></div>
</div>
</div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>
<script>
var slideIndex = 0;
showSlides();
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}




		function myFunction() {
		  var x = document.getElementById("nav");
		  if (x.className === "navbar") {
			x.className += " responsive";
		  } else {
			x.className = "navbar";
		  }
		}
        </script>
        <footer>
        © 2021 Copyright:  Mitsu Suchak| Rajab Barambona | Poorani Karunanithi
</footer>


</body>
</html>
