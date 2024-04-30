<?php 
    session_start();
    if(!isset($_SESSION["user"])) {
        header("location: login.php");
    } else { 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body>
   <?php include("header.php") ?>
   
    <h1 style="text-align: center;">Hello! welcome to dashboard</h1>

    <!-- <div class="logout-btn"><a href="logout.php">Log Out</a></div> -->
    
   <?php
        require_once "config/database.php";
        $id = $_SESSION["user"];
        $query = mysqli_query($con, "SELECT * FROM user_registration WHERE user_ID = $id");

        while($result = mysqli_fetch_assoc($query)) {
            $res_id = $result['user_ID'];
        }

        echo "<a href='edit.php?user_ID=$res_id'>Change Profile</a>";
    ?>

    <div class="change_details">

    </div>
        <?php } ?>
</body>
</html>