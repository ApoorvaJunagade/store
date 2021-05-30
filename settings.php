<?php 
if(!isset($_SESSION['email'])){
header('location=index.php');
}
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
        <div id="container";>
        <?php
include 'includes/header.php';
        ?>
             <div id="body">
        <div class="container">
            <div class="row row_style">
                <div class="col-md-4 col-md-offset-4">
                    <h1> Change Password</h1>
                      
                    <form class="form-group" method="post" action="settings_script.php">
                      
                        <div>
                            Old Password:<input type="password" class="form-control" name="old_password"><br><br>
                            New password:<input type="password" class="form-control" name="new_password"><br><br>
                            Retype new password:<input type="password" class="form-control" name="retype_password"><br><br><!-- comment -->
                            
                            <input class="btn btn-primary" type="submit" value="change">
                        </div>
                        
                    </form>
                          
                </div>
            </div>
        </div>
            <?php include 'includes/footer.php' ?>
        </div>
    </div>
    </body>
</html>
