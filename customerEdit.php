
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="UserAdmin/signUp.css">
    <link rel="stylesheet" href="UserAdmin/login.css">
    <link rel="stylesheet" href="UserAdmin/create.css">
    <style>
        .form-bdy input[type=email], input[type=password] {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="form-body">
        <div class="signup-container">
        <h2 class="welcom-msg" style="text-align: center;">Add accounts form</h2>

        <?php
                if(isset($_GET["user_ID"])) {
                    $cusid = $_GET["user_ID"];
                    require 'config/database.php';
                    $sql = "SELECT * FROM user_registration WHERE user_ID = $cusid";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_array($result);
                ?> 

                <form action="customerProcess.php" method="post">

                    <div class="form-bdy">
                        <label for="rfName">First Name:</label><br>
                        <input type="text" name="rfName" id="rfName" value="<?php echo $row['name']; ?>" style="width: 100%;">
                    </div>

                    <div class="form-bdy">
                        <label for="rlName">Last Name:</label><br>
                        <input type="text" name="rlName" id="rlName" value="<?php echo $row['L_name']; ?>" style="width: 100%;">
                    </div>

                    <div class="form-bdy">
                        <label for="uemail">Email:</label>
                        <input type="email" name="uemail" id="uemail" value="<?php echo $row['email']; ?>">
                    </div>

                    <div class="form-bdy">
                        <label for="contnum">Contact No:</label><br>
                        <input type="text" name="contnum" id="contnum" value="<?php echo $row['contact_no']; ?>" style="width: 100%;">
                    </div>

                    <div class="form-bdy">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" value="<?php echo $row['password']; ?>" >
                    </div>

                    <div>
                        <input type="hidden" name="user_ID" value="<?php echo $row['user_ID']; ?>">
                    </div>

                    <div class="form-bdy button-flex">
                        <div class="reg">
                            <input type="submit" value="Update" name="update">
                        </div>

                        <div class="back">
                                <input type="submit"value="Cancel" 
                                name="cancel">
                        </div>
                    </div>
                </form>
                
           <?php } ?>
                 

            
            
            
            <?php //if(isset($_POST["cancel"])) { header("location: userAdmin.php"); } ?>
            
           <!-- <div class="remember-terms">
            <a href="#">Terms & Conditions | Privacy</a>
           </div> -->
        </div>
    </div>
</body>
</html>