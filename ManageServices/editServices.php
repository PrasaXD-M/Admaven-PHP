
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../signUp.css">
    <link rel="stylesheet" href="../css/login.css">
    <!-- <link rel="stylesheet" href="create.css"> -->
    <style>
        /* .form-bdy input[type=email], input[type=password] {
            width: 100%;
        } */
    </style>
</head>
<body>
    <div class="form-body">
        <div class="signup-container">
        <h2 class="welcom-msg" style="text-align: center;">Edit Service</h2>

        <?php
                if(isset($_GET["S_ID"])) {
                    $contid = $_GET["S_ID"];
                    require '../config/database.php';
                    $sql = "SELECT * FROM Services WHERE S_ID = $contid";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_array($result);
                ?> 
 
                <form action="ServiceProcess.php" method="post">

                <div class="form-bdy">
                    <label for="rfName">Service Title:</label><br>
                    <input type="text" name="title" id="rfName" value="<?php echo $row['S_title']; ?>" style="width: 100%;">
                </div>

                <div class="form-bdy">
                    <label for="rfName">Service Title:</label><br>
                    <textarea name="description" id="rfName" value="<?php echo $row['S_details']; ?>" style="width: 100%;" class="textarea"></textarea>
                </div>

                <div class="form-bdy">
                    <label for="serviceamt">Amount:</label><br>
                    <input type="text" name="seramt" id="serviceamt" value="<?php echo $row['S_amt']; ?>" style="width: 100%;">
                </div>

                <div class="form-bdy">
                    <label for="serviceImage">Image:</label><br>
                    <input type="file" name="serviceImage" id="serviceImage" value="<?php echo $row['S_image']; ?>" style="width: 100%;">
                </div>

                    <div>
                        <input type="hidden" name="S_ID" value="<?php echo $row['S_ID']; ?>">
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