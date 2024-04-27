<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <style>
        /* || INSERT GOOGLE FONT  */
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=Rubik+Burned&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=Protest+Strike&family=Rubik+Burned&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=Oswald:wght@500&family=Rubik+Burned&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato&display=swap');


        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

                :root {
            /* || FONTS */
            --SPACIAL-FF: 'Dancing Script', cursive;
            --SPACIAL-FF2: 'system-ui';

            --FF-CAPTION: 'Protest Strike', sans-serif;

            --LINK-FF: 'Oswald', sans-serif;

            --ABT-FONT: "Kanit";

            /* || COLORS */
            --INFO-MAIL-COLOR: #000;
            --INFO-BGCOLOR: rgb(237, 232, 232);
            --LIGHT-COLOR: #fff;
                /* Nav color */
            --NAV-BACK-COLOR: #333;
            --NAV-LINE-BACK: hsl(39, 93%, 45%);

            /* header content */
            --ORANGE-COLOR: rgb(228, 151, 6); 
        }

        .header-cont  {
            background-color: var(--INFO-BGCOLOR);
            color: var(--INFO-MAIL-COLOR);
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .cont-hd__logoName {
            padding: 8px;
            background-color: hsl(39, 100%, 45%);
            color: var(--LIGHT-COLOR);
        }

        .letter-big {
            font-size: 50px;
        }

        .logo-name {
            font-weight: bolder;
            font-size: 35px;
            border: 2px solid var(--LIGHT-COLOR);
            padding: 10px 95px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .cont-hd__mail, 
        .cont-hd__call {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* || NAVIGATION BAR */
        .inner-nav ul {
            list-style-type: none;
            display: block;
        }

        .inner-nav li {
            padding: 0 1rem;
            display: inline-block;
        }

        .inner-nav li a{
            display: inline-block;
            text-decoration: none;
            color: var(--LIGHT-COLOR);
            padding: 1rem 0.3rem;
            font-size: larger;
            font-family: var(--LINK-FF);
            position: relative;
        }

        .inner-nav {
            display: flex;
            justify-content: space-around;
            position: sticky;
            top: 0;
        }

        .navbar {
            position: sticky;
            top: 0;
            background-color: var(--NAV-BACK-COLOR);
            z-index: 1;
        }

        .navbar li a::after {
            content: "";
            position: absolute;
            width: 0%;
            height: 3px;
            background-color: orange;
            bottom: 8px;
            left: 0;
            z-index: 1;
        }

        .navbar a:hover::after,
        .navbar a:focus::after {
            transition: 0.4s;
            width: 100%;
        }

        .navbar a:hover {
            color: var(--ORANGE-COLOR);
            transition: 1.3s;
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

        <div class="cont-hd__call">
            <p class="call-num"><b>CALL US:</b></p>
            <p>+94(076) 710 1829</p>
        </div>

    </div>

    <div class="navbar">
        <div class="inner-nav">
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="/ServicePage/final.html">SERVICES</a></li>
                <li><a href="#blog">BLOG</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </div>
    </div>
</body>
</html>