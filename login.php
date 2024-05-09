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

                    /************ USER TABLE **************/
                    $sql = "SELECT * FROM user_registration WHERE email = '$email'";
                    $result = mysqli_query($con, $sql);

                    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    // $user_id = $user["user_ID"];

                    /********* CONSULTANT TABLE ************/
                    $cons_sql = "SELECT * FROM consultant WHERE C_email = '$email'";
                    $cons_result = mysqli_query($con, $cons_sql);
                    $consultant = mysqli_fetch_array($cons_result, MYSQLI_ASSOC);

                    /******* USER ADMIN TABLE **********/ 
                    $us_ad_sql = "SELECT * FROM user_admin WHERE ua_email = '$email'";
                    $us_ad_result = mysqli_query($con, $us_ad_sql);
                    $us_admin = mysqli_fetch_array($us_ad_result, MYSQLI_ASSOC);

                    /*************** CONTENT CREATOR *************/
                    $contCreatorSQL = "SELECT * FROM content_creator WHERE Cont_email = '$email'";
                    $contCreator_result = mysqli_query($con, $contCreatorSQL);

                    $contCreator = mysqli_fetch_array($contCreator_result, MYSQLI_ASSOC);

                    /*********** MANAGER ADMIN ***************/ 
                    $Man_admin_sql = "SELECT * FROM manage_admin WHERE Mand_email = '$email'";
                    $manAdmin_result = mysqli_query($con, $Man_admin_sql);

                    $managerAdmin = mysqli_fetch_array($manAdmin_result, MYSQLI_ASSOC);


                    if($user) {
                        if($password == $user["password"]) {
                            // session_start();
                            // $_SESSION["user"] = "yes";
                            $_SESSION["user"] = $user["user_ID"];
                            header("location: index.php");
                            die();
                        } else {
                            echo "<div class = 'error-alert'>Password does not match!</div>";
                        }
                    } elseif($consultant) {
                        if($password == $consultant["C_password"]) {
                            // session_start();
                            $_SESSION["consultant"] = $consultant["cons_ID"];
                            header("location: consultant.php");
                            die();

                        } else {
                            echo "<div class = 'error-alert'>Password does not match!</div>";
                        }
                        // echo "<div class = 'error-alert'>Email does not match!</div>";

                    } elseif($us_admin) {
                        if($password == $us_admin["ua_password"]) {
                            // session_start();
                            $_SESSION["usAdmin"] = $us_admin["User_admin_id"];
                            header("location: userAdmin.php");
                            die();

                        } else {
                            echo "<div class = 'error-alert'>Password does not match!</div>";
                        }
                    } elseif($contCreator) {
                        if($password == $contCreator["Cont_password"]) {
                            // session_start();
                            $_SESSION["contentCreator"] = $contCreator["Cont_ID"];
                            header("location: contentCreator.php");
                            die();

                        } else {
                            echo "<div class = 'error-alert'>Password does not match!</div>";
                        }
                    } elseif($managerAdmin) {
                        if($password == $managerAdmin["Mand_password"]){
                            // session_start();
                            $_SESSION["ManagerAdmin"] = $managerAdmin["Mnadmin_ID"];

                            header("location: ManagerAdmin.php");

                        } else {
                            echo "<div class = 'error-alert'>Password does not match!</div>";
                        }
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
            <a href="terms.php">Terms & Conditions | Privacy</a>
           </div>
        </div>
    </div>
</body>
</html>