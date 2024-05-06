<?php

require '../config/database.php';

$oID=$_POST["oid"];
$C_name=$_POST["cusname"];
$C_mail=$_POST["cusmail"];
$C_num=$_POST["cusnumber"];
$C_pack=$_POST["cuspackname"];
$ODertails=$_POST["odertails"];
$C_mount=$_POST["cusamount"];
$C_time=$_POST["custimedu"];





if(empty($C_name)||empty($C_mail)||empty($C_num)||empty($C_pack)||empty($ODertails)||empty($C_mount)||empty($C_time))
{
    echo "All required";
}
else{

    $Osql="UPDATE orders set     customer_name='$C_name',
                                 email='$C_mail',
                                 contact_number='$C_num' ,
                                 package_name='$C_pack',
                                 order_detials='$ODertails',
                                 amount='$C_mount' ,
                                 time_duration='$C_time'
                                 
                                 WHERE order_id=$oID";

    if($con->query($Osql))
    {
        echo "Updated";
        header("Location: ../contentCreator.php");
        exit;
    }
    else{
        echo "Not updated";
    }

}