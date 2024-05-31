<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <?php
    include "user-includes/connection.php";
    include "admin/includes/functions/myfunction.php";

    if (isset($_GET['order_id'])) {
        $order_id = $_GET['order_id'];
        $user_id = $_SESSION['auth_user']['user_id'];
        $query = "SELECT * FROM `orders` WHERE id ='$order_id'";
        $query_run = mysqli_query($con, $query);

        if (mysqli_num_rows($query_run) < 0) {
            ?>
            <h4>Something went wrong</h4>
            <?php
            die();
        }
    } else {
        ?>
        <h4>Something went wrong</h4>
        <?php
        die();
    }
    $data = mysqli_fetch_array($query_run);
    ?>

    <div id="mycart">

        <?php include "user-includes/header.php"; ?>

        <div class="py-3 " style="background:var(--blue);">
            <div class="container">
                <div class="text-white">
                    <a href="index.php" class="text-white">Home/</a><a href="checkout.php"
                        class="text-white">Checkout</a> <a href="#" class="text-white"> /View order</a>

                </div>
            </div>
        </div>

        <div class="py-5">



            <div class="container">
                <div class="c">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header text-white" style="background:var(--blue); font-size:20px;">
                                    View Order
                                    <a href="my-orders.php" class="btn btn-warning  align-middle float-end"><ion-icon
                                            name="caret-back"></ion-icon>Back </a>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Delivery Details</h4>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <label class="fw-bold">Name</label>
                                                    <div class="border p-1">
                                                        <?php echo $data['username']; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label class="fw-bold">Email</label>
                                                    <div class="border p-1">
                                                        <?php echo $data['email']; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label class="fw-bold">Phone</label>
                                                    <div class="border p-1">
                                                        <?php echo $data['phone']; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label class="fw-bold">Tracking Id</label>
                                                    <div class="border p-1">
                                                        <?php echo $data['tracking_no']; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label class="fw-bold">Address</label>
                                                    <div class="border p-1">
                                                        <?php echo $data['address']; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label class="fw-bold">Pincode</label>
                                                    <div class="border p-1">
                                                        <?php echo $data['pincode']; ?>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-6">
                                            <h4>Order Details</h4>
                                            <hr>
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Price</th>
                                                        <th>Quantity</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    $order_query = "SELECT * FROM `order-products` WHERE order_id= '$order_id' ";
                                                    // $order_query = "SELECT o.id as oid, o.tracking_no, o.user_id,oi.*,p.*FROM orders o, order_products oi,
                                                    //  products p WHERE o.user_id = '$user_id' AND o.tracking_no=  o AND p.id= oi.prod_id  '$tracking_no' AND oi.order_id = '$order_id'";
                                                    $order_query_run = mysqli_query($con, $order_query);
                                                    if (mysqli_num_rows($order_query_run) > 0) {
                                                        foreach ($order_query_run as $item) {
                                                            ?>
                                                            <tr>
                                                                <td class="align-middle">
                                                                    <img src="artificial/<?= $item['image']; ?>" width="65px"
                                                                        alt="dd">
                                                                </td>
                                                                <td class="align-middle">
                                                                    <?= $item['price']; ?>/-
                                                                </td>
                                                                <td class="align-middle">
                                                                    <?= $item['qty']; ?>
                                                                </td>

                                                            </tr>

                                                            <?php
                                                        }
                                                    }
                                                    ?>

                                                </tbody>
                                            </table>

                                            <h4>Total Price : <span class="float-end fw-bold">
                                                    ₹<?= $data['total_price']; ?></span> </h4>
                                            <hr>
                                            <label for="">PAyment Mode</label>
                                            <div class="border p-1 mb-3">
                                              COD
                                            </div>
                                            <label for="">Status</label>
                                            <div class="border p-1 mb-3">
                                                <?php
                                                if($data['status']== 0){
                                                  echo "Under Process" ; 
                                                }else if($data['status']== 1){
                                                    echo "Completed" ; 
                                                }else if($data['status']== 2){
                                                    echo "Cancelled" ; 
                                                }
                                                    ?>
                                        
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
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
    
    <?php include "user-includes/footer.php";?>