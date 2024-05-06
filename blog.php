<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="Blog1/blog.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Three Column Layout</title>
<style>


</style>
</head>
<body>
  <div class="header_nav_container">
    <?php include("header.php"); ?>
  </div>
  <center>
    <video width="1100" height="900" autoplay>
      <source src="Blog1/top-digital-agency-showreel-video-emote-digital.mp4" type="video/mp4">
      
    Your browser does not support the video tag.
    </video> 
   
  </video> 
  </center>
<div class="container">
  <div class="column">
    <div class="imageplace1"></div>
    <h2>IGNITING CREATIVITY</h2>
    
    <p>The Power of Personalization in Digital Campaigns - Explore how data-driven personalization can enhance campaign effectiveness and customer engagement.</p>
    <p> Leveraging AI in Advertising: Opportunities and Challenges - Delve into the use of artificial intelligence in ad targeting, content creation, and campaign analysis..</p>
  </div>
  <div class="column">
    <div class="imageplace2"></div>
    <h2> BRANDING BRILLIANCE</h2>
    <p>Maximizing ROI with Multi-Channel Marketing Strategies - Provide insights on how to integrate various online channels (social media, email, PPC) for a cohesive and profitable marketing strategy. </p>
    <p>The Ethics of Online Advertising: Privacy, Transparency, and Consumer Trust - Discuss the importance of ethical practices in digital advertising and how maintaining consumer trust can lead to long-term business success. </p>
  </div>
  <div class="column">
    <div class="imageplace3"></div>
    <h2> POWER OF MODERN ADVERTISING</h2>
    <p>  </p>
    <p>Creative Case Studies: Innovative Online Advertising Campaigns That Worked - Showcase successful case studies from your agency or industry, highlighting unique strategies and results.
      How to Optimize Your Google Ads for Maximum Impact - Offer practical tips and advanced techniques for getting the most out of Google Ads campaigns. </p>
  </div>
</div>
<br>

  <h2> </h2>
<p> </p>
<center>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="Blog1/pexels-photo-905163.webp" width="800" height="600" >
  <div class="text">  </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="Blog1/pexels-photo-3184435.jpeg" width="800" height="600" >
  <div class="text">  </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="Blog1/istockphoto-1492180527-612x612.jpg"width="800" height="600" >
  <div class="text">   </div>
</div>

</div>
</center>
<br>

<div style="text-align:center">
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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>