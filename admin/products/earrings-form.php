<html>

<title>gold-e form</title>
<link rel="stylesheet" type="text/css" href="../styling.css">

<body>
<?php
     @include "../connection.php";

$discount = $_POST['discount'];
$image = $_POST['image'];
$karat = $_POST['karat'];
$name = $_POST['name'];
$gender = $_POST['gender']; 
$category = $_POST['category']; 
$price = $_POST['price']; 
$quantity = $_POST['quantity']; 

$sql="INSERT INTO `Gold-earrings` ( `discount`, `image`,`karat`, `name`, `gender`, `category`, `price`, `qty`) VALUES ( '$discount','$image' ,'$karat ' , '$name ' , '$gender ' , '$category ' , '$price ', '$quantity ')";
mysqli_query($con, $sql);

// $query3= "SELECT  `discount`, `image`, `name`, `gender`, `category`, `price` FROM `Gold-earrings` order by id ASC";
// $queryfire3 = mysqli_query($con,$query3);
//  $num3 = mysqli_num_rows($fire);


?>

<section class="form-earrings">
    <a href=""><ion-icon name="chevron-back-outline" class="back"></ion-icon></a>
    <a href="list-gold-e.php"><button class="more-btn">product list</button></a> 

        <?php
        @include "form.php";
        ?>

   

</section>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html
