<?php
include "user-includes/connection.php";
include "user-includes/header.php"; ?>

<?php

include " auth.php";


$order_query = "SELECT  * FROM `carts`";
$order_query_run = mysqli_query($con, $order_query);
$order_row = mysqli_num_rows($order_query_run);
?>
<section class="my-order-sec ">
  <div class="section-heading">
    <p><span><a href="index.php">Home/</a></span><span><a href="#">My Dashboard</a></span></p>
    <h2>My Orders</h2>
  </div>
  <div class="orders-container">
    <div class="links-acc">

      <a href="profile.php" class="white"> Account Dashboard </a>
      <a href="account-info.php" class="white">Account Information </a>
      <a href="my-orders.php" class="white">My Orders </a>
      <a href="wishlist.php" class="white"> My Wishlist</a>

    </div>
    <div class="all-orders">
      <h3>All orders</h3>
      <?php include "config/dbcon.php";
      $data = "SELECT * FROM `order-products`";
      $result = mysqli_query($con, $data);


      // $data2 = "SELECT * FROM `orders`";
      // $result2 = mysqli_query($con, $data2);
      // while($row2 = mysqli_fetch_array($result2)){
      while ($row = mysqli_fetch_array($result)) {
      
        ?>
        <?php
     
        $created_at = $row['created_at']; // Assuming $row['created_at'] contains the timestamp
      
        // Convert timestamp to Unix timestamp and format date and time separately
  
        $formatted_date = date("D, d M Y", strtotime($created_at));
        $formatted_time = date("H:i:s", strtotime($created_at));


        ?>


        <!-- --------------------order--------------- -->
        <div class="order-box">
          <p><ion-icon name="cube-outline"></ion-icon>Ordered</p>
          <span>on <?php echo $formatted_date; ?></span>
          <span> /At <?php echo $formatted_time; ?></span>
          <div class="order-content">
            <div>
              <img src="artificial/<?php echo $row['image']; ?>" alt="dd" width="65px">

            </div>
            <div class="order-text">
              <p>Out of Delivery</p>
             <?php
              ?>
                <p>Tracking id:<?php echo $row2['tracking_no']; ?></p>
                <?php
             
                ?>

              <p>Cash on delivery</p>
              <p>Type: <?php echo $row['type'];?></p>
            </div>
            <a href="view-detail.php?order_id=<?= $row['order_id'];?>"><ion-icon class="side-arrow" name="chevron-forward-outline"></ion-icon></a>

          </div>
          <?php
          $created_at = $row['created_at']; // Assuming $row['created_at'] contains the timestamp
        
          // Convert timestamp to Unix timestamp, add 10 days, and format the extended date
          $extended_date = date("D, d M Y", strtotime($created_at . " +10 days"));

          // echo "Extended and Formatted Date: " . $extended_date; // Output the extended and formatted date
          ?>


          <span>Exchange/Return Window  on <?php echo $extended_date; ?></span>

        </div>

      <?php
      }   
    ?>

    </div>
  </div>
</section>


<?php include "user-includes/footer.php"; ?>