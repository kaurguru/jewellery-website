<?php
session_start();
include "includes/header.php";
include "includes/functions/myfunctions.php";
include "../middleware/adminmiddleware.php";

?>
<!-- JavaScript -->


<div class="container">
    <din class="row refresh" >
        <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                <h2>Registered Accounts</h2>
                </div>
                <div class="card-body" id="products_table">
                    <table class=" table table-bordered">
                        <thead>
                            <tr>
                                <th>User Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Code no.</th>
                                <th>Created At</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                          
                            <?php include "config/dbcon.php";
                               $data = "SELECT * FROM `login-form`";
                               $result =mysqli_query($con,$data);
                               // $row= mysqli_fetch_array($result);
                               // print_r($row);
                               while(  $row= mysqli_fetch_array($result)){
                           ?>
                            <tr>
                               <td> <?php echo $row['id']; ?></td>
                               <td><?php echo $row['username'];  ?></td>
                               <td><?php echo $row['email'];  ?></td>
                               <td><?php echo $row['password'];  ?></td>
                               <td><?php echo $row['role-as'];  ?></td>
                               <td><?php echo $row['date-time'];  ?></td>
                               
    
                
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