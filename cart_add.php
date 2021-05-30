<?php

require 'includes/common.php';

$itemid= $_GET['id'];
$user_id = $_SESSION['id'];
$sql= "INSERT INTO users_items(users_id, item_id, status) VALUES('$user_id', '$itemid', 'Added to cart')";
$result1 = mysqli_query($con, $sql);
header("location:products.php");
