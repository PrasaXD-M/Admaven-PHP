<?php 
            if(isset($_POST["update"])) {
                    $title = $_POST["title"];
                    $description = $_POST["description"];
                    $simage = $_POST["serviceImage"];
                    $samt = $_POST["seramt"];
                    $hiddencons_idh = $_POST["S_ID"];
        
                    

                        require_once "../config/database.php";
 
                        $update_sql = "UPDATE Services SET S_title = '$title', S_details = '$description', S_image = '$simage', S_amt = '$samt' WHERE S_ID = '$hiddencons_idh'";

                        if(mysqli_query($con, $update_sql)) {
                            echo "Recode updated";
                            header("location: ../ManagerAdmin.php");
                        } else {
                            die("Somthing went wrong!");
                        }
        
                        
                    }
                
            ?>

            <?php 
                if(isset($_POST["cancel"])) {
                    header("location: ../ManagerAdmin.php");
                } 
            ?>