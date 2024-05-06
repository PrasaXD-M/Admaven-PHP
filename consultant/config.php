<?php


$con=new mysqli("localhost","root","","consultant");

if($con->connect_error)
{
    die("Connection failed".$con->connect_error);
}
else{
    echo" ";
}




?>