<?php
@include "user-includes/connection.php";
// @include "user-includes/links.php";
@include "user-includes/header.php";

?>
<?php


$num_per_page = 12;

if(isset($_GET["page"])){
    $page=$_GET["page"];
}else{
    $page=1;
}
$start_form=($page-1)*12;
$query4= "SELECT  * FROM `silver-earrings` LIMIT $start_form,$num_per_page ";
$queryfire4 = mysqli_query($con,$query4);
$num4 = mysqli_num_rows($queryfire4);
?>


<?php
$id = "SELECT `id` FROM `silver-earrings` ORDER BY id";
$id_query= mysqli_query($con,$id);
$row =mysqli_num_rows($id_query);
?>


<section class="gold-earring-sec">
        <div class="earring-content">
            <?php
             @include "user-includes/side-filter2.php";
             ?>
            <div class="earring-products">
                <span> <?php echo $row;?> Items Found</span>
        <!-- --------------start---------- -->
                    <div class="t-content "> 


                     <?php  if($num4>0){
                      while($product = mysqli_fetch_array($queryfire4)){
                      ?>
                            <div class="t-img">
                            <a href="product-detail.php?id=<?php echo $product["id"];?>">
                                <div>
                                    <span class="disc">-<?php echo $product['discount'];?>%</span>
                                    <figure><img src="artificial/<?php echo $product['image'];?>" alt="silver-e"></figure>
                                </div>
                                <div class="text">
                                     <p><?php echo $product['name'];?></p>
                                    <span><?php echo $product['gender'];?> | <?php echo $product['category'];?></span>
                                    <p>Rs. <?php echo $product['price'];?>.00 </p>
                             
                                </div> </a>
                              
                            </div>

                        <?php 
                        }
                        }
                        ?>     
                    </div>
            </div>

             <!-- </div> -->
        </div> 
        <div class="page-no center">
        <?php
          $total_pages= $row/$num_per_page;
         for($i=1; $i <= $total_pages; $i++)
         {   
          echo "<a href='silver-earrings.php?page=".$i."'>".$i."</a>";
        
         }
         ?>
        </div>
      
         
</section>
<?php @include "user-includes/footer.php"?>
   
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="user-includes/action.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



</body>
</html>