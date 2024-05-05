
<?php //session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="signUp.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="create.css">
    <style>
        .form-bdy input[type=email], input[type=password] {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="form-body">
        <div class="signup-container">

            
            <h2 class="welcom-msg" style="text-align: center;">Add accounts form</h2>
            <!-- <div class = 'success-alert'>Welcome to AdMaven</div> -->
            <form action="login.php" method="post">

                <div class="form-bdy">
                    <label for="rfName">First Name:</label><br>
                    <input type="text" name="rfName" id="rfName" placeholder="Your fist name.." style="width: 100%;">
                </div>

                <div class="form-bdy">
                    <label for="rlName">Last Name:</label><br>
                    <input type="text" name="rlName" id="rlName" placeholder="Your last name.." style="width: 100%;">
                </div>

                <div class="form-bdy">
                    <label for="uemail">Email:</label>
                    <input type="email" name="uemail" id="uemail" placeholder="Enter your email..">
                </div>

                <div class="form-bdy">
                    <label for="cont-num">Contact No:</label><br>
                    <input type="tel" name="cont-num" id="cont-num" style="width: 100%;">
                </div>

                <div class="form-bdy">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password..">
                </div>

                <!-- <div class="new_acc">
                    <p>Still don't have an account? <a href="signUp.php">Sign Up here</a></p>
                </div> -->

                <div class="form-bdy button-flex">
                    <div class="reg">
                        <input type="submit" value="Create Account" name="create">
                    </div>
                
                    <div class="back">
                            <input type="submit"value="Cancel" 
                            name="cancel">
                    </div>
                </div>
            </form>
            
           <!-- <div class="remember-terms">
            <a href="#">Terms & Conditions | Privacy</a>
           </div> -->
        </div>
    </div>
</body>
</html>