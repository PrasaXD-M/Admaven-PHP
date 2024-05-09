
<?php //session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>consultation  page</title>
        <link rel="stylesheet" href="consultant.css">
        
    </head>
    <body>
        <div class="confirmation-background">

        <div class="parent">
            <div class="left slideshow-parent">
            
                <div class="container-slide">
                    <div class="wrapper-slide">
                        <img class="img-slide" src="image-3.jpg">
                        <img class="img-slide" src="new.jpeg">
                        <img class="img-slide" src="new 4.jpg">
                        <img class="img-slide" src="new 2.jpg">
                        
                    </div>
                </div>
                 
            </div>
            
            <div class="right">

                <div class="right-1">

                    <h1>Consultation Form</h1>

                </div>
                <div class="right-2">

                    <div class="right-2-right">

                        <form action="insert_cons.php" method="POST" autocomplete="off">
                            
                            
                            <div class="left-input">
                            <input type="text" name="fname" class="input" required>
                            <label for="">First Name:</label>
                            <span>First Name:</span><br><br>
                            </div>

                            

                            
                            <div class="left-input">
                            <input type="text" name="lname" class="input" required>
                            <label for="">Last Name:</label>
                            <span>Last Name:</span><br><br>
                            </div>

                            <!-- <div class="left-input">
                            <input type="text" name="apid" class="input" hidden>
                            <label for="">Appointment ID:</label>
                            <span>Appointment ID:</span><br><br>
                            </div> -->
                            
                            <div class="left-input focus">
                            <input type="date" name="apdate" class="input" required>
                            <label for="">Appointment Date:</label>
                            <span>Appointment Date:</span><br><br>
                            </div>
                            
                            <div class="left-input focus">
                            <input type="time" name="aptime" class="input" required>
                            <label for="">Appointment Time:</label>
                            <span>Appointment Time:</span><br><br>
                            </div>
                            
                            <div class="left-input">
                            <input type="email" name="pemail" class="input" required>
                            <label for="">Email</label><br><br>
                            <span>Email</span>
                            </div>
                            
                            <div class="left-input">
                            <input type="tel" name="cnumber" class="input" required>
                            <label for="">Contact Number</label><br><br>
                            <span>Contact Number</span>
                            </div>

                            

                            <div class="left-input">
                            <input type="text" name="cinterest" class="input" required>
                            <label for="">Consultation interest:</label><br><br>
                            <span>Consultation interest:</span>

                            

                            
                        </div>
                        <input type="submit" name="submit" class="submit-btn" >


                    </div>

                    

                        
                    </form>

                        
                    </div>


                </div>
                
            </div>

        </div>

              
        </div>

        <script src="consultant.js"></script>
        
    </body>
</html>
