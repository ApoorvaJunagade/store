<?php
include 'includes/common.php';
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
    <?php
    include 'includes/header.php';
    include 'includes/check_if_added.php';
    ?>
   <div id="body">
    <div class="content">
    <div class="container row_style">
        <div class="jumbotron">
            <h1>Welcome to our Lifestyle Store!</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
                have all in one place.</p>
        </div>
    </div>
    <div class="container" >
        <div class="row text-center">
            <div class="col-md-3 col-sm-6 thumbnail">
                <a href="#" ><img src="img/5.jpg" alt="camera"></a>
                <h1>Cannon EOS</h1>
                <p> Price Rs.36000.00</p>
                 <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added 

 if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
cart</a>';
 } else {
 ?>
<a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>

                <!---<button class="btn btn-block btn-primary ">Add to cart</button>-->
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <a href="#" ><img src="img/2.jpg" alt="camera"></a>
                <h1>Nikon DSLR</h1>
                <p> Price Rs.40000.00</p>
                 <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added 
 
 if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
cart</a>';
 } else {
 ?>
<a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <a href="#" ><img src="img/3.jpg" alt="camera"></a>
                <h1>Sony DSLR</h1>
                <p> Price Rs.45000.00</p>
                 <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added 
 
 if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
cart</a>';
 } else {
 ?>
<a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <a href="#" ><img src="img/4.jpg" alt="camera"></a>
                <h1>Olympus DSLR</h1>
                <p> Price Rs.50000.00</p>
                 <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added 

 if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
cart</a>';
 } else {
 ?>
<a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6 thumbnail">
                <a href="#" ><img src="img/10.jpg" alt="watch"></a>
                <h1>Titan model #301</h1>
                <p> Price Rs.13000.00</p>
                 <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added 

 if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
cart</a>';
 } else {
 ?>
<a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <a href="#" ><img src="img/11.jpg" alt="watch"></a>
                <h1>Titan model #201</h1>
                <p> Price Rs.3000.00</p>
                 <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added 

 if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
cart</a>';
 } else {
 ?>
<a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <a href="#" ><img src="img/12.jpg" alt="watch"></a>
                <h1>HMT Milan</h1>
                <p> Price Rs.8000.00</p>
                <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added 

 if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
cart</a>';
 } else {
 ?>
<a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <a href="#" ><img src="img/9.jpg" alt="watch"></a>
                <h1>Faber Luba #111</h1>
                <p> Price Rs.1800.00</p>
               <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added 

 if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
cart</a>';
 } else {
 ?>
<a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6 thumbnail">
                <a href="#" ><img src="img/shirt.jpg" alt="shirt"></a>
                <h1>H&W</h1>
                <p> Price Rs.800.00</p>
                 <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added 

 if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
cart</a>';
 } else {
 ?>
<a href="cart_add.php?id=9" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <a href="#" ><img src="img/6.jpg" alt="shirt"></a>
                <h1>Luis Phill</h1>
                <p> Price Rs.1000.00</p>
                <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added 

 if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
cart</a>';
 } else {
 ?>
<a href="cart_add.php?id=10" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <a href="#" ><img src="img/13.jpg" alt="shirt"></a>
                <h1>Jhon Zhok</h1>
                <p> Price Rs.1500.00</p>
               <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added 

 if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
cart</a>';
 } else {
 ?>
<a href="cart_add.php?id=11" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <a href="#" ><img src="img/14.jpg" alt="shirt"></a>
                <h1>Jhalsani</h1>
                <p> Price Rs.1300.00</p>
                 <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added 

 if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
cart</a>';
 } else {
 ?>
<a href="cart_add.php?id=12" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
            </div>
        </div>
        &nbsp;
    </div>
    

    <?php
    include 'includes/footer.php';
    ?>
    </div>
     </div>
    </div>
</body>
</html>
