
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../signUp.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../UserAdmin/create.css">
    <style>
        .form-bdy input[type=email], input[type=password] {
            width: 100%;
        }

        .textarea {
            width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: rgb(203, 199, 199);
    border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="form-body">
        <div class="signup-container">

        <?php
                // print_r($_POST);
                if(isset($_POST["create"])) {
                    $fname = $_POST["rfName"];
                    $lname = $_POST["rlName"];
                    $email = $_POST["uemail"];
                    $password = $_POST["password"];
                    // $passwordRepeat = $_POST["rePassword"];
                    $contactNO = $_POST["contnum"];
        
                    

                    $errors = array(); 

                    if(empty($fname) OR empty($lname) OR empty($email) OR empty($password) OR empty($contactNO)) {
                        array_push($errors, "All fields are requied!");
                    }

                    require_once "config/database.php";

                    $sql = "SELECT * FROM content_creator WHERE Cont_email = '$email'";
                    $result = mysqli_query($con, $sql);

                    $rowCount = mysqli_num_rows($result);
                    if($rowCount > 0) {
                        array_push($errors, "Email already exists!");
                    }
 

                    if(count($errors) > 0) {
                        foreach($errors as $error) {
                            echo "<div class = 'error-alert'>$error</div>";
                        }

                    } else {
                        mysqli_query($con, "INSERT INTO content_creator (Cont_Fname, Cont_Lname,  Cont_email, Cont_password, Cont_contactNO) VALUES ('$fname','$lname', '$email', '$password', '$contactNO')");

                        echo "<div class = 'success-alert'>Welcome to AdMaven You are registered successfully!</div>";
                        header("location: userAdmin.php");
                    }
                }
            ?>

            <?php 
                if(isset($_POST["cancel"])) {
                    header("location: userAdmin.php");
                } 
            ?>

            
            <h2 class="welcom-msg" style="text-align: center;">Add accounts form</h2>

            <form action="createService.php" method="post">

                <div class="form-bdy">
                    <label for="rfName">Service Title:</label><br>
                    <input type="text" name="title" id="rfName" placeholder="Enter title..." style="width: 100%;">
                </div>

                <div class="form-bdy">
                    <label for="rfName">Service Title:</label><br>
                    <textarea name="description" id="rfName" placeholder="Enter description..." style="width: 100%;" class="textarea"></textarea>
                </div>

                

                <div class="form-bdy button-flex">
                    <div class="reg">
                        <input type="submit" value="Create Account" name="create">
                    </div>
                
                    <div class="back">
                            <input type="submit"value="Cancel" 
                            name="cancel">
                    </div>
                </div>
            </form>
           
        </div>
    </div>
</body>
</html>