<?php 
    session_start();
    if (isset($_SESSION["user"])) {
        header("location: userdash.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="signUp.css">
    <link rel="stylesheet" href="css/login.css">
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
                if(isset($_POST["submit"])) {
                    $email = $_POST["uemail"];
                    $password = $_POST["password"];

                    require_once "config/database.php";
                    $sql = "SELECT * FROM user_registration WHERE email = '$email'";
                    $result = mysqli_query($con, $sql);

                    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    // $user_id = $user["user_ID"];

                    // ********* CONSULTANT TABLE ************
                    $cons_sql = "SELECT * FROM consultant WHERE C_email = '$email'";
                    $cons_result = mysqli_query($con, $cons_sql);
                    $consultant = mysqli_fetch_array($cons_result, MYSQLI_ASSOC);


                    if($user) {
                        if($password == $user["password"]) {
                            session_start();
                            // $_SESSION["user"] = "yes";
                            $_SESSION["user"] = $user["user_ID"];
                            header("location: index.php");
                            die();
                        } else {
                            echo "<div class = 'error-alert'>Password does not match!</div>";
                        }
                    } elseif($consultant) {
                        if($password == $consultant["C_password"]) {
                            session_start();
                            $_SESSION["consultant"] = $consultant["cons_ID"];
                            header("location: consultant.php");
                            die();

                        } else {
                            echo "<div class = 'error-alert'>Password does not match!</div>";
                        }
                        // echo "<div class = 'error-alert'>Email does not match!</div>";
                    } else {
                        echo "<div class = 'error-alert'>Email does not match!</div>";
                    }
                }
            ?>

            
            <?php 
                if(isset($_POST["cancel"])) {
                    header("location: index.php");
                }
            ?>
            <h2 class="welcom-msg" style="text-align: center;">Login form</h2>
            <div class = 'success-alert'>Welcome to AdMaven</div>
            <form action="login.php" method="post">
                <div class="form-bdy">
                    <label for="uemail">Email:</label>
                    <input type="email" name="uemail" id="uemail" placeholder="Enter your email..">
                </div>

                <div class="form-bdy">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password..">
                </div>

                <div class="new_acc">
                    <p>Still don't have an account? <a href="signUp.php">Sign Up here</a></p>
                </div>

                <div class="form-bdy button-flex">
                    <div class="reg">
                        <input type="submit" value="Login" name="submit">
                    </div>
                
                    <div class="back">
                            <input type="submit"value="Cancel" 
                            name="cancel">
                    </div>
                </div>
            </form>
           <div class="remember-terms">
            <a href="#">Terms & Conditions | Privacy</a>
           </div>
        </div>
    </div>
</body>
</html>