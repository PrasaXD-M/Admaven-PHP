<?php 
            if(isset($_POST["update"])) {
                    $fname = $_POST["rfName"];
                    $lname = $_POST["rlName"];
                    $email = $_POST["uemail"];
                    $password = $_POST["password"];
                    // $passwordRepeat = $_POST["rePassword"];
                    $contactNO = $_POST["contnum"];
                    $hiddencons_idh = $_POST["user_ID"];
        
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                    $errors = array(); 

                    if(empty($fname) OR empty($lname) OR empty($email) OR empty($password) OR empty($contactNO)) {
                        array_push($errors, "All fields are requied!");
                    }

                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        array_push($errors, "Email is not Valid!");
                    }

                    if(strlen($password) < 6) {
                        array_push($errors, "Password should be contain 6 characters!");
                    }

                    // if($password !== $passwordRepeat) {
                    //     array_push($errors, "Password does not match");
                    // }

                    require_once "config/database.php";

                    // $sql = "SELECT * FROM consultant WHERE C_email = '$email'";
                    // $result = mysqli_query($con, $sql);

                    // $rowCount = mysqli_num_rows($result);
                    // if($rowCount > 0) {
                    //     array_push($errors, "Email already exists!");
                    // }
 

                    if(count($errors) > 0) {
                        foreach($errors as $error) {
                            echo "<div class = 'error-alert'>$error</div>";
                        }

                    } else {
                        $update_sql = "UPDATE user_registration SET name = '$fname', L_name = '$lname', email = '$email', password = '$password', contact_no = '$contactNO' WHERE user_ID = '$hiddencons_idh'";

                        if(mysqli_query($con, $update_sql)) {
                            echo "Recode updated";
                            header("location: userAdmin.php");
                        } else {
                            die("Somthing went wrong!");
                        }
        
                        
                    }
                }
            ?>

            <?php 
                if(isset($_POST["cancel"])) {
                    header("location: userAdmin.php");
                } 
            ?>