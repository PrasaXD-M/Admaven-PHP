<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up to AdMaven</title>
    <link rel="stylesheet" href="signUp.css">
</head>
<body>
    <div class="signup-container">

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
                <input type="password" name="password" id="password" required>
            </div>
            <!-- <div class="form-bdy">
                <label for="cont-num">Contact No:</label>
                <input type="tel" name="cont-num" id="cont-num">
            </div> -->
            <div class="form-bdy">
                <label for="rePassword">Repeat Password:</label>
                <input type="password" name="rePassword" id="rePassword" required>
            </div>
            <div class="form-bdy">
                <input type="submit" value="Register" name="submit">
            </div>
        </form>

    </div>
</body>
</html>
