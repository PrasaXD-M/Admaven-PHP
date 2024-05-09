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
    <link rel="stylesheet" href="css/userAdmin.css">
</head>
<style>
    .user_side_bar {
        background-image: url("https://images.squarespace-cdn.com/content/v1/618ed4140aeae666976e4752/c99c377f-cf64-4f80-959a-9ceb4f471dcb/contact-page-background.jpeg");
        background-size: cover;
        /* background-repeat: no-repeat; */
    }
    
    .create__btn {
        display: inline-block;
        text-decoration: none;
        color: var(--LIGHT-COLOR);
        padding: 6px 13px;
        border-radius: 5px;
        font-family: var(--ABT-FONT);
        font-size: 300;
        background-color: rgb(0, 0, 255);
    }

    .create__btn:hover {
        background-color: rgba(0, 0, 255, 0.7);
    }

    .customer_info_container {
        box-shadow: 10px 5px 13px lightgray;
        border-radius: 10px;
        /* margin-bottom: 1rem; */
        /* background-color: lightgray; */
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
            <div class="user_side_bar" style="height: 55vh;">
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

            <!-- <div class="UserAdmin_body_container"> -->

                <div class="user_details" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">

                    <div class="details_cont_user" style="width: 70%;">
                        <h4>My Account Details</h4>
                        <p><b>Fist Name : <?php echo $userDetails['ua_Fname']; ?></b></p>
                        <p><b>Last Name : <?php echo $userDetails['ua_Lname']; ?></b></p>
                        <p><b>Email : <?php echo $userDetails['ua_email']; ?></b></p>
                        <p><b>Password : <?php echo $userDetails['ua_password']; ?></b></p>
                        <p><b>Contact Number : <?php echo $userDetails['ua_contactNO']; ?></b></p>
                    </div>

                </div>                
            <!-- </div> -->
        </div>

        
    </div>


    <div class="User_Admin_details_container_crud">

    <div class="customer_info_container">

                <div class="customer_info_table">
                    <table border="1">
                        <a href="ManAdminCreate.php" class="create__btn">Add Manager Admin</a>
                        <h2>Manager Admin Table</h2>
                        <!-- <a href="#" class="create_btn">Create Account</a> -->
                        <thead>
                            <tr>
                                <th>Consultant ID</th>
                                <th>Name</th>
                                <th>Emali</th>
                                <th>Contact NO</th>
                                <th>Actions</th>                             
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                require_once "config/database.php"; 
                                $manadminSql = "SELECT * FROM manage_admin";
                                $manadminResult = mysqli_query($con, $manadminSql);

                                while($manAdminrow = mysqli_fetch_array($manadminResult)) { ?>

                                    <tr>
                                        <td><?php echo $manAdminrow["Mnadmin_ID"]; ?></td>
                                        <td><?php echo $manAdminrow["Mnad_Fname"]; ?></td>
                                        <td><?php echo $manAdminrow["Mand_email"]; ?></td>
                                        <td><?php echo $manAdminrow["Mand_contactNO"]; ?></td>

                                        <td>
                                            <a href="editManAdmin.php?Mnadmin_ID=<?php echo $manAdminrow["Mnadmin_ID"]; ?>" class="edit_btn">Edit</a>
                                            <a href="deleteCons.php?Mnadmin_ID=<?php echo $manAdminrow["Mnadmin_ID"]; ?>" class="remove_btn">Remove</a>
                                        </td>
                                    </tr>
                               <?php } 
                                
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="customer_info_container">
                <div class="customer_info_table">
                    <table border="1">
                        <a href="create.php" class="create__btn">Add Consultant</a>
                        <h2>Consultant Details</h2>
                        <!-- <a href="#" class="create_btn">Create Account</a> -->
                        <thead>
                            <tr>
                                <th>Consultant ID</th>
                                <th>Name</th>
                                <th>Emali</th>
                                <th>Contact NO</th>
                                <th>Actions</th>                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                require_once "config/database.php"; 
                                $constSql = "SELECT * FROM consultant";
                                $constResult = mysqli_query($con, $constSql);

                                while($constrow = mysqli_fetch_array($constResult)) { ?>

                                    <tr>
                                        <td><?php echo $constrow["cons_ID"]; ?></td>
                                        <td><?php echo $constrow["C_fname"]; ?></td>
                                        <td><?php echo $constrow["C_email"]; ?></td>
                                        <td><?php echo $constrow["C_contactNO"]; ?></td>

                                        <td>
                                            <a href="editCons.php?cons_ID=<?php echo $constrow["cons_ID"]; ?>" class="edit_btn">Edit</a>
                                            <a href="deleteCons.php?cons_ID=<?php echo $constrow["cons_ID"]; ?>" class="remove_btn">Remove</a>
                                        </td>
                                    </tr>
                               <?php }
                                
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="customer_info_container">
                <div class="customer_info_table">
                    <table border="1">
                        <a href="CAcreate.php" class="create__btn">Add Content Creator</a>
                        <h2>Content Creaotors</h2>
                        <!-- <a href="#" class="create_btn">Create Account</a> -->
                        <thead>
                            <tr>
                                <th>Cont_ID</th>
                                <th>Cont_Name</th>
                                <th>Emali</th>
                                <th>Contact NO</th>
                                <th>Actions</th>                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                require_once "config/database.php"; 
                                $contSql = "SELECT * FROM content_creator";
                                $contResult = mysqli_query($con, $contSql);

                                while($controw = mysqli_fetch_array($contResult)) { ?>

                                    <tr>
                                        <td><?php echo $controw["Cont_ID"]; ?></td>
                                        <td><?php echo $controw["Cont_Fname"]; ?></td>
                                        <td><?php echo $controw["Cont_email"]; ?></td>
                                        <td><?php echo $controw["Cont_contactNO"]; ?></td>

                                        <td>
                                            <a href="CAedit.php?Cont_ID=<?php echo $controw["Cont_ID"]; ?>" class="edit_btn">Edit</a>
                                            <a href="deleteCons.php?Cont_ID=<?php echo $controw["Cont_ID"]; ?>" class="remove_btn">Remove</a>
                                        </td>
                                    </tr>
                               <?php }
                                
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="customer_info_container">
                <div class="customer_info_table">
                    <table border="1">
                        <h2>Customer Details</h2>
                        <!-- <a href="#" class="create_btn">Create Account</a> -->
                        <thead>
                            <tr>
                                <th>Customer ID</th>
                                <th>Customer Name</th>
                                <th>Emali</th>
                                <th>Contact NO</th>
                                <th>Actions</th>                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                require_once "config/database.php"; 
                                $customerSql = "SELECT * FROM user_registration";
                                $customerResult = mysqli_query($con, $customerSql);

                                while($custrow = mysqli_fetch_array($customerResult)) { ?>

                                    <tr>
                                        <td><?php echo $custrow["user_ID"]; ?></td>
                                        <td><?php echo $custrow["name"]; ?></td>
                                        <td><?php echo $custrow["email"]; ?></td>
                                        <td><?php echo $custrow["contact_no"]; ?></td>

                                        <td>
                                            <a href="customerEdit.php?user_ID=<?php echo $custrow["user_ID"]; ?>" class="edit_btn">Edit</a>
                                            <a href="deleteCons.php?user_ID=<?php echo $custrow["user_ID"]; ?>" class="remove_btn">Remove</a>
                                        </td>
                                    </tr>
                               <?php }
                                
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>

    <div class="todo_list_container">
        <?php include('todo.php'); ?>
    </div>
</body>
</html>
<?php } else {
    header("location: index.php");
} ?>
