<?php require 'includes/common.php'; 
if (isset($_SESSION['email'])) {
 header('location: products.php');
}?>
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
      <?php  include 'includes/header.php'; ?>

<div id="body">
        <div id="banner-img" >
            <div class="container">
                <div id="banner-content">

                    <h1>We sell lifestyle.</h1>
                    <p>Flat 40% off on Premium brands</p>

                    <a href="products.php" class="btn btn-danger btn-lg active">Shop now</a>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
</div>
</div>
    </body>
</html>
