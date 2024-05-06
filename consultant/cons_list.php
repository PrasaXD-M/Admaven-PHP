<!DOCTYPE html>
<html>
    
<head>
<link rel="stylesheet" href="con_list.css">

    
<title>book list</title>

</head>
<body>


<h1>Appointment Details</h1>
<div>
<a  href="consultant.php"  class="Ap_add_btn">Add appointment</a>
    
    </div>

    <table class="Ap_add_table">
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>#</th>
            <th>Date</th>
            <th>Time</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>cinterest</th>
            <!-- <th>Cons_Id</th>
            <th>User_ID</th> -->
            




        
        </tr>

        <tbody>
            <?php

            include("config.php");

            $sql="SELECT fname,lname,Appointment_ID,Date,Time,pemail,cnumber,cinterest,Cons_ID,User_ID FROM appointment";

            $result=$con->query($sql);

            while($row=$result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row["fname"]; ?></td>
                            <td><?php echo $row["lname"]; ?></td>
                            <td><?php echo $row["Appointment_ID"]; ?></td>
                            <td><?php echo $row["Date"]; ?></td>
                            <td><?php echo $row["Time"]; ?></td>
                            <td><?php echo $row["pemail"]; ?></td>
                            <td><?php echo $row["cnumber"]; ?></td>
                            <td><?php echo $row["cinterest"]; ?></td>
                           

                            <td>
                                <a href="cons_ap_view.php?id=<?php echo $row["Appointment_ID"]; ?>" class="Ap_view_btn">View</a>
                                <a href="edit_consultant.php?id=<?php echo $row["Appointment_ID"]; ?>" class="Ap_edit_btn">Edit</a>
                                <a href="delete_consultant.php?id=<?php echo $row["Appointment_ID"]; ?>" class="Ap_delete_btn">Delete</a>
                            </td>
                        </tr>
                <?php
            }






            ?>


        </tbody>










</body>
</html>