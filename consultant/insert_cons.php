<?php

require 'config.php';

$fname=$_POST["fname"];
$lname=$_POST["lname"];
// $apid=$_POST["apid"];
$apdate=$_POST["apdate"];
$aptime=$_POST["aptime"];
$pemail=$_POST["pemail"];
$cnumber=$_POST["cnumber"];
$cinterest=$_POST["cinterest"];



$sql="INSERT INTO appointment VALUES ('$fname','$lname','','$apdate','$aptime','$pemail','$cnumber','$cinterest',123,123)";

if($con->query($sql))
{
    echo "Insert Successful";
    header("Location: ../consultant.php");
    exit;
}
else{
    echo "Error".$con->error;
}

$con->close();


