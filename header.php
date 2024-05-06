<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header.css">
    <style>
        body{
            padding: 0;
            margin: 0;
        }
    </style>
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

    
        <?php if (isset($_SESSION["user"]) OR isset($_SESSION["consultant"]) OR isset($_SESSION["usAdmin"]) OR isset($_SESSION["contentCreator"]) OR isset($_SESSION["ManagerAdmin"])) { ?>
                <div class="my_account">
                    <button>
                        <?php if(isset($_SESSION["consultant"])) { ?>
                            <a href="consultant.php">My Account</a>

                       <?php } elseif(isset($_SESSION["user"])) { ?>
                            <a href="userdash.php">My Account</a>

                        <?php } elseif(isset($_SESSION["usAdmin"])) {?>
                            <a href="userAdmin.php">My Account</a>

                        <?php } elseif(isset($_SESSION["contentCreator"])) { ?>
                            <a href="userAdmin.php">My Account</a>

                        <?php } elseif(isset($_SESSION["ManagerAdmin"])) { ?> 
                            <a href="ManagerAdmin.php">My Account</a>
                        <?php } ?>
                    </button>
                </div>

                <div class="logout-btn">
                    <a href="logout.php">Log out</a>
                </div>

        <?php  } else {?>

                <div class="signup-btn">
                    <a href="signUp.php">Sign Up</a>
                </div>

                <div class="signup-btn">
                    <a href="login.php">Login</a>
                </div>

                <?php } ?>

    </div>

    <div class="navbar">
        <div class="inner-nav">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="About.php">ABOUT</a></li>
                <li><a href="services.php">SERVICES</a></li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="contactus.php">CONTACT</a></li>
            </ul>
        </div>
    </div> 

</body>
</html>