<?php
    session_start();
    if(isset($_SESSION['contentCreator'])) {
    
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

    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    
</style>
<body>
    <header>
        <?php include("header.php"); ?>
    </header>

    <?php
        require_once "config/database.php"; 
        $sysUser = $_SESSION["contentCreator"];
        $sql = "SELECT * FROM content_creator WHERE Cont_ID = '$sysUser'";
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
                        <img src="consultant/Consimg/<?php echo $userDetails['Cont_image'] ?>" alt="profile-photo">
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
                    <p><b>Fist Name : <?php echo $userDetails['Cont_Fname']; ?></b></p>
                    <p><b>Last Name : <?php echo $userDetails['Cont_Lname']; ?></b></p>
                    <p><b>Email : <?php echo $userDetails['Cont_email']; ?></b></p>
                    <p><b>Password : <?php echo $userDetails['Cont_password']; ?></b></p>
                    <p><b>Contact Number : <?php echo $userDetails['Cont_contactNO']; ?></b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="contentCreator_cont_crud">
        <?php include "Orders/order_table.php"; ?>
    </div>
</body>
</html>
<?php } else {
    header("location: index.php");
} ?>
