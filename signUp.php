
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up to AdMaven</title>
    <link rel="stylesheet" href="signUp.css">
    <style>
        @media screen and (max-width:700px){
            .button-flex {
                flex-direction: column;
            }
        }

        @media screen and (min-width: 750px){
            .signup-container {
                width: 40em;
            }
        }

        body{
            background-image: url("https://th.bing.com/th/id/R.0e9ed103714e886da56317a8adcc7c4e?rik=XA5cl9krLY8U8Q&riu=http%3a%2f%2fcdn.wallpapersafari.com%2f80%2f28%2fLbzN9a.jpg&ehk=b%2fMaBFPVkyKmFbvlBc8z%2fOP9pYWYu6djADuUSKRbr9g%3d&risl=&pid=ImgRaw&r=0");
        }

        /* .signup-container {
            background-image: url("img/generic-background.jpg");
        } */


    </style>
</head>
<body>

    <div class="form-body">
        <div class="signup-container">

            <div class="signup-head">
                <h2>Welcome To AdMaven</h2>
            </div>

            <?php
                if(isset($_POST["submit"])) {
                    $fname = $_POST["rfName"];
                    $lname = $_POST["rlName"];
                    $email = $_POST["uemail"];
                    $password = $_POST["password"];
                    $passwordRepeat = $_POST["rePassword"];
                    $contact = $_POST["cont"];
        
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                    $errors = array(); 

                    if(empty($fname) OR empty($lname) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
                        array_push($errors, "All fields are requied!");
                    }

                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        array_push($errors, "Email is not Valid!");
                    }

                    if(strlen($password) < 6) {
                        array_push($errors, "Password should be contain 6 characters!");
                    }

                    if($password !== $passwordRepeat) {
                        array_push($errors, "Password does not match");
                    }
                    
                    //include "config/database.php";
                    require_once "config/database.php";

                    $sql = "SELECT * FROM user_registration WHERE email = '$email'";
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
                        mysqli_query($con, "INSERT INTO user_registration (name, L_name,  email, password, contact_no) VALUES ('$fname','$lname', '$email', '$password', '$contact')");

                        //echo "<div class = 'success-alert'>Welcome to AdMaven You are registered successfully!</div>";
                        header("location: login.php");
                    }
                }
            ?>

            <?php 
                if(isset($_POST["cancel"])) {
                    header("location: index.php");
                } 
            ?>

            <form action="signUp.php" method="post">
                <div class="form-bdy">
                    <label for="rfName">First Name:</label><br>
                    <input type="text" name="rfName" id="rfName" placeholder="Your fist name.." style="width: 100%;">
                </div>
                <div class="form-bdy">
                    <label for="rlName">Last Name:</label><br>
                    <input type="text" name="rlName" id="rlName" placeholder="Your last name.." style="width: 100%;">
                </div>
                <div class="form-bdy">
                    <label for="uemail">Email:</label><br>
                    <input type="email" name="uemail" id="uemail" placeholder="eg: 123@gmail.com" style="width: 100%;">
                </div>
                <div class="form-bdy">
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" id="password" style="width: 100%;">
                </div>
                
                <div class="form-bdy">
                    <label for="rePassword">Repeat Password:</label><br>
                    <input type="password" name="rePassword" id="rePassword" style="width: 100%;">
                </div>

                <div class="form-bdy">
                    <label for="cont-num">Contact No:</label><br>
                    <input type="tel" name="cont" id="cont-num" style="width: 100%;">
                </div>

                <div class="already-msg">
                    <p>Already have an account? <a href="login.php">Login here</a></p>
                </div>

                <div class="form-bdy button-flex" style="width: 100%;">
                    <div class="reg">
                        <input type="submit"value="Register" 
                        name="submit">
                    </div>
                    <div class="back">
                        <input type="submit" value="Cancel"
                        name="cancel">
                    </div>
                </div>
            </form>
            <div class="remember-terms">
                <p>By continuing, you agree to AdMaven's <a href="terms.php">Tearms of service & privacy policy.</a></p>
            </div>
        </div>
    </div>

</body>
</html>
