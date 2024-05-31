<?php
include "user-includes/connection.php";
include "user-includes/header.php";
// include " auth.php";
session_start();
?>

<?php
$username= $_SESSION['auth_user']['username']; 
$email= $_SESSION['auth_user']['email']; 
$acc_query = "SELECT  * FROM `login-form` WHERE username= '$username' && email= '$email'";
$acc_query_run = mysqli_query($con, $acc_query);


?>
<section class="my-order-sec ">
    <div class="section-heading">
        <p><span><a href="index.php">Home/</a></span><span><a href="#">My Dashboard</a></span></p>
        <h2>My Dashboard</h2>
    </div>
    <div class="orders-container">
        <div class="links-acc">

            <a href="profile.php" class="white"> Account Dashboard </a>
            <a href="account-info.php" class="white">Account Information </a>
            
            <a href="my-orders.php" class="white">My Orders </a>
            <a href="my-wishlist.php" class="white"> My Wishlist</a>

        </div>
        <div class="all-orders">
            <h3>Profile Details</h3>
            <?php @include "error-msg.php";?>
            <?php
            while ($row = mysqli_fetch_array($acc_query_run)) {
      
      ?>
            <!-- --------------------pf--------------- -->
            <table>
                <tr>
                    <td>full name</td>
                    <td><?php echo $row['username']; ?></td>
                </tr>
                <tr>
                    <td>mobile</td>
                    <td><?php echo isset($row['mobile']) ? $row['mobile'] : "- not added -"; ?></td>                    </td>

                </tr>
                <tr>
                    <td>email id</td>
                    <td><?php echo isset($row['email']) ? $row['email'] : "- not added -"; ?></td>

                </tr>
                <tr>
                    <td>gender</td>
                    <td><?php echo isset($row['gender']) ? $row['gender'] : "- not added -"; ?></td>
                    </td>

                </tr>
                <tr>
                    <td>date of birth</td>
                    <td><?php echo isset($row['dob']) ? $row['dob'] : "- not added -"; ?></td>                    </td>
                </tr>
                <tr>
                    <td>location</td>
                    <td><?php echo isset($row['address']) ? $row['address'] : "- not added -"; ?></td>                    </td>

                </tr>

            </table>

            <?php } ?>
            <div class="c-btn">
                <a href="edit-profile.php" type="button" class="common-btn">Edit</a>
            </div>


        </div>
    </div>
</section>


<?php include "user-includes/footer.php"; ?>