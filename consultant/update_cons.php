<?php

require_once "../config/database.php";

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$apid=$_POST["apid"];
$apdate=$_POST["apdate"];
$aptime=$_POST["aptime"];
$pemail=$_POST["pemail"];
$cnumber=$_POST["cnumber"];
$cinterest=$_POST["cinterest"];



if(empty($fname)||empty($lname)||empty($apdate)||empty($apdate)||empty($aptime)||empty($pemail)||empty($cnumber)||empty($cinterest))
{
    echo "All required";
}
else{

    $sql="UPDATE appointment SET fname='$fname',
                                 lname='$lname',
                                 Date='$apdate' ,
                                 Time='$aptime',
                                 pemail='$pemail',
                                 cnumber=$cnumber,
                                 cinterest='$cinterest'
                                 
                                 WHERE Appointment_ID='$apid' ";

    if($con->query($sql))
    {
        echo "Updated";
        header("Location: ../consultant.php");
        exit;
    }
    else{
        echo "Not updated";
    }

} ?>