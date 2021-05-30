<?php
require 'includes/common.php';
if (!isset($_SESSION['id'])) {
    header('location=index.php');
    exit;
}
//$_SESSION['id'] = $userid;
$userid = $_SESSION['id'];
$products = "SELECT items.id, items.name, items.price FROM `users_items` JOIN items on `users_items`.`item_id`=items.id where `users_items`.`users_id`=$userid";
$result = mysqli_query($con, $products);
$cost=0;
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Bootstrap </title>
        <!-- Latest compiled and minified CSS -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">


        <!-- jQuery library -->
        <script src="bootstrap/js/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>

    </head>
    <body>
        <div id="container">
            
                <?php include 'includes/header.php'; ?>
                <div id="body" class="row_style">
                    <div class="row row_style">
                        <div class="container row_style">
                           <?php if (mysqli_num_rows($result) == 0) {
    echo 'add items to the cart first';
} else { ?>
                            <table class="table table-bordered" >
                                <tbody>
                                    <tr>
                                        <td>
                                            Item Number
                                        </td>
                                        <td>
                                            Item Name
                                        </td>
                                        <td>
                                            Price
                                        </td>
                                        
                                        <td>

                                        </td>
                                    </tr><?php while ($row = mysqli_fetch_array($result))
                                    {
                                           
                                                   $cost+=$row["price"];
?>
        
                                    <tr>
                                     <td>
<?php echo $row["id"];?>
   
          
                                        </td>
                                        <td>
<?php echo $row["name"];?>
                                        </td>
                                        <td>
<?php echo $row["price"];?>
                                        </td>
                                        <td>
<a href='cart_remove.php?id=<?=$row['id']?>' 
class='remove_item_link'> Remove<?php }?></a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>

                                        </td>
                                        <td>
                                            Total

                                        </td>
                                        <td>
<?php 
echo $cost;
                                    ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary" href="success.php?=<?=$userid?>" >
Confirm order<?php }?>
                                            </a>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php
                    include 'includes/footer.php';
                    ?>
                </div>
            </div>
        
    </body>
</html>
