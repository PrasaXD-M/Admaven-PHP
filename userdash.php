<?php 
    session_start();
    if(!isset($_SESSION["user"])) {
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body>
   
    <h1 style="text-align: center;">Hello! welcome to dashboard</h1>

    <div class="logout-btn"><a href="logout.php">Log Out</a></div>
</body>
</html>