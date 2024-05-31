<?php
session_start();
include ("admin/includes/functions/myfunctions.php");
include ("user-includes/connection.php");

session_start();

if (isset($_SESSION['auth'])) {
    if (isset($_POST['prod_id']) && isset($_POST['prod_qty'])) {
        $prod_id = $_POST['prod_id'];

        $prod_qty = $_POST['prod_qty'];

        $userid = $_SESSION['auth_user']['user_id'];

        include "user-includes/connection.php";

        $check_query = "SELECT COUNT(*) AS count  FROM `carts` WHERE user_id = '$userid' AND prod_id = '$prod_id' ";
        $check_result = mysqli_query($con, $check_query);
        $check_data = mysqli_fetch_assoc($check_result);

        if ($check_data['count'] > 0) {
            $update_query = "UPDATE `carts` SET qty= '$prod_qty' WHERE  prod_id ='$prod_id' AND user_id= '$userid'";
            $update_query_run = mysqli_query($con, $update_query);
            if ($update_query_run) {
                echo '200'; // Success response
            } else {
                echo '500'; // Error response
            }
        } else {
            echo '404'; // Product not found in cart response
        }
    } else {
        echo '400'; // Missing product ID or quantity response
    }
} else {
    echo '401'; // Not logged in response
}

?>