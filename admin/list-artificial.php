<?php
session_start();
include "includes/header.php";
include "includes/functions/myfunctions.php";
include "../middleware/adminmiddleware.php";

?>
<!-- JavaScript -->


<div class="container">
    <din class="row refresh"  >
        <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                <h2>Artificial Products</h2>
                </div>
                <div class="card-body" id="artificial_table">
                    <table class=" table table-bordered">
                        <thead>
                            <tr>
                                <th>Discount</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            <?php include "config/dbcon.php";
                               $data = "SELECT * FROM `artificial`";
                               $result = mysqli_query($con,$data);
                               // $row= mysqli_fetch_array($result);
                               // print_r($row);
                               while(  $row= mysqli_fetch_array($result)){
                           ?>
                            <tr>
                               <td> <?php echo $row['discount']; ?>%</td>
                               <td> <img src="../artificial/<?php echo $row['image']; ?>" width="50px" alt="product " class="product-img"></td>
                               <td><?php echo $row['name'];  ?></td>
                               <td><?php echo $row['gender'];  ?></td>
                               <td><?php echo $row['category'];  ?></td>
                               <td><?php echo $row['price'];  ?></td>
                               <td><?php echo $row['qty']; ?></td>
                               <td>
                                    <a href="edit3.php?id=<?php echo $row["id"];?> "class="btn-edit"><ion-icon name="create" id="i" ></ion-icon></a>
                               </td>
                                <td>
                                    <!-- <form action="process.php" method="POST"> -->
                                    <!-- <input type="hidden" name= "id" value="> -->
                                    <button type ="button" class="remove-bg delete-artificial" name=" delete-artificial" value="<?php echo $row["id"];?>">  <ion-icon name= "trash" id="i"></ion-icon></button> 
                                    <!-- </form> -->
                                </td>
                            </tr>
                               <?php
                               }?>


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