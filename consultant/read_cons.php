<?php

require 'config.php';


$sql="SELECT fname,lname,Appointment_ID,Date,Time,pemail,cnumber,cinterest,Cons_ID,User_ID FROM appointment";

$result=$con->query($sql);

if($result->num_rows>0)
{
    echo"<table border='1'>";
    while($row=$result->fetch_assoc())
    {
        echo"<tr>";
        echo"<td>".$row["fname"]."</td>".
        "<td>".$row["lname"]."</td>".
        "<td>".$row["Appointment_ID"]."</td>".
        "<td>".$row["Date"]."</td>".
        "<td>".$row["Time"]."</td>".
        "<td>".$row["pemail"]."</td>".
        "<td>".$row["cnumber"]."</td>".
        "<td>".$row["cinterest"]."</td>".
        "<td>".$row["Cons_ID"]."</td>".
        "<td>".$row["User_ID"]."</td>";
        echo"</tr>";
    }
    echo"</table>";
}
else{

    echo "No Results";
}



$con->close();
?>




