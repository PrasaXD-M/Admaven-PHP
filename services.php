<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/services.css">
    <title>Document</title>
</head>
<body>
    <div class="Service_header">
        <?php include ("header.php"); ?>
    </div>

    <div class="service-header-container">
        <div class="image-slider-cont">

            <div class="slideshow-container">

                <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="img/homeimg/image4.jpg" style="width:100%">
                <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="img/homeimg/image3.jpg" style="width:100%">
                <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="img/homeimg/image2.jpg" style="width:100%">
                <div class="text">Caption Three</div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                </div>
                <br>

                <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                </div>

                <script>
                    let slideIndex = 1;
                    showSlides(slideIndex);

                    function plusSlides(n) {
                    showSlides(slideIndex += n);
                    }

                    function currentSlide(n) {
                    showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                        let i;
                        let slides = document.getElementsByClassName("mySlides");
                        let dots = document.getElementsByClassName("dot");
                        if (n > slides.length) {slideIndex = 1}    
                        if (n < 1) {slideIndex = slides.length}
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";  
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex-1].style.display = "block";  
                        dots[slideIndex-1].className += " active";
                }
                </script>
        </div>

        <div class="service_nav_bar">
            <div class="navbar_inner">
                <ul>
                    <?php 
                        require 'config/database.php';

                        $ser_title = "SELECT S_ID, S_title FROM services";

                        $result_title = $con->query($ser_title);

                        if($result_title->num_rows > 0) {
                            while($row = $result_title->fetch_assoc())
                            {   ?>
                                <li><a href="#<?php echo $row['S_ID']; ?>"><?php echo $row['S_title']; ?></a></li>
                           <?php }
                        }
                    ?>
                    <!-- <li><a href="#">Service Name</a></li> -->
                </ul>
            </div>
        </div>
    </div>

    <div class="service_header_topic">
        <h1>OUR SERVICES</h1>
    </div>

    <div class="services__secction">

        <div class="service_inner_sec">
                
            <div class="service_content_details">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt maiores fugit, voluptatibus repellat minima repudiandae, eum quibusdam veniam atque consequatur fuga. Quidem necessitatibus accusamus ducimus sequi corporis dolores omnis voluptate.</p>
                    
            </div>

            <div class="service_image_cont">

                <div class="ser_img"><img src="img/serviceimg/image4.jpg<?php //echo $row['S_image'] ?>" alt="<?php //echo $row['S_title']; ?>">
                
                <div class="pack_btn">
                    <button>
                        <a href="packages.php">View Pckages</a>
                    </button>
                </div>
            </div>
                
                
            </div>
        </div>

    </div>
</body>
</html>