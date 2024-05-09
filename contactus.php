<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="Contact us page/contactus.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>
<link rel="stylesheet" href="consultant/consultant.css">
<script src="consultant/consultant.js"></script>
<style>

  
</style>
</head>
<?php include 'header.php'; ?>
<?php 
  // session_start();
  if(isset($_SESSION["user"]) OR isset($_SESSION["consultant"])) {
    include 'consultant/consultant.php';

  } else {
?>

<body style="background-color:rgb(194, 116, 161);">
<div class="header_nav_cont">
  <?php //include("header.php"); ?>
</div>
<div class="first">
  <div class="phonecall-info">
    <!-- <div class="help_cont"></div> -->
    <h2>Need any help?</h2>
    <ul>
      <li><h3>Contact</h3></li>
      <li>📞 +1 456 789  234</li>
      <li><h3>Address</h3></li>
      <li><h3>Emai</h3> </li>
      <li>✉️ my.admarvan@gmail.com</li>
      <br>
    <!-- </div> -->
  <!-- Facebook -->
<a style="color: #3b5998;" href="#!" role="button"><i class="fab fa-facebook-f fa-lg"></i></a>

<!-- Twitter -->
<a style="color: #55acee;" href="#!" role="button"
><i class="fab fa-twitter fa-lg"></i
></a>

<!-- Google -->
<a style="color: #dd4b39;" href="#!" role="button"
><i class="fab fa-google fa-lg"></i
></a>

<!-- Instagram -->
<a style="color: #ac2bac;" href="#!" role="button"
><i class="fab fa-instagram fa-lg"></i
></a>
     
    
    <!-- Add your social media links here -->
  </div> 
    
  <div class="phonecall-form">
    <h1 style="color: #fff;">Contact Us</h1>
    <p style="color: #fff;">Contact Our Support Team that will help you with Quick and Professional Solutions for your Problems. Required fields are marked *</p>
    <form action="submit_form.php" method="post">
      <label for="subject">Subject*</label>
      <input type="text" id="subject" name="subject" required>
      
      <label for="name">Name*</label>
      <input type="text" id="name" name="name" required>
      
      <label for="email">Email*</label>
      <input type="email" id="email" name="email" required>
      
      <label for="message">Message*</label>
      <br>
      <br>
      <textarea id="message" name="message" required></textarea>
      <br>
      <br>
      <button type="submit">Send message</button>
      <br>
      <br>
      <br>
      <button type="reset">Reset</button>
    </form>
  </div>
</div>


</body>
</html>

<?php  } ?>