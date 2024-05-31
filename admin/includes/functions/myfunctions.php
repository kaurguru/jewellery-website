<?php
// include "../config/dbcon.php";


function getAll($table)
{
    global $con;

    $query = " SELECT * FROM $table ";
   $query_run = mysqli_query($con, $query);
   return   $query_run ;
}

function getAllActive($table)
{
    global $con;
    $query = " SELECT * FROM $table WHERE id= 'id' ";
    return   $query_run = mysqli_query($con, $query);
}

function getOrders(){
    global $con;
    $userId = $_SESSION['auth_user']['user_id'];
    $query = "SELECT * FROM `orders` WHERE user_id='userId'";
    return $query_run = mysqli_query($con ,$query);
}

function getById($table ,$id)
{
    global $con;
    $query = " SELECT * FROM $table WHERE id= '$id' ";
    return   $query_run = mysqli_query($con, $query);
}
function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location:' . $url);
    exit();
}
?>