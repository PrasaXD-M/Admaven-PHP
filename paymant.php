<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Payment Checkout Form</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
	<link rel="stylesheet" href="paymant.css">

</head>
<body>
	
<?php 
  if(isset($_POST["submitpay"])) {
    $cholder = $_POST["cholder"];
    $cnumber = $_POST["cnumber"];
    $amount = $_POST["camount"];

    require_once "config/database.php";



    

    mysqli_query($con, "INSERT INTO payments (c_holder, c_number, Amount) VALUES ('$cholder', '$cnumber', '$amount')");
    header("location: index.php");

  }
   
?>
 
<div class="wrapper">
  <div class="payment">
    <div class="payment-logo">
      <p>p</p>
    </div>
    
    
    <h2>Payment Gateway</h2>
    <div class="form">
      <form action="paymant.php" method="POST">
        <div class="card space icon-relative">
          <label class="label">Card holder:</label>
          <input type="text" class="input" placeholder="Coding Market" name="cholder">
          <i class="fas fa-user"></i>
        </div>

        <div class="card space icon-relative">
          <label class="label">Card number:</label>
          <input type="text" class="input" data-mask="0000 0000 0000 0000" placeholder="Card Number" name="cnumber">
          <i class="far fa-credit-card"></i>
        </div>

        <div class="card space icon-relative">
          <label class="label">Amount:</label>
          <input type="text" class="input" data-mask="0000 0000 0000 0000" placeholder="120$" name="camount">
          <i class="far fa-credit-card"></i>
        </div>

        <div class="card-grp space">
          <div class="card-item icon-relative">
            <label class="label">Expiry date:</label>
            <input type="text" name="expiry-data" class="input" data-mask="00 / 00"  placeholder="00 / 00">
            <i class="far fa-calendar-alt"></i>
          </div>

          <div class="card-item icon-relative">
            <label class="label">CVC:</label>
            <input type="text" class="input" data-mask="000" placeholder="000">
            <i class="fas fa-lock"></i>
          </div>

        </div>  
        <div >
          <input type="submit" value="Pay" name="submitpay" class="btn" style="width: 13em;">
        </div> 
      </form>
    </div>
  </div>
</div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</body>
</html>