<?php

require '../config/database.php';

$oID=$_GET["id"];

echo $oID;

$Osql="DELETE FROM orders WHERE order_ID='$oID'";

if($con->query($Osql))
{
    echo "Deleted";
    header("Location: ../contentCreator.php");
    exit;
}
else
{
    echo "Not Success";

}






?>