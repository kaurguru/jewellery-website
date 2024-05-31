<?php
session_start();
include "user-includes/connection.php";

if (isset($_SESSION['auth'])) {
    if (isset($_POST["order-places-btn"])) {
        // Sanitize user inputs
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $state = mysqli_real_escape_string($con, $_POST['state']);
        $landmark = mysqli_real_escape_string($con, $_POST['landmark']);
        $pincode = mysqli_real_escape_string($con, $_POST['pincode']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $payment_mode = mysqli_real_escape_string($con, $_POST['payment_mode']);
        $payment_id = mysqli_real_escape_string($con, $_POST['payment_id']);

        // Validate required fields
        if(empty($username) || empty($email) || empty($phone) || empty($state) || empty($address) || empty($pincode)) {
            $_SESSION['message'] = "All fields are mandatory";
            header("Location: checkout.php");
            exit();
        }

        // Calculate total price
        $user_id = $_SESSION['auth_user']['user_id'];
        $cart_query = "SELECT * FROM `carts` WHERE user_id = '$user_id'";
        $cart_query_run = mysqli_query($con, $cart_query);
        $total_price = 0;

        while ($item = mysqli_fetch_assoc($cart_query_run)) {
            $total_price += $item['price'] * $item['qty'];
            $prod_id = $item['prod_id'];
        }

        // Generate tracking number
        $tracking_no = "xyz" . rand(1111, 9999) . substr($phone, 2);

        // Insert order into orders table
        $sql = "INSERT INTO `orders` (`tracking_no`, `prod_id`, `user_id`, `username`, `email`, `phone`, `state`, `landmark`, `address`, `pincode`, `total_price`, `payment_mode`, `payment_id`)
                VALUES ('$tracking_no', '$prod_id', '$user_id', '$username', '$email', '$phone', '$state', '$landmark', '$address', '$pincode', '$total_price', '$payment_mode', '$payment_id')";
        $sql_query = mysqli_query($con, $sql);

        if ($sql_query) {
            $order_id = mysqli_insert_id($con);

            // Insert order items into order-products table
            $cart_query_run = mysqli_query($con, $cart_query);
            while ($item = mysqli_fetch_assoc($cart_query_run)) {
                $prod_id = $item['prod_id'];
                $qty = $item['qty'];
                $price = $item['price'];
                $image = $item['image'];
                $type = $item['p_type'];

                $insert_items_query = "INSERT INTO `order-products` (`order_id`, `prod_id`, `qty`, `price`, `image`, `type`)
                                       VALUES ('$order_id', '$prod_id', '$qty', '$price', '$image', '$type')";
                mysqli_query($con, $insert_items_query);
            }

            // Clear the cart
            $delete_cart = "DELETE FROM `carts` WHERE user_id = '$user_id'";
            mysqli_query($con, $delete_cart);

            $_SESSION['message'] = "Order Placed Successfully";
            header("Location: cart.php");
            exit();
        } else {
            $_SESSION['message'] = "Failed to place order";
            header("Location: checkout.php");
            exit();
        }
    } else {
        $_SESSION['message'] = "Error: Invalid request";
        header("Location: checkout.php");
        exit();
    }
} else {
    $_SESSION['message'] = "Please login to your account";
    header('Location: user-login.php');
    exit();
}
?>
