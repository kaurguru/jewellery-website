<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cart</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    .f-15 {
      font-size: 15px;
    }

    .f-15 h6 {
      font-size: 15px;
    }
  </style>
</head>

<body>
  <?php
  include "user-includes/connection.php";
  include " auth.php";
  // include "authenticate.php";
  
  $order_query = "SELECT  * FROM `carts`";
  $order_query_run = mysqli_query($con, $order_query);
  $order_row = mysqli_num_rows($order_query_run);

  ?>
  <div id="mycart">
    <?php include "user-includes/header.php"; ?>
    <div class="py-3 " style="background:var(--blue);">
      <div class="container">
        <div class="text-white f-15">
          <a href="index.php" class="text-white">Home/</a><a href="cart.php" class="text-white">Cart</a>
        </div>
      </div>
    </div>


    <div class="py-5">

      <div class="container ">
      <?php @include "error-msg.php";?>
        <div class="card card-body mb-2" style=" padding:40px 30px;">

          <din class="row">
            <div class="col-md-12">

              <div class="row align-items-center mb-5 ">
                <div class="col-md-2 f-15">
                  <h6>Product</h6>
                </div>
                <div class="col-md-3 f-15 ">
                  <h6>Name</h6>
                </div>

                <div class="col-md-2 f-15">
                  <h6>Price</h6>
                </div>
                <div class="col-md-2 f-15">
                  <h6>Quantity</h6>
                </div>
                <div class="col-md-2 f-15">
                  <h6>Action</h6>
                </div>
              </div>


              <?php
              if ($order_row > 0) {
                while ($row = mysqli_fetch_array($order_query_run)) {
                  ?>
                  <div class="card shadow-sm mb-3">
                    <div class="row align-items-center">
                      <div class="col-md-2">
                        <img src="artificial/<?php echo $row['image']; ?>" width="50px" alt="product " class="product-img">
                      </div>
                      <div class="col-md-3">
                        <h5><?php echo $row['p_name']; ?></h5>
                      </div>
                      <div class="col-md-2">
                        <h5>₹<?php echo $row['price']; ?></h5>
                      </div>
                      <div class="col-md-2">
                        <div class="input-group mb-3 " style="width:100px">
                          <button class=" input-group-text decrement-btn update_qty" name="update_qty">-</button>
                          <input type="hidden" name="p_id" class="p_id" value="<?php echo $row['prod_id']; ?>">
                          <input type="number" class="form-control bg-white text-center" id="quantity"
                            value="<?php echo $row['qty']; ?>" name="qty" disabled class="input-qty">
                          <button class="input-group-text increment-btn update_qty" name="update_qty">+</button>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <input type="hidden" name="c_id" class="c_id" value="<?php echo $row['id']; ?>">
                        <button class="btn btn-danger btn-sm delete_item"><ion-icon name="trash-sharp"
                            class="me-2"></ion-icon>remove</button>
                      </div>

                    </div>

                  </div>

                  <?php
                } ?>
                <div class="float-end">
                  <a href="checkout.php" class="btn btn-outline-primiry"
                    style="background:var(--blue); color:white; padding:10px"> proceed to checkout</a>
                </div>
                <?php

              } else { ?>

                <div class="row align-items-center text-center shadow"
                  style="border:2px solid grey; padding:20px;margin:10px; color:red; font-size: 20px;">
                  <span>Your Cart is Empty...</span>
                </div>
                <?php
              } ?>


            </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- </section> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <?php include "user-includes/footer.php"; ?>