<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="testPage.php" method="post">
        <?php 
            $payment = $_SESSION["payAmt"];

        ?>
        Name:<input type="text" name="payment_type" id="payment_type"><br><br>
        Amount:<input type="text" name="payamount" id="payamount" value="<?php echo $payment; ?>"><br>
        <input type="submit" value="Pay"><br><br>
    </form>
</body>
</html>