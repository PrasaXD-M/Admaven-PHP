<?php 
    session_start(); 
    if(!isset($_SESSION['user'])) {
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- User Dashboard stylesheet -->
    <link rel="stylesheet" href="css/userdash.css">
    <link rel="stylesheet" href="css/userAdmin.css">
    <style>
    .Detailsedit-btn {
        padding: 1em;
        margin-bottom: 1rem !important;
    }
    </style>
</head>
<style>
    .user_side_bar {
        /* background-image: url("https://images.squarespace-cdn.com/content/v1/618ed4140aeae666976e4752/c99c377f-cf64-4f80-959a-9ceb4f471dcb/contact-page-background.jpeg"); */
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
        $sysUser = $_SESSION["user"];
        $sql = "SELECT * FROM user_registration WHERE user_ID = '$sysUser'";
        $result = mysqli_query($con, $sql);
        $userDetails = mysqli_fetch_array($result, MYSQLI_ASSOC);
    ?>

    <div class="main">
        <div class="user_interface_container" style="flex-direction: column;">
            <!-- Side bar -->
            <div class="user_side_bar">
                <!-- User profile photo -->
                <div class="user_profile_pic">
                    <div class="style_inner_pic">
                        <img src="img/userimg/<?php echo $userDetails['profile_photo'] ?>" alt="profile-photo">
                    </div>
                </div>
                <!-- Account details edit button -->
                <div class="Detailsedit-btn">
                    <div class="edit_profile">
                        <a href="editDetails.php">Edit Profile</a>
                        <a href="deleteUserAcc.php">Delete My Profile</a>
                    </div>
                </div>

            </div>
            <div class="user_details">
                <div class="details_cont_user">
                    <h3>My Account Details</h3>
                    <p><b>Fist Name : <?php echo $userDetails['name']; ?></b></p>
                    <p><b>Last Name : <?php echo $userDetails['L_name']; ?></b></p>
                    <p><b>Email : <?php echo $userDetails['email']; ?></b></p>
                    <p><b>Password : <?php echo $userDetails['password']; ?></b></p>
                    <p><b>Contact Number : <?php echo $userDetails['contact_no']; ?></b></p>
                </div>

            </div>
        </div>
    </div>

        <div class="customer_table_details_reading" style="width: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center">
            <div class="customer_info_container" style="background-color: rgb(196, 207, 242);">
                <div class="customer_info_table">
                    <table border="1">
                        <h2>Appointment Details</h2>
                        <thead>
                            <tr>
                                <th>App ID</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Title</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                require_once "config/database.php"; 
                                // $user_email = $_SESSION[""];
                                $user_email = $userDetails['email'];


                                $constSql = "SELECT * FROM appointment WHERE pemail = '$user_email'";
                                $constResult = mysqli_query($con, $constSql);

                                while($constrow = mysqli_fetch_array($constResult)) { ?>

                                    <tr>
                                        <td><?php echo $constrow["Appointment_ID"]; ?></td>
                                        <td><?php echo $constrow["Date"]; ?></td>
                                        <td><?php echo $constrow["Time"]; ?></td>
                                        <td><?php echo $constrow["cinterest"]; ?></td>

                                        <td>
                                            <a href="consultant/consultant.php" class="remove_btn">Remove</a>
                                        </td>
                                        
                                    </tr>
                               <?php }
                                
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="customer_table_details_reading" style="width: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center">
            <div class="customer_info_container" style="background-color: rgb(143, 225, 208); width: 70%;">
                <div class="customer_info_table">
                    <table border="1">
                        <h2>Order Details</h2>
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Order Details</th>
                                <th>amount</th>
                                <!-- <th>Actions</th>                                -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                require_once "config/database.php"; 
                                // $user_email = $_SESSION[""];
                                $user_email = $userDetails['email'];


                                $constSql = "SELECT * FROM orders WHERE email = '$user_email'";
                                $constResult = mysqli_query($con, $constSql);

                                while($constrow = mysqli_fetch_array($constResult)) { ?>

                                    <tr>
                                        <td><?php echo $constrow["order_id"]; ?></td>
                                        <td><?php echo $constrow["order_detials"]; ?></td>
                                        <td><?php echo $constrow["amount"]; ?></td>

                                        
                                        
                                    </tr>
                               <?php }
                                
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>