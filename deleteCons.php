<?php 
    if(isset($_GET['cons_ID'])) {
        $consid = $_GET['cons_ID'];
        require 'config/database.php'; 
        $sql = "DELETE FROM consultant WHERE cons_ID = $consid";
        if(mysqli_query($con, $sql)) {
            echo "Deleted!";
            header("location: userAdmin.php");
        }
    }

?>