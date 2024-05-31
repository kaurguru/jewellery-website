<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    include("../connection.php");
    $sql="DELETE FROM `Gold-earrings` WHERE id=$id";
    if(mysqli_query($con,$sql)){
        echo"deleted";
        session_start();
        $_SESSION["delete"]="product deleted sucessfully...";
        header("location:list-gold-e.php");
    }
}


?>