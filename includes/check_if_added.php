<?php

function check_if_added_to_cart($item_id) {
    include 'common.php';
    $users_id = $_SESSION['id'];
    $Added = "SELECT * FROM users_items WHERE item_id='$item_id' AND users_id ='$users_id' and status='Added to cart'";
    $query = mysqli_query($con, $Added);
    if (mysqli_num_rows($query) >= 1) {
        return 1;
    } else {
        return 0;
    }
}
