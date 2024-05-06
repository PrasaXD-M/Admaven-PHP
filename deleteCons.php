<?php 
    if(isset($_GET['cons_ID'])) {
        $consid = $_GET['cons_ID'];
        require 'config/database.php'; 
        $sql = "DELETE FROM consultant WHERE cons_ID = $consid";
        if(mysqli_query($con, $sql)) {
            echo "Deleted!";
            header("location: userAdmin.php");
        }
    } elseif(isset($_GET['Cont_ID'])) {
        $consid = $_GET['Cont_ID'];
        require 'config/database.php'; 
        $sql = "DELETE FROM content_creator WHERE Cont_ID = $consid";
        if(mysqli_query($con, $sql)) {
            echo "Deleted!";
            header("location: userAdmin.php");
        }

    } elseif(isset($_GET['user_ID'])) {
        $userid = $_GET['user_ID'];
        require 'config/database.php'; 
        $sql = "DELETE FROM user_registration WHERE user_ID = $userid";
        if(mysqli_query($con, $sql)) {
            echo "Deleted!";
            header("location: userAdmin.php");
        }

    } elseif(isset($_GET['Mnadmin_ID'])) {
        $manAdminid = $_GET['Mnadmin_ID'];
        require 'config/database.php'; 
        $sql = "DELETE FROM manage_admin WHERE Mnadmin_ID = $manAdminid";
        if(mysqli_query($con, $sql)) {
            echo "Deleted!";
            header("location: userAdmin.php");
        }
    }

?>