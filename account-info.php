<?php
include "user-includes/connection.php";
include "user-includes/header.php";
session_start();
$username = $_SESSION['auth_user']['username'];
$email = $_SESSION['auth_user']['email'];
$acc_query = "SELECT  * FROM `login-form` WHERE username= '$username' && email= '$email'";
$acc_query_run = mysqli_query($con, $acc_query);


?>
<section class="my-order-sec ">
    <div class="section-heading">
        <p><span><a href="index.php">Home/</a></span><span><a href="#">My Dashboard</a></span></p>
        <h2>My Address</h2>
    </div>
    <div class="orders-container">
        <div class="links-acc">

            <a href="profile.php" class="white"> Account Dashboard </a>
            <a href="account-info.php" class="white">Account Information </a>

            <a href="my-orders.php" class="white">My Orders </a>
            <a href="wishlist.php" class="white"> My Wishlist</a>

        </div>
        <div class="all-orders">
            <?php

            while ($row = mysqli_fetch_array($acc_query_run)) {

                ?>
                <div class="p1 part">
                    <h3>Account Information</h3>
                    <div>
                        <h4>Contact Information</h4>
                        <p><?php echo $row['username']; ?></p>
                        <p><?php echo $row['email']; ?></p>
                        <div class="p-edit">
                            <href=""><span>Edit</span></a>
                            <href=""><span>Change Password</span></a>
                        </div>

                    </div>
                </div>
                <div class="p2 part">
                    <h3>Address Book</h3>
                    <div>
                        <h4>Contact Information</h4>

                        <p><?php echo isset($row['address']) ? $row['address'] : "- not added -"; ?></p>
                        <div class="p-edit"><a href="edit-profile.php"><span>Edit Address</span></a></div>

                    </div>

                </div>


                <!-- --------------------order--------------- -->

                <?php
            }
            ?>

        </div>
    </div>
</section>


<?php include "user-includes/footer.php"; ?>