<?php 
    $hostName = "localhost";
    $dbUser = "root";
    $dbpassowrd = "";
    $dbName = "testlogin"; //AdMaven //testlogin

    $con = mysqli_connect($hostName, $dbUser, $dbpassowrd, $dbName);

    if( !$con ) {
        die("Unable to connect with the database!");
    }
?>