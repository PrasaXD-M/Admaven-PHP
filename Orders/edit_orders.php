<!DOCTYPE html>
<html>
    <head>
        <title>consultation  page</title>
        <link rel="stylesheet" href="edit_orders.css">
        

    </head>
    <body>
        

        
            
                <?php
                        if(isset($_GET["id"])){

                            $oID=$_GET["id"];
            
                            include("../config/database.php");
            
                            $Osql="SELECT * FROM orders WHERE order_id=$oID";
                            $Oresult=$con->query($Osql);
                            $Orow=$Oresult->fetch_assoc() 

                    ?>

                    <?php
                        }

                        ?>

                        <form action="update_orders.php" method="POST" autocomplete="off">
                            
                            
                            
                        <!-- <label for="">Order ID:</label>
                            <input type="text" name="oid" class="input">
                            
                            <br><br> -->
                            <input type="hidden" name="oid" value="<?php echo $oID; ?>">

                            

                            
                            
                            <!-- <label for="">Content creator ID:</label>
                            <input type="text" name="concid" class="input">
                            
                            <br><br>
                             -->

                            
                            <!-- <label for="">Package ID:</label>
                            <input type="text" name="pid" class="input" >
                            
                            <br><br> -->
                            
                            
                            


                            <label for="">Customer Name:</label>
                            <input type="text" name="cusname" class="input" value="<?php echo $Orow["customer_name"];?>">
                            
                            <br><br>

                            <label for="">Email:</label>
                            <input type="email" name="cusmail" class="input" value="<?php echo $Orow["email"];?>">
                            
                            <br><br>

                            <label for="">Contact Number:</label>
                            <input type="text" name="cusnumber" class="input" value="<?php echo $Orow["contact_number"];?>">
                            
                            <br><br>

                            <label for="">Package Name:</label>
                            <input type="text" name="cuspackname" class="input" value="<?php echo $Orow["package_name"];?>">
                            
                            <br><br>

                            <label for="">Order Details:</label>
                            <input type="text" name="odertails" class="input" value="<?php echo $Orow["order_detials"];?>">
                            
                            <br><br>

                            <label for="">Amount:</label>
                            <input type="text" name="cusamount" class="input" value="<?php echo $Orow["amount"];?>">
                            
                            <br><br>

                            <label for="">Time Duration:</label>
                            <input type="text" name="custimedu" class="input" value="<?php echo $Orow["time_duration"];?>">
                            
                            <br><br>

                            
                           
                            
                        
                            <input type="submit"  value="update" name="edit" class="update_btn">
                       


                  

                    
                        
                    </form>

                        
                    
        
    </body>
</html>