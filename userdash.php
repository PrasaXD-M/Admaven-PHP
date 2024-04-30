<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- User Dashboard stylesheet -->
    <link rel="stylesheet" href="css/userdash.css">
</head>
<body>
    <header>
        <?php include("header.php"); ?>
    </header>

    <?php
        require_once "config/database.php";
        $sysUser = $_SESSION["user"];
        $sql = "SELECT * FROM user_registration WHERE email = '$sysUser'";
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
                        <img src="<?php echo $userDetails['profile_photo'] ?>" alt="profile-photo">
                    </div>
                </div>
                <!-- Account details edit button -->
                <div class="Detailsedit-btn">
                    <div class="edit_profile">
                        <a href="#">Edit Profile</a>
                    </div>
                </div>

            </div>
            <div class="user_details">
                <div class="details_cont_user">
                    <h3>My Account Details</h3>
                    <p><b>Fist Name : <?php echo $userDetails['name']; ?></b></p>
                    <p><b>Last Name : <?php echo $userDetails['name']; ?></b></p>
                    <p><b>Email : <?php echo $userDetails['email']; ?></b></p>
                    <p><b>Password : <?php echo $userDetails['password']; ?></b></p>
                    <p><b>Contact Number : <?php echo $userDetails['contact_no']; ?></b></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>