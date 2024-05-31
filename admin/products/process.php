
<?php

include "../connection.php";
if(isset($_POST["submit"])){
    $discount = mysqli_real_escape_string($con,$_POST['discount']) ;
    $image = mysqli_real_escape_string($con,$_POST['image']) ;
    $karat = mysqli_real_escape_string($con,$_POST['karat']) ;
    $name = mysqli_real_escape_string($con,$_POST['name']) ;
    $gender = mysqli_real_escape_string($con,$_POST['gender']) ;
    $category = mysqli_real_escape_string($con,$_POST['category']) ;
    $price = mysqli_real_escape_string($con,$_POST['price']) ;
    $quantity = mysqli_real_escape_string($con,$_POST['quantity']) ;
    $sql="INSERT INTO `Gold-earrings` ( `discount`, `image`,`karat`, `name`, `gender`, `category`, `price` ,`qty`) VALUES ( '$discount','$image' ,'$karat ' , '$name ' , '$gender ' , '$category ' , '$price ', '$quantity ')";

           if(mysqli_query($con,$sql)){
            session_start();
        $_SESSION["submit"]="product added sucessfully....";
        header("location:list-gold-e.php");
        
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
    $quantity = mysqli_real_escape_string($con,$_POST['quantity']) ;
    $id = mysqli_real_escape_string($con,$_POST['id']) ;
    $sqli="UPDATE `Gold-earrings`SET discount='$discount',image='$image',karat='$karat',name='$name',gender='$gender',category='$category',price='$price',quantity='$quantity' WHERE id=$id";

           if(mysqli_query($con,$sqli)){
            session_start();
           $_SESSION["update"]="product edited  sucessfully..";
           header("location:list-gold-e.php");
        //    header("location:earrings-form.php");
        
           }else{
            die("<h1>something went wrong!</h1>");
           }
}


?>

<!-- --------------------------------------silver products---------------------------- -->
<!-- ---------------------------------------------------------------------------------- -->

<?php

include "../connection.php";
if(isset($_POST["submit2"])){
    $discount = mysqli_real_escape_string($con,$_POST['discount']) ;
    $image = mysqli_real_escape_string($con,$_POST['image']) ;
    $name = mysqli_real_escape_string($con,$_POST['name']) ;
    $gender = mysqli_real_escape_string($con,$_POST['gender']) ;
    $category = mysqli_real_escape_string($con,$_POST['category']) ;
    $price = mysqli_real_escape_string($con,$_POST['price']) ;
    $quantity = mysqli_real_escape_string($con,$_POST['quantity']) ;
    $sql="INSERT INTO `silver-earrings` ( `discount`, `image`, `name`, `gender`, `category`, `price` ,`qty`) VALUES ( '$discount','$image'  , '$name ' , '$gender ' , '$category ' , '$price ', '$quantity ')";

           if(mysqli_query($con,$sql)){
            session_start();
        $_SESSION["submit"]="product added sucessfully....";
        header("location:list-silver-e.php");
        
           }else{
            die("<h1>Something went Wrong!</h1>");
           }
}

if(isset($_POST["edit2"])){
    $discount = mysqli_real_escape_string($con,$_POST['discount']) ;
    $image = mysqli_real_escape_string($con,$_POST['image']) ;
    $name = mysqli_real_escape_string($con,$_POST['name']) ;
    $gender = mysqli_real_escape_string($con,$_POST['gender']) ;
    $category = mysqli_real_escape_string($con,$_POST['category']) ;
    $price = mysqli_real_escape_string($con,$_POST['price']) ;
    $quantity = mysqli_real_escape_string($con,$_POST['quantity']) ;
    $id = mysqli_real_escape_string($con,$_POST['id']);
    $sqli="UPDATE `silver-earrings` SET discount='$discount',image='$image',name='$name',gender='$gender',category='$category',price='$price',qty='$quantity' WHERE id=$id";

           if(mysqli_query($con,$sqli)){
            echo" edit";
            session_start();
           $_SESSION["update"]="product edited  sucessfully...";
           header("location:list-silver-e.php");
        //    header("location:earrings-form.php");
        
           }else{
            die("<h1>something went wrong!</h1>");
           }
}




?>
