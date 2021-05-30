<?php

require 'includes/common.php';

$old_password = mysqli_real_escape_string($con, $_POST['old_password']);
$old_password = md5($old_password);
$new_password = mysqli_real_escape_string($con, $_POST['new_password']);
$new_password = md5($new_password);
$retype_password = mysqli_real_escape_string($con, $_POST['retype_password']);
$retype_password = md5($retype_password);
$iid = $_SESSION['id'];
$password = "select password from users where id = '$iid'";
$result3 = mysqli_query($con, $password);
$result4 = mysqli_fetch_array($result3);
?>
<!DOCTYPE html>
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
    <?php
if ($old_password == $result4['password']) {

    if ($new_password == $retype_password) {
        $update_password = "update users set password='$new_password' where id='$iid'";
        $result = mysqli_query($con, $update_password);
        echo '<script type="text/javascript">';
        echo 'alert("password updated successfully")';  //not showing an alert box.
        echo '</script>';
        
    } else {
//header("location:settings.php");
        echo '<script type="text/javascript">';
        echo 'alert("the new password does not match")';  //not showing an alert box.
        echo '</script>';
       // header("location:settings.php");
    }
} else {

    echo '<script type="text/javascript">';
    echo 'alert("old password is incorrect")';  //not showing an alert box.
    echo '</script>';
    
}
echo "<script>window.top.location='settings.php'</script>"
?>
        </html>