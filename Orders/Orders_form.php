<?php session_start();
    if(isset($_SESSION["user"])) {
        $user_ID = $_SESSION["user"];

        require_once '../config/database.php';
        $sql = "SELECT * FROM user_registration WHERE user_ID = '$user_ID'";
        $result = mysqli_query($con, $sql);

        $userDetails = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $userFName = $userDetails['name'];
        $userLName = $userDetails['L_name'];
        $uemail = $userDetails['email'];
        $ucontact = $userDetails['contact_no'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>consultation  page</title>
        <link rel="stylesheet" href="Orders_form.css">
        <link rel="stylesheet" href="../css/header.css">
    </head>
    
    <body> 
    <?php include "../header.php"; ?>
    <div class="myorders">
    <h1>MY ORDER</h1> 
    </div>


                        <form action="insert_orders.php" method="POST" autocomplete="off">
                            
                        <?php 
                            if(isset($_SESSION['payAmt'])) {
                                $amt = $_SESSION['payAmt'];
                            }
                        ?>
                            
                            
                            

                            

                            
                           
                            
                            
                            


                            <label for="">Customer Name:</label>
                            <input type="text" name="cusname" class="inputj" value="<?php echo $userFName; ?>">
                            
                            <br><br>

                            <label for="">Email:</label>
                            <input type="email" name="cusmail" class="inputj" value="<?php echo $uemail; ?>">
                            
                            <br><br>

                            <label for="">Contact Number:</label>
                            <input type="text" name="cusnumber" class="inputj" value="<?php echo $ucontact; ?>">
                            
                            <br><br>

                            <!-- <label for="">Package Name:</label>
                            <input type="text" name="cuspackname" class="inputj"> -->
                            
                            <!-- <br><br> -->

                            <label for="">Any Details?</label>
                            <input type="text" name="odertails" class="inputj">
                            
                            <br><br>

                            <label for="">Amount:</label>
                            <input type="text" name="cusamount" class="inputj" value="<?php echo $amt; ?>">
                            
                            <br><br>

                            <label for="">Time Duration:</label>
                            <input type="text" name="custimedu" class="inputj">
                            
                            <br><br>


                            
                           
                            
                        
                            <input type="submit" name="submit" value="submit">
                            <?php 
                            if(isset($_POST['submit'])) {
                                header("location: ../paymentgateway/payment_form.php");
                            }
                            ?>
                  

                    
                        
                    </form>

                        
                    
        
    </body>
</html>