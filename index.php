<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdMaven</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="/css/style-grid.css"> -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="/signin/login/signup.css">
    <script src="/Js/main.js"></script>
</head>
<body>
    <?php include("header.php") ?>

    <div class="main-container">

        <div class="moto-cont item1">
            
            <div class="moto-img">

                <div class="image">
                    <img src="img/homeimg/image4.jpg" name="slider" id="slider">
                </div>

                <div class="content">
                    <h1>ADVERTISING AGENCY</h1>
                    <h2>ADMAVEN</h2>

                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores cum sint quisquam, ut fugit ea dolore suscipit sed at corporis praesentium rem impedit earum nesciunt consequuntur velit officiis! Ducimus, recusandae.</p>

                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore aut voluptatibus molestiae, totam id fugit eos natus, sint nulla repellendus tempora consequuntur neque voluptatum asperiores? Debitis quos magni dolor assumenda.
                    </p>
                </div>
            </div>
        </div>

    <div class="about-cont item2">

           <div class="inner-about">
                <h1 id="headabt">ABOUT US</h1>
                <h1 id="abtsecondhd">WELCOME TO ADMAVEN</h1>
           </div>

           
            <div class="abtimage">
                <!-- <img src="/img/image5.jpg"> -->
            </div>

        <div class="about_container">

            <section>
                <div class="abt-heading-cont">
                    <h2><span>ADMAVEN ADVERTISING AGENCY</span></h2>
                    <p><span>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni in quis cumque earum vitae. Nostrum corrupti asperiores ad vitae ut? Molestiae nesciunt eius non dolores nisi pariatur voluptatem facilis ab!
                    </span></p>
                </div>
            </section>

            <div class="about__content__para">
                <div class="para1">
                    <div class="orangebox"><div class="orangebox__inner"></div></div>
                    <section class="scroll-txt">
                        <h2><span>WORK EXPERIENCE</span></h2>
                        <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos consectetur sequi labore fuga, asperiores optio ad inventore facere.</span></p>
                    </section>
                </div>

                <div class="para2">
                    <div class="orangebox"><div class="orangebox__inner"></div></div>
                    <section class="scroll-txt">
                        <h2><span>AWARD WINNING</span></h2>
                        <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur dicta est pariatur.</span></p>
                    </section>
                </div>
            </div>

        </div>
    </div>

    <div class="offer-cont item3">
        <div class="offer-header">
            <h1>WHAT WE OFFER</h1>
        </div>
    </div>

    <div class="service_card_container">
        <?php include "cardContent/card_cont.php"; ?>
    </div>

    <!-- <div class="brand-cont item4">
            <div class="cont-video">
            </div>

            <div class="brand-name"> 
                <div class="inner-about brand-abt">
                    <h1 id="headabt">OUR CLIENTS</h1>
                    <h1 id="abtsecondhd">BRANDS WE WORK WITH</h1>
               </div>
            
    </div> -->

    <div class="testimonial item5">
        <?php include "/xampp/htdocs/IWTproject/Admaven-PHP/testimonial1/testimonial.php"; ?> 

    </div>

    <!-- <div class="footer item6">
        <footer>
            <div class="container">
                <div class="row">
                <div class="col" id="company">
                    <img src="/footer/logo.jpg" alt=""   class="logo">
                    <p>ape haanduruwane ape haanduruwaneee ape haanduruwane ape haanduruwaneee ape haanduruwane ape haanduruwaneee</p>
                
                <div class="social">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
    
    
                
    
                <div class="col" id="useful-links">
                    
                    <div class="links">
                    <ul>
                    <li><a href="#"><h2>Home</h2></a></li>
                    <li><a href="#"><h2>About us</h2></a></li>
                    <li><a href="#"><h2>Services</h2></a></li>
                    <li><a href="#"><h2>Blog</h2></a></li>
                    <li><a href="#"><h2>Contact</h2></a></li>
                    </ul>
                </div>
                </div>
                <div class="col" id="contact">
                    <h3>Contact us</h3>
                    <div class="contact-details">
                        <i class="fa fa-location"></i>
                        <p>FF-42,Procube Avenue,<br>NY,USA</p>
                    </div>
                    <div class="contact-details">
                        <i class="fa fa-phone"></i>
                        <p><a href="tel:+1-876543210">+1-876543210</a></p>
                    </div>
                    <div class="contact-details">
                        <i class="fa fa-envelope"></i>
                        <p><a href="mailto:maindemattiya@gmail.com">maindemattiya@gmail.com</a></p>
                    </div>
                </div>
            </div>
            
            
        </div>
         -->
        <!-- </footer>
        <div class="bottom-bar">
            <p>&copy;2023 your company.All rights reserved</p>
        </div> -->
    </div>
    <div class="footer_cont_include" style="margin-top: 8em;">
        <?php include "footer.php"; ?>
    </div>
</body>
</html>