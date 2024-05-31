<?php
session_start();
include ("admin/includes/functions/myfunctions.php");
include ("user-includes/connection.php");

session_start();

    if (isset($_SESSION['auth'])) {
        if (isset($_POST['p_id']) && isset($_POST['gender']) && (isset($_POST['p_type']))) {
            $id = $_POST['p_id'];
            $p_name = $_POST['p_name'];
            $gender= $_POST['gender'];
            $type = $_POST['p_type'];
            $price = $_POST['p_price'];
            $category = $_POST['p_category'];
            $image = $_POST['p_image'];

            $userid = $_SESSION['auth_user']['user_id'];
            $username = $_SESSION['auth_user']['username'];
            include "user-includes/connection.php";

            $check_query = "SELECT COUNT(*) AS count  FROM `wishlist` WHERE user_id = '$userid' AND prod_id = '$id' AND p_type = '$type' ";
            $check_result = mysqli_query($con, $check_query);
            $check_data = mysqli_fetch_assoc($check_result);

            if ($check_data['count'] > 0) {
                echo 'already_in_cart';

            } else {
                $insert_query = "INSERT INTO `wishlist`( `user_id`,`prod_id`,`p_name`,`p_type`,`price`,`category`, `image`,`gender`) VALUES ( '$userid' ,'$id' ,'$p_name' ,'$type' ,'$price' ,'$category' , '$image','$gender')";
                $run_query = mysqli_query($con, $insert_query);

                if ($run_query) {
                    echo 'success';
                } else {
                    echo 'error';
                }
            }
            // Close the database connection
            mysqli_close($con);
        } else {
            // Example response if product ID is not provided
            echo 'error';
        }
    } else  {
        echo 'not_logged_in';
    } 
    



?>