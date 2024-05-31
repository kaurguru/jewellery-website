<?php
include "user-includes/connection.php";
include "user-includes/header.php";
session_start();
$username = $_SESSION['auth_user']['username'];
$email = $_SESSION['auth_user']['email'];
// $acc_query = "SELECT  * FROM `wishlist` WHERE username= '$username' && email= '$email'";
// $acc_query_run = mysqli_query($con, $acc_query);

$query4 = "SELECT  * FROM `Gold-earrings` WHERE wishlist='2'";
$queryfire4 = mysqli_query($con, $query4);
$num4 = mysqli_num_rows($queryfire4);

$query3 = "SELECT  * FROM `artificial` WHERE wishlist='2'";
$queryfire3 = mysqli_query($con, $query3);
$num3 = mysqli_num_rows($queryfire3);

$query2 = "SELECT  * FROM `silver-earrings` WHERE wishlist='2'";
$queryfire2 = mysqli_query($con, $query2);
$num2 = mysqli_num_rows($queryfire2);

?>
<section class="my-order-sec ">
    <div class="section-heading">
        <p><span><a href="index.php">Home/</a></span><span><a href="#">My Wishlist</a></span></p>
        <h2>My Wishlist</h2>
    </div>
    <div class="orders-container">
        <div class="links-acc">

            <a href="profile.php" class="white"> Account Dashboard </a>
            <a href="account-info.php" class="white">Account Information </a>

            <a href="my-orders.php" class="white">My Orders </a>
            <a href="wishlist.php" class="white"> My Wishlist</a>

        </div>
        <div class="all-orders">

            <div class="t-content ">
                <?php if ($num4 > 0) {
                    while ($product = mysqli_fetch_array($queryfire4)) {
                        ?>
                        <div class="t-img">
                            <a href="gold-product-detail.php?id=<?php echo $product["id"]; ?>">
                                <div>
                                    <span class="disc">-<?php echo $product['discount']; ?>%</span>
                                    <figure><img src="artificial/<?php echo $product['image']; ?>" alt="gold-e"></figure>
                                </div>
                                <div class="text">
                                    <p><?php echo $product['karat']; ?>KT <?php echo $product['type']; ?> |
                                        <?php echo $product['name']; ?></p>
                                    <span><?php echo $product['gender']; ?> | <?php echo $product['category']; ?></span>
                                    <p>Rs. <?php echo $product['price']; ?>.00 </p>
                                </div>
                            </a>

                            <form action="admin/process.php" method="POST">
                                <input type="hidden" name="type" class="type" value="<?php echo $product["type"]; ?>">
                                <input type="hidden" name="id" class="id" value="<?php echo $product["id"]; ?>">
                                <button class="remove" type="submit" name="remove-wishlist"><ion-icon name="trash-outline" id="i"></ion-icon>
                               </button>
                            </form>
                        </div>

                        <?php
                    }
                }
                ?>
            </div>
            <div class="t-content ">
                <?php if ($num3 > 0) {
                    while ($product3 = mysqli_fetch_array($queryfire3)) {
                        ?>
                        <div class="t-img">
                            <a href="artificial-product-detail.php?id=<?php echo $product3["id"]; ?>">
                                <div>
                                    <span class="disc">-<?php echo $product3['discount']; ?>%</span>
                                    <figure><img src="artificial/<?php echo $product3['image']; ?>" alt="gold-e"></figure>
                                </div>
                                <div class="text">
                                    <p><?php echo $product3['type']; ?> | <?php echo $product3['name']; ?></p>
                                    <span><?php echo $product3['gender']; ?> | <?php echo $product3['category']; ?></span>
                                    <p>Rs. <?php echo $product3['price']; ?>.00 </p>

                                </div>
                            </a>
                            <form action="admin/process.php" method="POST">
                                <input type="hidden" name="type" class="type" value="<?php echo $product3["type"]; ?>">
                                <input type="hidden" name="id" class="id" value="<?php echo $product3["id"]; ?>">
                               <button class="remove" type="submit" name="remove-wishlist"><ion-icon name="trash-outline" id="i"></ion-icon>
                               </button>
                            </form>
                        </div>

                        <?php
                    }
                }
                ?>
            </div>
            <div class="t-content ">
                <?php if ($num2 > 0) {
                    while ($product2 = mysqli_fetch_array($queryfire2)) {
                        ?>
                        <div class="t-img">
                            <a href="product-detail.php?id=<?php echo $product2["id"]; ?>">
                                <div>
                                    <span class="disc">-<?php echo $product2['discount']; ?>%</span>
                                    <figure><img src="artificial/<?php echo $product2['image']; ?>" alt="gold-e"></figure>

                                </div>
                                <div class="text">
                                    <p><?php echo $product2['type']; ?> | <?php echo $product2['name']; ?></p>
                                    <span><?php echo $product2['gender']; ?> | <?php echo $product2['category']; ?></span>
                                    <p>Rs. <?php echo $product2['price']; ?>.00 </p>

                                </div>
                            </a>
                            <form action="admin/process.php" method="POST">
                                <input type="hidden" name="type" class="type" value="<?php echo $product2["type"]; ?>">
                                <input type="hidden" name="id" class="id" value="<?php echo $product2["id"]; ?>">
                                <button class="remove" type="submit" name="remove-wishlist"><ion-icon name="trash-outline" id="i"></ion-icon>
                               </button>
                            </form>
                        </div>

                        <?php
                    }
                }
                ?>
            </div>

        </div>
    </div>
</section>


<?php include "user-includes/footer.php"; ?>