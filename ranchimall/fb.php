<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        <!---->
        
/* {box-sizing:border-box}*/
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}
        #map {
        height: 400px;
        width: 100%;
       }

/* Slideshow container */
.slideshow-container {
  max-width: 1500px;
  position: relative;
  margin: 0;
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
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
        /**/
.bimg {
    filter: alpha(opacity=50);
}

.bimg:hover {
    filter: alpha(opacity=100); 
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
</style>
    <link rel="stylesheet" type="text/css" href="vmart.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/w3css/3/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="vmart.js"></script>
</head>
<body>
    
    
     
<div class="bgimg-1">
  <div class="caption">
    <span class="border"># WORLD'S FIRST BLOCKCHAIN RESORT EVENT#</span>
  </div>
</div>
<div style="color: #777;background-color:aqua;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">FESTIVAL OF DIVERSITY OF ART</h3>
  <p><b>This is an Immense pleasure to inform You that we invite to the first dance event organised by Academy of indian dances (Bharathanatyam and Indian folks dances)</b></p>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border">HUNT FOR DANCE COMES WITH ITS HUNGER</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:black;background-color:aqua;text-align:center;padding:50px 80px;text-align: justify;">
      <center><h2><i>About Indian Folks And Bharathanatyam</i></h2></center>
      <p>Bharatanatyam, a pre-eminent Indian classical dance form presumably the oldest classical dance heritage of India is regarded as mother of many other Indian classical dance forms. Conventionally a solo dance performed only by women, it initiated in the Hindu temples of Tamil Nadu and eventually flourished in South India. Theoretical base of this form traces back to �Natya Shastra�, the ancient Sanskrit Hindu text on the performing arts. A form of illustrative anecdote of Hindu religious themes and spiritual ideas emoted by dancer with excellent footwork and impressive gestures its performance repertoire includes nrita, nritya and natya. Accompanists include a singer, music and particularly the guru who directs and conducts the performance. It also continues to inspire several art forms including paintings and sculptures starting from the spectacular 6th to 9th century CE temple sculptures</p>
  </div>
</div>

<div class="bgimg-3">
  <div class="caption">
    <span class="border">Your Details for event are:</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:black;background-color:aqua;text-align:center;padding:10px 10px;text-align: justify;">
<!--div class="slideshow-container"-->
      <center><h2>About Indian Folks And Bharathanatyam</h2></center>
<p>Computer programmers often enjoy career benefits beyond paychecks, including a chance to impact their world, flexibility in their day-to-day lives and variety in the kinds of industries where they can work.
</p>
      <table width="100%" cellspacing=40px cellpadding=10px>
          <tr>
              <th style="text-align:center">
                  DATE AND VENUE 
              </th>
              <th style="text-align:center">
                  NAME 
              </th>
            <th style="text-align:center">
                  Use This QR Code To Collect Your Dinner In Event:
              </th>
          </tr>
          <tr><td>
              <?php
                  print_r($_SESSION["slot"]);
              ?></td>
              <td>
                  <?php
                  print_r($_SESSION["name"]);
                  ?>
              </td>
              <td>
                  <a  href="http://www.pageqrcode.com" target="_blank"><img src="http://image.pageqrcode.com/qr?color=000000&size=4" alt="QR Code"/></a>
              </td>
          </tr>
          
      </table>
<!--div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="slides1.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="slides2.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div-->
    </div>
</div>

<!--div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
</div-->

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
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>
<!--/div-->
  <!--/div-->

<div class="bgimg-1">
  <div class="caption">
    <span class="border"><b>Let your life lightly dance on the edges of Time<br><br> like dew on the tip of a leaf!</b></span>
  </div>
</div>

    
    <!-- Footer -->
    
    
    <footer class="w3-container w3-padding-64 w3-center  w3-pale-blue w3-xlarge">
        <p>Contact Details</p>
        <i class="fa fa-map-marker" aria-hidden="true"></i><br>
       <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3944.87010971721!2d115.2358329147836!3d-8.608467393813239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x2dd23eff86905433%3A0x71c50dab0d8d027c!2sAlam+Puri+Art+Museum+Villa%2C+Jl.+Trenggana%2C+Penatih%2C+East+Denpasar%2C+Denpasar+City%2C+Bali+80238%2C+Indonesia!3m2!1d-8.608478!2d115.23802339999999!5e0!3m2!1sen!2sin!4v1521994682270" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
         <p class="w3-center">Created by: Akash Awasthi</p>
        <pre><p>Contact information: <i class="fa fa-phone" aria-hidden="true"></i> 0878-5016-8204 
                        <i class="fa fa-envelope" aria-hidden="true"></i>abhishek@ranchimall.net</p></pre>
  
  <a href="#"><i class="fa fa-facebook-official w3-center"></i></a>
  <a href="#"><i class="fa fa-pinterest-p w3-center"></i></a>
  <a href="#"><i class="fa fa-twitter w3-center"></i></a>
  <a href="#"><i class="fa fa-flickr w3-center"></i></a>
  <a href="#"><i class="fa fa-linkedin w3-center"></i></a>
  <!--p class="w3-medium">
  Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a>
  </p-->
</footer>
<div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;'><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_medium=website_{$app['name']}&amp;utm_content=footer_img"><img src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"  alt="www.000webhost.com"></a></div></body>
</html>