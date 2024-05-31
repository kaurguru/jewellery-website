<?php
session_start();

if (isset($_SESSION['auth'])) {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $userid = $_SESSION['auth_user']['user_id'];

        // Include your database connection file
        include "user-includes/connection.php";

        // Check if the product exists in the user's cart
        $check_query = "SELECT COUNT(*) AS count FROM `carts` WHERE id = '$id'";
        $check_result = mysqli_query($con, $check_query);
        $check_data = mysqli_fetch_assoc($check_result);

        if ($check_data['count'] > 0) {
            // Delete the product from the cart
            $delete_query = "DELETE FROM `carts` WHERE id ='$id'";
            $delete_query_run = mysqli_query($con, $delete_query);
            if ($delete_query_run) {
                echo '200'; // Success response
            } else {
                echo '500'; // Error response
            }
        } else {
            echo '404'; // Product not found in cart response
        }
    } else {
        echo '400'; // Missing product ID response
    }
} else {
    echo '401'; // Not logged in response
}
?>
