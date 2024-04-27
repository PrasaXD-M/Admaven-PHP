<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up to AdMaven</title>
    <style>
        .signup-container input[type=text],
        input[type=password],
        input[type=email],
        input[type=tel] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: rgb(227, 227, 222);
        }

        .signup-container input[type=text]:focus,
        input[type=password]:focus,
        input[type=email]:focus{
            background-color: rgb(243, 243, 227);
        }

        .signup-container {

        }
        /* SIGN UP BUTTON */
        .signup-container input[type=submit] {
            background-color: hsl(158, 94%, 36%);
            color: #ffffff;
            padding: 14px 20px;
            margin: 8px 0;
            width: 100%;
            cursor: pointer;
            text-align: center;
            opacity: 0.8;
            border: 0;
        }

        .signup-container input[type=submit]:hover {
            opacity: 1;
        }
    </style>
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
