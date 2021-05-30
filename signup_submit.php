<?php

require 'includes/common.php';

$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$password = md5($password);
$contact = $_POST['contact'];
$city = mysqli_real_escape_string($con, $_POST['city']);
$address = mysqli_real_escape_string($con, $_POST['address']);


    $checkdata = "SELECT id FROM users WHERE email='$email' ";
    $query = mysqli_query($con, $checkdata);
    if (mysqli_num_rows($query) > 0) {
        echo "Email Already Exist";
    }
 else {
    $user_registration_query = "insert into users(name, email, password, contact, city, address) values ('$name', '$email', '$password', '$contact', '$city', '$address' )";
    $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    $_SESSION['id'] = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
   
    
}
if (isset($_SESSION['id'])) {
        header('location: products.php');
        
    }
