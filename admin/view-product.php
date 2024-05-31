<?php
session_start();
include "config/dbcon.php";
include "includes/header.php";
include "includes/functions/myfunctions.php";
include "../middleware/adminmiddleware.php";

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

<div class="py-5">
    <div class="container">
        <div class="c">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-white bg-gradient-primary">
                            View Order
                            <a href="list-orders.php" class="btn btn-warning  align-middle float-end"><ion-icon
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
                                                            <img src="../artificial/<?= $item['image']; ?>" width="65px"
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

                                    <h5>Total Price : <span class="float-end fw-bold">
                                            ₹<?= $data['total_price']; ?></span> </h5>
                                    <hr>
                                    <label for="">PAyment Mode</label>
                                    <div class="border p-1 mb-3">
                                        COD
                                    </div>
                                    <label for="">Status</label>
                                    <div class="mb-3">
                                        <form action="process.php" method="POST">
                                            <input type="hidden" name="order_id" value="<?= $data['id'];?>">
                                            <select name="order_status" class="form-select">
                                                <option value="0" <?= $data['status'] == 0 ? "selected" : "" ?>> Under Process
                                                </option>
                                                <option value="1" <?= $data['status'] == 1 ? "selected" : "" ?>> Completed
                                                </option>
                                                <option value="2" <?= $data['status'] == 2 ? "selected" : "" ?>> Cancelled
                                                </option>
                                                <option value="2"></option>
                                            </select>
                                            <button type="submit" name="update_order_btn"
                                                class="btn btn-primary mt-2">Update Status</button>
                                        </form>
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







<?php
include "includes/footer.php";
?>