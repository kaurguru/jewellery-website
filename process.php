
<?php

include "user-includes/connection.php";
if(isset($_POST["submit"])){
    $discount = mysqli_real_escape_string($con,$_POST['discount']) ;
    $image = mysqli_real_escape_string($con,$_POST['image']) ;
    $karat = mysqli_real_escape_string($con,$_POST['karat']) ;
    $name = mysqli_real_escape_string($con,$_POST['name']) ;
    $gender = mysqli_real_escape_string($con,$_POST['gender']) ;
    $category = mysqli_real_escape_string($con,$_POST['category']) ;
    $price = mysqli_real_escape_string($con,$_POST['price']) ;
    $sql="INSERT INTO `Gold-earrings` ( `discount`, `image`,`karat`, `name`, `gender`, `category`, `price`) VALUES ( '$discount','$image' ,'$karat ' , '$name ' , '$gender ' , '$category ' , '$price ')";

           if(mysqli_query($con,$sql)){
            session_start();
        $_SESSION["submit"]="product added sucessfully";
        header("location:index.php");
        
           }else{
            die("<h1>Something went Wrong!</h1>");
           }
}

if(isset($_POST["edit"])){
    $discount = mysqli_real_escape_string($con,$_POST['discount']) ;
    $image = mysqli_real_escape_string($con,$_POST['image']) ;
    $karat = mysqli_real_escape_string($con,$_POST['karat']) ;
    $name = mysqli_real_escape_string($con,$_POST['name']) ;
    $gender = mysqli_real_escape_string($con,$_POST['gender']) ;
    $category = mysqli_real_escape_string($con,$_POST['category']) ;
    $price = mysqli_real_escape_string($con,$_POST['price']) ;
    $id = mysqli_real_escape_string($con,$_POST['id']) ;
    $sqli="UPDATE `Gold-earrings`SET discount='$discount',image='$image',karat='$karat',name='$name',gender='$gender',category='$category',price='$price' WHERE id=$id";

           if(mysqli_query($con,$sqli)){
            session_start();
            $_SESSION["update"]="edited product  sucessfully";
            header("location:index.php");
        
           }else{
            die("<h1>something went wrong!</h1>");
           }
}


?>
