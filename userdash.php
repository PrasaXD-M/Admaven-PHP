<?php 
    session_start();
    // if(!isset($_SESSION["user"])) {
    //     header("location: login.php");
    // } else { 
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
        $sysUser = $_SESSION["user"];
        $sql = "SELECT * FROM user_registration WHERE email = '$sysUser'";
        $result = mysqli_query($con, $sql);
        $userDetails = mysqli_fetch_array($result, MYSQLI_ASSOC);
        echo "<div class = 'userDetails_container'>";
        echo "User ID is: " . $userDetails["user_ID"] . "<br>";
        echo "Name is: " . $userDetails["name"] . "<br>";
        echo "Email is: " . $userDetails["email"] . "<br>";
        echo "<div>";
    ?>

    <div class="change_details">

    </div>
        <?php // } ?>
</body>
</html>