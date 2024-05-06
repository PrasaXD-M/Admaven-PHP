
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
                    $title = $_POST["title"];
                    $description = $_POST["description"];
                    $serviceImg = $_POST["serviceImage"];
                    $ser_amt = $_POST["seramt"];
                   
                    

                    $errors = array(); 

                    if(empty($title) OR empty($description) OR empty($serviceImg) OR empty($ser_amt)) {
                        array_push($errors, "All fields are requied!");
                    }

                    require_once "../config/database.php";
 

                    if(count($errors) > 0) {
                        foreach($errors as $error) {
                            echo "<div class = 'error-alert'>$error</div>";
                        }

                    } else {
                        mysqli_query($con, "INSERT INTO services (S_title, S_details,  S_image, S_amt) VALUES ('$title','$description', '$serviceImg', '$ser_amt')");

                        echo "<div class = 'success-alert'>Welcome to AdMaven You are registered successfully!</div>";
                        header("location: ../ManagerAdmin.php");
                    }
                }
            ?>

            <?php 
                if(isset($_POST["cancel"])) {
                    header("location: ../ManagerAdmin.php");
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

                <div class="form-bdy">
                    <label for="serviceamt">Amount:</label><br>
                    <input type="text" name="seramt" id="serviceamt" style="width: 100%;">
                </div>

                <div class="form-bdy">
                    <label for="serviceImage">Image:</label><br>
                    <input type="file" name="serviceImage" id="serviceImage" style="width: 100%;">
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