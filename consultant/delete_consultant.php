<?php

require 'config.php';

$apid=$_GET["id"];

echo $apid;

$sql="DELETE FROM appointment WHERE Appointment_ID='$apid'";

if($con->query($sql))
{
    echo "Deleted";
    header("Location: cons_list.php");
    exit;
}
else
{
    echo "Not Success";

}






?>