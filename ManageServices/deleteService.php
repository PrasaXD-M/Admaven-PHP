<?php 
if(isset($_GET['S_ID'])) {
        $serviceid = $_GET['S_ID'];
        require '../config/database.php'; 
        $sql = "DELETE FROM Services WHERE S_ID = $serviceid";
        if(mysqli_query($con, $sql)) {
            echo "Deleted!";
            header("location: ../ManagerAdmin.php");
        }
    } 

?>