<?php 
    session_start(); 
    if(!isset($_SESSION["user"]) OR !isset($_SESSION["usAdmin"]) OR !isset($_SESSION["ManagerAdmin"]) OR !isset($_SESSION["consultant"]) ) {
        // header("location: login.php");
    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/services.css">
    <title>Document</title>
    <style>
        .services__secction {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style> 
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

        <?php 
            require 'config/database.php';

            $ser_info = "SELECT S_ID, S_title, S_details, S_image, S_amt FROM services";
            $result_info = $con->query($ser_info);

            if($result_info->num_rows > 0) {
                while($row_info = $result_info->fetch_assoc())
                { ?>
                    <div class="service_outer_cont">
                    <div class="service_inner_sec">
                
                        <div class="service_content_details">
                            <p>
                                <?php echo $row_info['S_details']; ?>
                            </p>
                            <p class="package_amount" style="margin-top: 0.5em;">
                                Rs.<?php echo $row_info["S_amt"] ?>

                                <?php
                                    $_SESSION["payAmt"] = $row_info["S_amt"];
                                ?>
                            </p>
                        </div>
            
                        <div class="service_image_cont">
            
                            <div class="ser_img"><img src="img/serviceimg/<?php echo $row_info['S_image']; ?>" alt="<?php echo $row_info['S_title']; ?>">
            
                            <div class="pack_btn">
                                <button>
                                    <a href="Orders/Orders_form.php">Order Now</a>
                                </button>
                            </div>
                        </div>
                        </div>
                    
                    
                        <!-- </div> -->
                    </div>    

            <?php }
            }
        ?>
        

    </div>

    <div class="footer_cont_include">
        <?php include "footer.php"; ?>
    </div>
</body>
</html>

