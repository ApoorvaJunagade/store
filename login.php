<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login</title>
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
        <style>
            .row_style{
                margin-top:40px;
            }
        </style>
    </head>
    <body>
        <div id="container">
        <?php
        include 'includes/header.php';
        ?>
            <div id="body">
        <form class=" container" method="post" action="login_submit.php">
            <div class="row row_style">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading"> LOGIN
                        </div>
                        <div class="text-warning"><br> 
                            <i>&nbsp; &nbsp;  login to make a purchase</i>
                            <br>
                        </div>
                        <div class="panel-body">
                            <input type="email" class="form-control" placeholder="email" name="email" required><br>
                            <input type="password" class="form-control" placeholder="Password" name="password" required><br>
                            <input class="btn btn-primary" type="submit" value="Login">
                        </div>
                        <div class="panel-footer">
                            Don't have an account?<a href="signup.html" target="blank"> Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php include'includes/footer.php';
        ?>
            </div>
        </div>
    </body>
</html>
