<html>

<title>list</title>
<link rel="stylesheet" type="text/css" href="../styling.css">

<body>
<?php
     @include "../connection.php";
     @include "../links.php";
$discount = $_POST['discount'];
$image = $_POST['image'];
$karat = $_POST['karat'];
$name = $_POST['name'];
$gender = $_POST['gender']; 
$category = $_POST['category']; 
$price = $_POST['price']; 
$quantity = $_POST['quantity']; 

$sql="INSERT INTO `Gold-earrings` ( `discount`, `image`,`karat`, `name`, `gender`, `category`, `price`, `qty`) VALUES ( '$discount','$image' ,'$karat ' , '$name ' , '$gender ' , '$category ' , '$price ' , '$quantity')";
mysqli_query($con, $sql);

?>
<DIV class="show-data">
        <h3>product list</h3>
        <a href="earrings-form.php"><button class="more-btn">add more products</button></a> 
        <span class="alert-success">
          <?php
                    session_start();
                    if(isset($_SESSION["submit"])){
                        ?>
                        <div class="alert alert-success">
                            <?php
                            echo $_SESSION["submit"];
                            unset($_SESSION["submit"]);
                            ?>
                        </div>
                        <?php
                    }
                        ?>
                        <?php
                   
                    if(isset($_SESSION["edit"])){
                        ?>
                        <div class="alert alert-success">
                            <?php
                            echo $_SESSION["edit"];
                            unset($_SESSION["edit"]);
                            ?>
                        </div>
                        <?php
                    }
                ?>
                <?php
                  
                    if(isset($_SESSION["delete"])){
                        ?>
                        <div class="alert alert-success">
                            <?php
                            echo $_SESSION["delete"];
                            unset($_SESSION["delete"]);
                            ?>
                        </div>
                        <?php
                    }
                ?>
        </span>  
          
       <table>
        <thead>
          
            <tr>
                <th>Discount</th>
                <th>Image</th>
                <th>Karat</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Category</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php
           @include "../connection.php";
                $data = "SELECT * FROM `gold-earrings`";
                $result =mysqli_query($con,$data);
                // $row= mysqli_fetch_array($result);
                // print_r($row);
                while(  $row= mysqli_fetch_array($result)){
            ?>
            <tr>
                <td> <?php echo $row['discount'];  ?>%</td>
                <td> <img src="../gold-earrings/<?php echo $row['image'];  ?>" alt="product " class="product-img"></td>
                <td><?php echo $row['karat'];  ?></td>
                <td><?php echo $row['name'];  ?></td>
                <td><?php echo $row['gender'];  ?></td>
                <td><?php echo $row['category'];  ?></td>
                <td><?php echo $row['price'];  ?></td>
                <td><?php echo $row['qty'];  ?></td>
                <td>
                        <a href="edit.php?id=<?php echo $row["id"];?>"target="_blank"class="btn-edit"><ion-icon name="create"></ion-icon></a>
                        <a href="delete.php?id=<?php echo $row["id"];?>" target="_blank"class="btn-delete"><ion-icon name="trash"></ion-icon></a>
                </td>
            </tr>
                <?php
                }?>

        </tbody>
       </table>

    </DIV>