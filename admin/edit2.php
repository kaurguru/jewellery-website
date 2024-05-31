<?php
include "config/dbcon.php";
include "includes/header.php";
include "../middleware/adminmiddleware.php";
include "includes/functions/myfunctions.php";




// $discount = $_POST['discount'];
// $image = $_POST['image'];
// $karat = $_POST['karat'];
// $name = $_POST['name'];
// $gender = $_POST['gender']; 
// $category = $_POST['category']; 
// $price = $_POST['price']; 
// $quantity = $_POST['quantity']; 

// $sqli="INSERT INTO `Gold-earrings` ( `discount`, `image`,`karat`, `name`, `gender`, `category`, `price`, `qty`) VALUES ( '$discount','$image' ,'$karat ' , '$name ' , '$gender ' , '$category ' , '$price  , '$quantity ')";
// mysqli_query($con, $sqli);
?>



<div class="container">
    <din class="row">
        <div class="cl-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Products</h4>
                </div>
                <div class="card-body">

                    <?php
                    if (isset($_GET["id"])) {
                        $id = $_GET["id"];
                        $sqli = "SELECT * FROM `silver-earrings` WHERE id= '$id'";
                        $result = mysqli_query($con, $sqli);
                        $row = mysqli_fetch_array($result);
                        ?>

                        <form action="process.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div><label>Discount</label> </div>
                                    <input type="hidden" name="id" value=<?php echo $row["id"]; ?>>
                                    <input type="number" name="discount" aria-label="Sizing example input"
                                        class="form-control" required placeholder="discount" value=<?php echo $row["discount"]; ?>>
                                </div>
                                <div class="col-md-6">
                                    <label>Product Image</label>
                                    <input type="file" name="image" class="form-control" value=../artificial/<?php echo $row["image"]; ?>>
                                    <label>Current Image</label>
                                    <input type="hidden" name="old_image" value="<?= $row["image"]; ?>">
                                    <img src="../artificial/<?php echo $row["image"]; ?>" width="50px" alt="">
                                </div>
                               
                                <div class="col-md-12">
                                    <label>Name/ Description</label>
                                    <textarea name="name" rows="3" class="form-control" required placeholder="description"
                                        value=<?php echo $row["name"]; ?>></textarea>
                                    <!-- <input type="text" name="name" class="form-control" required placeholder="description" value=> -->
                                </div>
                                <div class="col-md-6">
                                    <label>Gender</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="men"
                                            id="flexRadioDefault1" value=<?php echo $row["gender"]; ?>>
                                        <label class="form-check-label"> Men
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="women"
                                            id="flexRadioDefault2" checked value=<?php echo $row["gender"]; ?>>
                                        <label class="form-check-label">Women
                                        </label>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="bigender"
                                         id="flexRadioDefault3" checked value=<?php echo $row["gender"]; ?>>
                                        <label class="form-check-label">Bigender
                                        </label>
                                    </div>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <label>Category</label>
                                    <select name="category" id="category" class="form-control" required value=<?php echo $row["category"]; ?>>
                                        <option value="bangles">bangles</option>
                                        <option value="earrings">earrings</option>
                                        <option value="chains">chains</option>
                                        <option value="necklaces">necklaces</option>
                                        <option value="rings">rings</option>
                                        <option value="bracelets">bracelets</option>
                                        <option value="pendants">pendants</option>
                                        
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>price</label>
                                    <input type="number" name="price" class="form-control" placeholder="price" required
                                        value=<?php echo $row["price"]; ?>>
                                </div>
                                <div class="col-md-6">
                                    <label>Quantity</label>
                                    <input type="number" name="quantity" class="form-control" required
                                        placeholder="Quantity" value=<?php echo $row["qty"]; ?>>
                                </div>
                                <div class="col-md-12">

                                    <button type="submit" class="btn btn-primary" name="update-silver"> Update</button>
                                </div>
                            </div>
                        </form>

                        <?php
                    }else{
                        echo " product not found ";
                    } ?>
                </div>
            </div>
        </div>

    </din>
</div>








<?php
include "includes/footer.php";
?>