

<?php
include 'includes/common.php';
if(!isset($_SESSION['email'])){
 header('location=index.php');
 
}
$id= $_SESSION['id'];

$update="update users_items set status='confirmed' where users_id=$id" ;
$result_update=mysqli_query($con,$update);


?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>Products</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">


        <!-- jQuery library -->
        <script src="bootstrap/js/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" type="text/css"/>

    </head>
    <body>
        <div id="container">
            <?php include 'includes/header.php'; ?>
            <div id="body">
                <div class="container row_style">
                    <h1 class="text-success"> Your Order is confirmed. Thank you for shopping with us!</h1>
                    <div>
                        <a href="products.php"> Click here</a> to continue shopping
                    </div>
                </div>
                <?php include 'includes/footer.php'?>
            </div>
        </div>
    </body>
</html>
