
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

        <?php
                // print_r($_POST);
                if(isset($_POST["create"])) {
                    $fname = $_POST["rfName"];
                    $lname = $_POST["rlName"];
                    $email = $_POST["uemail"];
                    $password = $_POST["password"];
                    // $passwordRepeat = $_POST["rePassword"];
                    $contactNO = $_POST["contnum"];
        
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                    $errors = array(); 

                    if(empty($fname) OR empty($lname) OR empty($email) OR empty($password) OR empty($contactNO)) {
                        array_push($errors, "All fields are requied!");
                    }

                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        array_push($errors, "Email is not Valid!");
                    }

                    if(strlen($password) < 6) {
                        array_push($errors, "Password should be contain 6 characters!");
                    }

                    // if($password !== $passwordRepeat) {
                    //     array_push($errors, "Password does not match");
                    // }

                    require_once "config/database.php";

                    $sql = "SELECT * FROM manage_admin WHERE Mand_email = '$email'";
                    $result = mysqli_query($con, $sql);

                    $rowCount = mysqli_num_rows($result);
                    if($rowCount > 0) {
                        array_push($errors, "Email already exists!");
                    }
 

                    if(count($errors) > 0) {
                        foreach($errors as $error) {
                            echo "<div class = 'error-alert'>$error</div>";
                        }

                    } else {
                        mysqli_query($con, "INSERT INTO manage_admin (Mnad_Fname, Mand_Lname,  Mand_email, Mand_password, Mand_contactNO) VALUES ('$fname','$lname', '$email', '$password', '$contactNO')");

                        echo "<div class = 'success-alert'>Welcome to AdMaven You are registered successfully!</div>";
                        header("location: userAdmin.php");
                    }
                }
            ?>

            <?php 
                if(isset($_POST["cancel"])) {
                    header("location: userAdmin.php");
                } 
            ?>

            
            <h2 class="welcom-msg" style="text-align: center;">Add accounts form</h2>
            <!-- <div class = 'success-alert'>Welcome to AdMaven</div> -->
            <form action="ManAdminCreate.php" method="post">

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
                        <input type="submit" value="Create Account" name="create">
                    </div>
                
                    <div class="back">
                            <input type="submit"value="Cancel" 
                            name="cancel">
                    </div>
                </div>
            </form>
            <?php //if(isset($_POST["cancel"])) { header("location: userAdmin.php"); } ?>
            
           <!-- <div class="remember-terms">
            <a href="#">Terms & Conditions | Privacy</a>
           </div> -->
        </div>
    </div>
</body>
</html>