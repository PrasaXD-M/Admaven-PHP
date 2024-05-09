<?php
    session_start();
   if(isset($_SESSION['ManagerAdmin'])) {
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Manager Admin Dashboard stylesheet -->
    <link rel="stylesheet" href="css/managerAdmin.css">
    <link rel="stylesheet" href="css/managerAdmintest.css">
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
        $sysUser = $_SESSION["ManagerAdmin"];
        $sql = "SELECT * FROM manage_admin WHERE Mnadmin_ID = '$sysUser'";
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
                        <img src="consultant/Consimg/<?php echo $userDetails['Mand_image'] ?>" alt="profile-photo">
                    </div>
                </div>
                <!-- Account details edit button -->
                <div class="Detailsedit-btn">
                    <div class="edit_profile">
                        <a href="editDetails.php">Edit Profile</a>
                    </div>
                </div>

            </div>
            <div class="cont_contC" style="display: flex; justify-content: center; align-items: center;">
            <div class="user_details"">
                <div class="details_cont_user">
                    <h3>My Account Details</h3>
                    <p><b>Fist Name : <?php echo $userDetails['Mnad_Fname']; ?></b></p>
                    <p><b>Last Name : <?php echo $userDetails['Mand_Lname']; ?></b></p>
                    <p><b>Email : <?php echo $userDetails['Mand_email']; ?></b></p>
                    <p><b>Password : <?php echo $userDetails['Mand_password']; ?></b></p>
                    <p><b>Contact Number : <?php echo $userDetails['Mand_contactNO']; ?></b></p>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="manager_admin_crud_container">
        <div class="User_Admin_details_container_crud">

            <div class="customer_info_container">

                <div class="customer_info_table" style="width: 1000px;">
                    <table border="1">
                        <a href="ManageServices/createService.php" class="create__btn">Add New Service</a>
                        <h2>Manage Services</h2>
                        <thead>
                            <tr>
                                <th>Service ID</th>
                                <th>Service Title</th>
                                <th>Image</th>
                                <th>Actions</th>                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                require_once "config/database.php"; 
                                $servicesSql = "SELECT * FROM Services";
                                $serviceResult = mysqli_query($con, $servicesSql);

                                while($servicerow = mysqli_fetch_array($serviceResult)) { ?>

                                    <tr>
                                        <td><?php echo $servicerow["S_ID"]; ?></td>
                                        <td><?php echo $servicerow["S_title"]; ?></td>
                                        <td><?php echo $servicerow["S_image"]; ?></td>

                                        <td>
                                            <a href="ManageServices/editServices.php?S_ID=<?php echo $servicerow["S_ID"]; ?>" class="edit_btn">Edit</a>
                                            <a href="ManageServices/deleteService.php?S_ID=<?php echo $servicerow["S_ID"]; ?>" class="remove_btn">Delete</a>
                                        </td>
                                    </tr>
                            <?php }
                                
                            ?>
                        </tbody>  
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="manager_admin_crud_container">
        <div class="User_Admin_details_container_crud">

            <div class="customer_info_container">

                <div class="customer_info_table" style="width: 1000px;">
                    <table border="1">
                       
                        <h2>Payment Details</h2>
                        <thead>
                            <tr>
                                <th>Payment ID</th>
                                <th>Card Holder</th>
                                <th>Amount</th>
                                <!-- <th>Actions</th>-->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                require_once "config/database.php"; 
                                $payde = "SELECT * FROM payment";
                                $paydeResult = mysqli_query($con, $payde);

                                while($payrow = mysqli_fetch_array($paydeResult)) { ?>

                                    <tr>
                                        <td><?php echo $payrow["payment_id"]; ?></td>
                                        <td><?php echo $payrow["card_holder"]; ?></td>
                                        <td><?php echo $payrow["amount"]; ?></td>
                                    </tr>
                            <?php }
                                
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <?php //include('footer.php'); ?>
    </div>
</body>
</html>
<?php  } else {
    header("location: index.php");
} ?>
