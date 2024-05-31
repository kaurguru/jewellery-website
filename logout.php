<?php
include "admin/includes/functions/myfunctions.php";
session_start();
include "user-includes/connection.php"; // Include database connection

if(isset($_SESSION['auth'])){
    $user_id = $_SESSION['auth_user']['user_id']; // Get user ID
    
    // Delete cart data
    $delete_cart = "DELETE FROM `carts` WHERE user_id = '$user_id'";
    $delete_cart_run = mysqli_query($con, $delete_cart);
    
    // Unset session variables
    unset($_SESSION['auth']);
    unset($_SESSION['auth-user']);

    // Redirect with success message
    redirect("index.php", "Logged Out Successfully");
} else {
    // If session not set, redirect to index page
    redirect("index.php", "");
}
?>
