<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <div class="header-cont">
        <div class="cont-hd__mail">
            <p><b>EMAIL US:</b></p>
            <p>admavensco@gmail.com</p>
        </div>

        <div class="cont-hd__logoName"> 
            <p class="logo-name">A<span class="letter-big">D</span>MAVEN</p>
        </div> 

    
        <?php if (!isset($_SESSION["user"])) { ?>

            <!-- <div class="header__option_cont"> -->

                <div class="signup-btn">
                    <a href="signUp.php">Sign Up</a>
                </div>

                <div class="signup-btn">
                    <a href="login.php">Login</a>
                </div>

                <?php  } else {?>

                <div class="my_account">
                    <button><a href="userdash.php">My Account</a></button>
                </div>

                <div class="logout-btn">
                    <a href="logout.php">Log out</a>
                </div>

            <!-- </div> -->
        <?php } ?>

    </div>

    <div class="navbar">
        <div class="inner-nav">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="/ServicePage/final.html">SERVICES</a></li>
                <li><a href="#blog">BLOG</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </div>
    </div> 

</body>
</html>