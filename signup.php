<?php require 'includes/common.php';?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>sign up</title>
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
    </head>
    <body>
        <div id="container">
         <?php include 'includes/header.php'; ?>
            <div id="body">
        <div class="container">
            
            <div class="row row_style">
                <div class="col-md-4 col-md-offset-4">
                    <h1> SIGN UP</h1>
                      
                    <form method="post" action="signup_submit.php" class="form-group ">
                      
                        <div>
                            name:<input type="text" class="form-control" id="name" name="name" required><br><br>
                            email:<input type="email" class="form-control" id="email" name="email" required><br><br>
                            password:<input type="password" class="form-control" id="password" name="password" required><br><br><!-- comment -->
                            contact:<input type="text" class="form-control" id="contact" name="contact" required><br><br><!-- comment -->
                            city:<input type="text" class="form-control" id="city" name="city" required><br><br>
                            address:<input type="text" class="form-control" id="address" name="address" required><br><br>
                            <input class="btn btn-primary form-control" type="submit" value="submit">
                        </div>
                        
                    </form>
                          
                </div>
            </div>
        </div>
       <?php include 'includes/footer.php' ;?>
            </div>
        </div>
    </body>
</html>
