<!DOCTYPE html>
<html>
<head>
    <title>Appointment Details</title>
    <link rel="stylesheet" href="cons_ap_view.css">
</head>

<body>

    <div class="container">
        <h1>Appointment Details</h1>

        <?php
            if(isset($_GET["id"])){

                $apid=$_GET["id"];

                include("../config/database.php");

                $sql="SELECT * FROM appointment WHERE Appointment_ID=$apid";
                $result=$con->query($sql);
                $row=$result->fetch_assoc() 

                ?>
                <div class="appointment-detail">
                <h2>First Name</h2>
                <p><?php echo $row["fname"]; ?></p>
            </div>
                <div class="appointment-detail">   
                <h2>Last Name</h2>
                <p><?php echo $row["lname"]; ?></p>
            </div>
                <div class="appointment-detail"> 
                <h2>Appointment ID</h2>
                <p><?php echo $row["Appointment_ID"]; ?></p>
            </div>
                <div class="appointment-detail"> 
                <h2>Date</h2>
                <p><?php echo $row["Date"]; ?></td></p>
            </div>
                <div class="appointment-detail">
                <h2>Time</h2>
                <p><?php echo $row["Time"]; ?></td></p>
            </div>
                <div class="appointment-detail">
                <h2>Email</h2>
                <p><?php echo $row["pemail"]; ?></td></p>
            </div>
                <div class="appointment-detail">
                <h2>Contact Number</h2>
                <p><?php echo $row["cnumber"]; ?></td></p>
            </div>
                <div class="appointment-detail">
                <h2>Consultation Interest</h2>
                <p><?php echo $row["cinterest"]; ?></td></p>
            </div>
                <!-- <div class="appointment-detail">
                <h2>Consultant ID</h2>
                <p><php echo $row["Cons_ID"]; ></td></p>
            </div>
                <div class="appointment-detail">
                <h2>User ID</h2>
                <p><php echo $row["User_ID"]; ></td></p>
            </div> -->
               

            <?php

            }




        ?>

    </div>









</body>

</html>