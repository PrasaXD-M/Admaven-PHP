<div class="header-cont">
        <div class="cont-hd__mail">
            <p><b>EMAIL US:</b></p>
            <p>admavensco@gmail.com</p>
        </div>

        <div class="cont-hd__logoName"> 
            <p class="logo-name">A<span class="letter-big">D</span>MAVEN</p>
        </div>

        <?php 
            
            if (!isset($_SESSION["user"])) {
                
        ?>

        <div class="signup-btn">
            <a href="signUp.php">Sign Up</a>
        </div>

        <div class="login-btn">
            <a href="login.php" style="display: inline-block; padding: 10px 12px; color: white; text-decoration: none; background-color: #4169E1;">Login</a>
        </div>

        <?php } else {?>

        <div class="logout-btn">
            <a href="logout.php">Log out</a>
        </div>
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