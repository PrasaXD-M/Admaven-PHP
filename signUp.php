
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up to AdMaven</title>
    <link rel="stylesheet" href="signUp.css">
</head>
<body>

    <div class="form-body">
        <div class="signup-container">

            <div class="signup-head">
                <h2>Welcome To AdMaven</h2>
            </div>

            <?php
                // print_r($_POST);
                if(isset($_POST["submit"])) {
                    $fname = $_POST["rfName"];
                    $email = $_POST["uemail"];
                    $password = $_POST["password"];
                    $passwordRepeat = $_POST["rePassword"];
        
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                    $errors = array();

                    if(empty($fname) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
                        array_push($errors, "All fields are requied!");
                    }

                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        array_push($errors, "Email is not Valid!");
                    }

                    if(strlen($password) < 4) {
                        array_push($errors, "Password should be contain 6 characters!");
                    }

                    if($password !== $passwordRepeat) {
                        array_push($errors, "Password does not match");
                    }

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
                        mysqli_query($con, "INSERT INTO user_registration (name, email, password) VALUES ('$fname', '$email', '$password')");

                        echo "<div class = 'success-alert'>Welcome to AdMaven You are registered successfully!</div>";
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
                    <label for="rfName">First Name:</label>
                    <input type="text" name="rfName" id="rfName" placeholder="Your fist name..">
                </div>
                <!-- <div class="form-bdy">
                    <label for="rlName">Last Name:</label>
                    <input type="text" name="rlName" id="rlName" placeholder="Your last name..">
                </div> -->
                <div class="form-bdy">
                    <label for="uemail">Email:</label>
                    <input type="email" name="uemail" id="uemail" placeholder="eg: 123@gmail.com">
                </div>
                <div class="form-bdy">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password">
                </div>
                <!-- <div class="form-bdy">
                    <label for="cont-num">Contact No:</label>
                    <input type="tel" name="cont-num" id="cont-num">
                </div> -->
                <div class="form-bdy">
                    <label for="rePassword">Repeat Password:</label>
                    <input type="password" name="rePassword" id="rePassword">
                </div>

                <div class="already-msg">
                    <p>Already have an account? <a href="login.php">Login here</a></p>
                </div>

                <div class="form-bdy button-flex">
                    <div class="reg">
                        <input type="submit"value="Register" 
                        name="submit">
                    </div>
                    <div class="back">
                        <input type="submit"value="Cancel" 
                        name="cancel">
                    </div>
                </div>
            </form>
            <div class="remember-terms">
                <p>By continuing, you agree to AdMaven's <a href="#">Tearms of service & privacy policy.</a></p>
            </div>
        </div>
    </div>

</body>
</html>
