<?php
    session_start();
    if(isset($_SESSION['usAdmin'])) {
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- User Dashboard stylesheet -->
    <link rel="stylesheet" href="consultant.css">
</head>
<style>
    .user_side_bar {
        background-image: url("https://images.squarespace-cdn.com/content/v1/618ed4140aeae666976e4752/c99c377f-cf64-4f80-959a-9ceb4f471dcb/contact-page-background.jpeg");
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
<body>
    <header>
        <?php include("header.php"); ?>
    </header>

    <?php
        require_once "config/database.php"; 
        $sysUser = $_SESSION["usAdmin"];
        $sql = "SELECT * FROM user_admin WHERE User_admin_id = '$sysUser'";
        $result = mysqli_query($con, $sql);
        $userDetails = mysqli_fetch_array($result, MYSQLI_ASSOC);
    ?>

    <div class="main">
        <div class="user_interface_container">
            <!-- Side bar -->
            <div class="user_side_bar">
                <!-- User profile photo -->
                <div class="user_profile_pic">
                    <div class="style_inner_pic">
                        <img src="consultant/Consimg/<?php echo $userDetails['ua_image'] ?>" alt="profile-photo">
                    </div>
                </div>
                <!-- Account details edit button -->
                <div class="Detailsedit-btn">
                    <div class="edit_profile">
                        <a href="editDetails.php">Edit Profile</a>
                    </div>
                </div>

            </div>
            <div class="user_details">
                <div class="details_cont_user">
                    <h3>My Account Details</h3>
                    <p><b>Fist Name : <?php echo $userDetails['ua_Fname']; ?></b></p>
                    <p><b>Last Name : <?php echo $userDetails['ua_Lname']; ?></b></p>
                    <p><b>Email : <?php echo $userDetails['ua_email']; ?></b></p>
                    <p><b>Password : <?php echo $userDetails['ua_password']; ?></b></p>
                    <p><b>Contact Number : <?php echo $userDetails['ua_image']; ?></b></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php } else {
    header("location: index.php");
} ?>
