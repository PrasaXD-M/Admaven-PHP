<?php 
    session_start();

    if(isset($_SESSION["user"])) {
        $userID = $_SESSION["user"];
        require_once "config/database.php";
        $result = "SELECT * FROM user_registration WHERE user_ID = '$userID'";
        $row = mysqli_query($con, $result);

        $details = mysqli_fetch_array($row, MYSQLI_ASSOC);

        $uemail = $details["email"];
   
        $sql = "DELETE FROM user_registration WHERE user_ID = '$userID'";
        $app = "DELETE FROM appointment WHERE pemail = '$uemail'";
        $order = "DELETE FROM orders WHERE email = '$uemail'";

        mysqli_query($con, $sql);
        mysqli_query($con, $app);
        mysqli_query($con, $order);

        session_destroy();
        header("location: index.php");
    }

?>