<?php
session_start();
include "includes/header.php";
include "includes/functions/myfunctions.php";
include "../middleware/adminmiddleware.php";

?>
<!-- JavaScript -->


<div class="container">
    <din class="row refresh">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-gradient-primary">
                    <h2 class="text-white">Order Detail</h2>
                </div>
                <div class="card-body" id="silver_table">
                    <table class=" table table-bordered ">
                        <thead>
                            <tr>
                                <th>tracking_no</th>
                                <th>user_id</th>
                                <th>username</th>
                              
                                <th>address</th>
                           
                                <th>total_price</th>
                              
                                <th>created_at</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody >

                            <?php include "config/dbcon.php";
                            $data = "SELECT * FROM `orders`";
                            $result = mysqli_query($con, $data);
                            // $row= mysqli_fetch_array($result);
                            // print_r($row);
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>


                                    <td> <?php echo $row['tracking_no']; ?></td>
                                    <td> <?php echo $row['user_id']; ?></td>
                                    <td><?php echo $row['username']; ?><br>
                                 
                                    </td>
                                    <td> <?php echo $row['address']; ?>,
                                        <?php echo $row['landmark']; ?>,
                                        <?php echo $row['state']; ?>,
                                        <?php echo $row['pincode']; ?></td>
                                    </td>
                                
                                    <td><?php echo $row['total_price']; ?>/-</td>
                                   
                                    <td><?php echo $row['created_at']; ?></td>
                                    <td> <a href="view-product.php?order_id=<?= $row['id'];?>" class="btn text-white bg-gradient-primary" >VIEW DETAILS</a></td>

                                </tr>
                                <?php
                            } ?>


                        </tbody>
                    </table>

                </div>

            </div>
        </div>

    </din>
</div>








<?php
include "includes/footer.php";
?>