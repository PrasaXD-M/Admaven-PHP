<?php
session_start();
require_once "../config/database.php";

// $=$_POST[;"oid"]
$C_name=$_POST["cusname"];
$C_mail=$_POST["cusmail"];
$C_num=$_POST["cusnumber"];
$C_pack=$_POST["cuspackname"];
$ODertails=$_POST["odertails"];
$C_mount=$_POST["cusamount"];
$C_time=$_POST["custimedu"];




$Osql="INSERT INTO orders VALUES ('','$C_name','$C_mail','$C_num','$C_pack','$ODertails','$C_mount','$C_time')";

if($con->query($Osql))
{
    if(isset($_SESSION["user"])) {
        header("location: ../paymentgateway/payment_form.php");

    } else {
        header("location: ../contentCreator.php");
        exit;
    }
    // echo "Insert Successful";
     
}
else{
    echo "Error".$con->error;
}

$Ocon->close();
?>