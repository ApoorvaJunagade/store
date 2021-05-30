<?php

require 'includes/common.php';

$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$password = md5($password);
$i_d = "select id, email from users where email='$email' and password ='$password'";
$query1=mysqli_query($con, $i_d);
if(mysqli_num_rows($query1)==0){
    echo "no user with email:'$email'";
}
else{
    $valid_user = mysqli_fetch_array($query1);
    $email_id=$valid_user['email'];
    $Id = $valid_user['id'];
    $_SESSION['email']=$email_id;
    $_SESSION['id']=$Id;
    header('location: products.php');
}
