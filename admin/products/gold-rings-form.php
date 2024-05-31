<html>

<title>silver earring form</title>
<link rel="stylesheet" type="text/css" href="styling.css">

<body>
<?php
$discount = $_POST['discount'];
$image = $_POST['image'];
$karat = $_POST['karat'];
$name = $_POST['name'];
$gender = $_POST['gender']; 
$category = $_POST['category']; 
$price = $_POST['price']; 

$conn= new mysqli('localhost', 'root','','e-jewellery');
if(! $conn)
{
die("connection failed:").mysqli_error;
}
$sql="INSERT INTO `gold-rings` ( `discount`, `image`,`karat`, `name`, `gender`, `category`, `price`) VALUES ( '$discount','$image' ,'$karat ' , '$name ' , '$gender ' , '$category ' , '$price ')";
mysqli_query($conn, $sql);

// $query3= "SELECT  `discount`, `image`, `name`, `gender`, `category`, `price` FROM `Gold-earrings` order by id ASC";
// $queryfire3 = mysqli_query($con,$query3);
//  $num3 = mysqli_num_rows($fire);

?><?php
@include "form.php";
?>
</body>
</html
