<?php
include "user-includes/connection.php";
include "user-includes/header.php";

include " auth.php";
?>
<?php
$username = $_SESSION['auth_user']['username'];
$email = $_SESSION['auth_user']['email'];
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
            <a href="#" class="white">Account Information </a>
            <a href="#" class="white"> Address Book </a>
            <a href="my-orders.php" class="white">My Orders </a>
            <a href="#" class="white"> My Wishlist</a>

        </div>
        <div class="all-orders edit-sec">
            <h3>Edit Profile Details</h3>
            <?php @include "error-msg.php"; ?>
            <?php @include "error-msg.php"; ?>
            <?php
            while ($row = mysqli_fetch_array($acc_query_run)) {

                ?>
                <!-- --------------------pf--------------- -->
                <form action="admin/process.php" method="POST">
                    <div class="my-input">
                        <label>Name</label>
                        <input type="text" name="name" value="<?php echo $row['username']; ?>" disabled>
                    </div>
                    <div class="my-input">
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $row['email']; ?>" disabled>
                    </div>
                    <div class="my-input">
                        <label>Mobile Number</label>
                        <input type="tel" name="mobile" pattern="[0-9]{10}" minlength="10" maxlength="10"
                            placeholder="Enter Mobile no." value="<?php echo $row['mobile']; ?>">
                    </div>
                    <div class="my-input">
                        <label>Gender</label>
                        <select name="gender" value="<?php echo $row['dob']; ?>">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="my-input">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" value="<?php echo $row['dob']; ?>">
                    </div>
                    <div class="my-input">
                        <label>Address</label>
                        <input type="text" name="address" value="<?php echo $row['address']; ?>" placeholder=" Enter your full Address">
                    </div>
                    <input type="hidden" name="id" value="<?= $_SESSION['auth_user']['user_id']; ?>">
                    <?php } ?>
                    <div class="c-btn">
                        <!-- <a href="" type="button" name="save-profile-detail" class="common-btn">SAVE DETAILS</a> -->
                        <button name="save-profile-detail" class="common-btn">SAVE DETAILS</button>
                    </div>
                </form>
           
        </div>
    </div>
</section>


<?php include "user-includes/footer.php"; ?>