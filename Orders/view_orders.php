<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="view_orders.css">
    <title>Orders Details</title>
</head>

<body>

    <div>
        <h1>Order Details</h1>

        <?php
            if(isset($_GET["id"])){

                $oID=$_GET["id"];

                include("../config/database.php");

                $Osql="SELECT * FROM orders WHERE order_ID=$oID";
                $Oresult=$con->query($Osql);
                $Orow=$Oresult->fetch_assoc() 

                ?>

                <h2>Order ID</h2>
                <p><?php echo $Orow["order_id"]; ?></p>
                <h2>Customer Name</h2>
                <p><?php echo $Orow["customer_name"]; ?></p>
                
                <h2>Email</h2>
                <p><?php echo $Orow["email"]; ?></td></p>
                <h2>Contact Number</h2>
                <p><?php echo $Orow["contact_number"]; ?></td></p>
                
                <h2>Package Name</h2>
                <p><?php echo $Orow["package_name"]; ?></p>
                <h2>Order Details</h2>
                <p><?php echo $Orow["order_detials"]; ?></p>
                
                <h2>Amount</h2>
                <p><?php echo $Orow["amount"]; ?></td></p>
                <h2>Time Duration</h2>
                <p><?php echo $Orow["time_duration"]; ?></td></p>
               

            <?php

            }




        ?>

    </div>









</body>

</html>