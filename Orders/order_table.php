<!DOCTYPE html>
<html>
    
<head>
<link rel="stylesheet" href="Orders/order_table.css">
<title>Order list</title>

</head>
<body>
<h1>MY ORDER</h1>

<h1>Orders Details</h1>
<div>
<a  href="Orders/Orders_form.php"  class="order_add_btn">Add Order</a>   
    
    </div>
    

    <table class="order_details_table">
        
        <tr>
            <th>#</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Contact Number</th>
            <th>Package Name</th>
            <th>Order Details</th>
            <th>Amount</th>
            <th>Time duration</th>
           
        </tr>

        <tbody>
            <?php

            // include("../config/database.php");

            $Osql="SELECT order_id, customer_name, email, contact_number, package_name, order_detials, amount, time_duration FROM orders";

            $Oresult=$con->query($Osql);

            while($Orow=$Oresult->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $Orow["order_id"]; ?></td>
                            <td><?php echo $Orow["customer_name"]; ?></td>
                            <td><?php echo $Orow["email"]; ?></td>
                            <td><?php echo $Orow["contact_number"]; ?></td>
                            <td><?php echo $Orow["package_name"]; ?></td>
                            <td><?php echo $Orow["order_detials"]; ?></td>
                            <td><?php echo $Orow["amount"]; ?></td>
                            <td><?php echo $Orow["time_duration"]; ?></td>
                            

                            <td>
                               <a href="Orders/view_orders.php?id=<?php echo $Orow["order_id"]; ?>" class="order_view_btn"><button class="order_view_btn">View</button></a>
                               
                                <a href="Orders/edit_orders.php?id=<?php echo $Orow["order_id"]; ?>" class="order_edit_btn"><button class="order_edit_btn">Edit</button></a>
                                <a href="Orders/delete_orders.php?id=<?php echo $Orow["order_id"]; ?>" class="order_delete_btn"><button class="order_delete_btn">Delete</button></a> 
                            </td>
                        </tr>
                <?php
            }






            ?>


        </tbody>










</body>
</html>