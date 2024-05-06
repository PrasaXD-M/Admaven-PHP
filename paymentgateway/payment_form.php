<?php 
    session_start(); 
    if(isset($_SESSION["payAmt"])) {
        $payamt = $_SESSION["payAmt"];
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>consultation  page</title>
        <link rel="stylesheet" href="payment.css">
        
    </head>
    <body>


        <div class="confirmation-background">

        <div class="parent">
            <div class="left slideshow-parent">
            
                <div class="container-slide">
                    <div class="wrapper-slide">
                        <img class="img-slide" src="payment-1.jpg">
                        <img class="img-slide" src="payment-2.png">
                        <img class="img-slide" src="payment-5.webp">
                        <img class="img-slide" src="payment-4.png">
                        
                    </div>
                </div>
                 
            </div>
            
            <div class="right">

                <div class="right-1">

                    <h1>Payment Gateway</h1>

                </div>
                <div class="right-2">

                    <div class="right-2-right">

                        <form action="payment_insert.php" method="POST" autocomplete="off">
                            
                            
                            <div class="left-input">
                            <input type="text" name="c_holder" class="input" required>
                            <label for="">Card holder:</label>
                            <span>Card holder:</span><br><br>
                            </div>

                            

                            
                            <div class="left-input">
                            <input type="text" name="c_number" class="input" required>
                            <label for="">Card Number:</label>
                            <span>Card Number:</span><br><br>
                            </div>

                           
                            
                            <div class="left-input focus">
                            <input type="text" name="p_mount" class="input" value="<?php echo $payamt; ?>" required>
                            <label for="">Amount:</label>
                            <span>Amount:</span><br><br>
                            </div>
                            
                            <div class="left-input focus">
                            <input type="text" name="datetime" class="input" required>
                            <label for="">MM/YY:</label>
                            <span>Amount:</span><br><br>
                            </div>

                            <div class="left-input focus">
                            <input type="text" name="cvc" class="input" required>
                            <label for="">CVC</label>
                            <span>Amount:</span><br><br>
                            </div>
                            
                            <h2>Thank You!</h2>
                            

                          
                            
                            <input type="submit" name="submit" class="submit-btn" value="pay">
                            
                        </div>
                        


                    </div>

                    

                        
                    </form>

                        
                    </div>


                </div>
                
            </div>

        </div>

              
        </div>

        <script src="payment.js"></script>
        
    </body>
</html>