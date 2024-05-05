
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="UserAdmin/signUp.css">
    <link rel="stylesheet" href="UserAdmin/login.css">
    <link rel="stylesheet" href="UserAdmin/create.css">
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

        <?php
                if(isset($_GET["cons_ID"])) {
                    $consid = $_GET["cons_ID"];
                    require 'config/database.php';
                    $sql = "SELECT * FROM consultant WHERE cons_ID = $consid";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_array($result);
                ?> 

                <form action="consProcess.php" method="post">

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
                        <label for="contnum">Contact No:</label><br>
                        <input type="text" name="contnum" id="contnum" style="width: 100%;">
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
                            <input type="submit" value="Update" name="update">
                        </div>

                        <div class="back">
                                <input type="submit"value="Cancel" 
                                name="cancel">
                        </div>
                    </div>
                </form>
                
           <?php } ?>
                 

            
            
            
            <?php //if(isset($_POST["cancel"])) { header("location: userAdmin.php"); } ?>
            
           <!-- <div class="remember-terms">
            <a href="#">Terms & Conditions | Privacy</a>
           </div> -->
        </div>
    </div>
</body>
</html>