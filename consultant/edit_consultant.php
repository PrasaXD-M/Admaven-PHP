<!DOCTYPE html>
<html>
    <head>
        <title>Update consultation  page</title>
        <link rel="stylesheet" href="consultant.css">
        <link rel="stylesheet" href="edit_consultant.css">
        
        

    </head>
    <body>
        <div class="confirmation-background">

        <div class="parent">
            <div class="left slideshow-parent">
            
                <div class="container-slide">
                    <div class="wrapper-slide">
                        <img class="img-slide" src="image-1.jpg">
                        <img class="img-slide" src="image-2.jpg">
                        <img class="img-slide" src="image-3.jpg">
                        <img class="img-slide" src="image-4.jpg">
                    </div>
                </div>
                 
            </div>
            
            <div class="right">

                <div class="right-1">

                    <h1>Edit Consultation Form....</h1>

                </div>
                <div class="right-2">

                    <div class="right-2-right">

                    <?php
                        if(isset($_GET["id"])){

                            $apid=$_GET["id"];
            
                            require_once "../config/database.php";
            
                            $sql="SELECT * FROM appointment WHERE Appointment_ID = '$apid'";
                            $result=$con->query($sql);
                            $row=$result->fetch_assoc() 

                    ?>

                    <?php
                        }

                        ?>
                        <form action="update_cons.php" method="POST" autocomplete="off">
                            
                            
                            <div class="left-input focus">
                            <input type="text" name="fname" class="input" value="<?php echo $row["fname"]; ?>">
                            <label for="">First Name:</label>
                            <span>First Name:</span><br><br>
                            </div>

                            <!-- <input type="hidden" name="id" value="<?php //echo $row['id']; ?>"> -->
                           

                            
                            <div class="left-input focus">
                            <input type="text" name="lname" class="input" value="<?php echo $row["lname"];?>">
                            <label for="">Last Name:</label>
                            <span>Last Name:</span><br><br>
                            </div>

                            <!-- <div class="left-input focus">
                            <input type="text" name="apid" class="input" value="<?php  echo $row["Appointment_ID"];?>">
                            <label for="">Appointment ID:</label>
                            <span>Appointment ID:</span><br><br>
                            </div> -->

                            <input type="hidden" name="apid" value="<?php echo $apid; ?>">
                            
                            <div class="left-input focus">
                            <input type="date" name="apdate" class="input" value="<?php echo $row["Date"];?>">
                            <label for="">Appointment Date:</label>
                            <span>Appointment Date:</span><br><br>
                            </div>
                            
                            <div class="left-input focus">
                            <input type="time" name="aptime" class="input" value="<?php echo $row["Time"];?>">
                            <label for="">Appointment Time:</label>
                            <span>Appointment Time:</span><br><br>
                            </div>
                            
                            <div class="left-input focus">
                            <input type="email" name="pemail" class="input" value="<?php echo $row["pemail"];?>">
                            <label for="">Email</label><br><br>
                            <span>Email</span>
                            </div>
                            
                            <div class="left-input focus">
                            <input type="text" name="cnumber" class="input" value="<?php echo $row["cnumber"];?>">
                            <label for="">Contact Number</label><br><br>
                            <span>Contact Number</span></div>

                            

                            <div class="left-input focus">
                            <input type="text" name="cinterest" class="input" value="<?php echo $row["cinterest"];?>">
                            <label for="">Consultation interest:</label><br><br>
                            <input type="hidden" name="">
                            <span>Consultation interest:</span>
                            
                        </div>

                        <input type="submit"  value="update" name="edit" class="update_btn">
                       


                    </div>

                  
                    </form>



                        
                    </div>

                    <div class="right-2-left">
                    <!-- <form action="delete_consultant.php" method="DELETE" >
                    <div class="left-input focus">
                            <input type="text" name="apid" class="input">
                            <label for="">Appointment ID:</label>
                            <span>Appointment ID:</span><br><br>
                            </div>
                    <input type="submit"  value="Delete" >
</form> -->
</div>


                </div>
                
            </div>

        </div>

              
        </div>

        
        
    </body>
</html>