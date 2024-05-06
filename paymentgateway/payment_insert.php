<?php

require '../config/database.php';

// $cardid=$_POST[""]
$chold=$_POST["c_holder"];
$cardnum=$_POST["c_number"];
$pmount=$_POST["p_mount"];



$sql="INSERT INTO payment VALUES ('','$chold','$cardnum','$pmount')";

if($con->query($sql))
{
    echo "Insert Successful";
    header("Location: ../index.php");
    exit;
}
else{
    echo "Error".$con->error;
}

$con->close();
