<!DOCTYPE html>
<html>
    
<head>
    
<title>payment list</title>

</head>
<body>


<h1>Payment Details</h1>


    <table class="payment_details_table">
        <tr>
            <th>#</th>
            <th>Card holder</th>
            <th>Card number</th>
            <th>Amount</th>
            
           
        </tr>

        <tbody>
            <?php

            include("payment_config.php");

            $sql="SELECT payment_id,card_holder,card_number,amount FROM payment";

            $result=$con->query($sql);

            while($row=$result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row["payment_id"]; ?></td>
                            <td><?php echo $row["card_holder"]; ?></td>
                            <td><?php echo $row["card_number"]; ?></td>
                            <td><?php echo $row["amount"]; ?></td>
                            
                            

                           
                        </tr>
                <?php
            }