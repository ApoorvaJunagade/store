<?php
require 'includes/common.php';

$items_id=$_GET['id'];
$usersId =$_SESSION['id'];
$sql_remove=" delete from users_items where users_id=$usersId and item_id=$items_id ";
$result_remove=mysqli_query($con, $sql_remove);
header("location:cart.php");

