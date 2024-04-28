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

                    if($user) {
                        if($password == $user["password"]) {
                            session_start();
                            $_SESSION["user"] = "yes";
                            header("location: userdash.php");
                            die();
                        } else {
                            echo "<div class = 'error-alert'>Password does not match!</div>";
                        }
                    } else {
                        echo "<div class = 'error-alert'>Email does not match!</div>";
                    }
                }
            ?>

            <h2 style="text-align: center;">Login form</h2>
            <form action="login.php" method="post">
                <div class="form-bdy">
                    <label for="uemail">Email:</label>
                    <input type="email" name="uemail" id="uemail" placeholder="Enter your email..">
                </div>

                <div class="form-bdy">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password..">
                </div>

                <div class="form-bdy">
                    <input type="submit" value="Login" name="submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>