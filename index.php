<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
  }
  if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
  }
?>
<!DOCTYPE html>
<?php include('partials/menu.php')
?>           

       <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
          <style>
  .text-center {
    text-align: center;
  }
</style>

</br><br><h3 class="text-center italic-text"> DIAM💎NDS </h3><hr>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
    width: 100%;
    height: 600px; /* Full screen height */
    position: relative;
    overflow: hidden;
    margin: 0 auto;
  
}

.slide-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;

}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.5s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 1000px) {
  .text { font-size: 11px; }
}
</style>
</head>
<body>


<p></p>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="banner1.jpg" style="width:100%; height:100%; object-fit:contain;">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="banner2.jpg" style="width:100%; height:100%; object-fit:contain;">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="banner3.jpg" style="width:100%; height:100%; object-fit:contain;">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="banner4.jpg" style="width:100%; height:100%; object-fit:contain;">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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
  setTimeout(showSlides, 3000); 
}
</script>

</body>
</html> 

<div>
       
</div>
                         
</body>
</html>

<div>
       
</div>
                         
</body>
</html>



<?php

  include('partials/footer.php');

?>