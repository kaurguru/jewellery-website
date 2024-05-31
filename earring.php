<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Earrings</title>
    <!-- <link href="https://forms.visme.co/formsPlayer/90xz1qdg-simple-report-download"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap">
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="styling.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
<?php 
 session_start();
 @include "user-includes/connection.php";
@include "user-includes/header.php";


 //$query4= "SELECT  `discount`, `image`, `name`, `gender`, `category`, `price`,`karat` FROM `Gold-earrings` order by id ASC";
 //$queryfire4 = mysqli_query($con,$query4);
 //$num4 = mysqli_num_rows($queryfire4);
$num_per_page = 12;

if(isset($_GET["page"])){
    $page=$_GET["page"];
}else{
    $page=1;
}
$start_form=($page-1)*12;
$query4= "SELECT  * FROM `Gold-earrings` LIMIT $start_form,$num_per_page ";
$queryfire4 = mysqli_query($con,$query4);
$num4 = mysqli_num_rows($queryfire4);
?>


<?php
$id = "SELECT `id` FROM `Gold-earrings` ORDER BY id";
$id_query= mysqli_query($con,$id);
$row =mysqli_num_rows($id_query);
?>


<section class="gold-earring-sec">
        <div class="earring-content">
            <?php
             @include "user-includes/side-filter.php";
             ?>
            <div class="earring-products">
                <span> <?php echo $row;?> Items Found</span>
        <!-- --------------start---------- -->
                    <div class="t-content "> 

                     <?php  if($num4>0){
                      while($product = mysqli_fetch_array($queryfire4)){
                      ?>
                            <div class="t-img">
                            <a href="gold-product-detail.php?id=<?php echo $product["id"];?>">
                                <div>
                                    <span class="disc">-<?php echo $product['discount'];?>%</span>
                                    <figure><img src="artificial/<?php echo $product['image'];?>" alt="gold-e"></figure>
                                </div>
                                <div class="text">
                                     <p><?php echo $product['karat'];?>KT <?php echo $product['name'];?></p>
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

        </div> 
        <div class="page-no center">
        <?php
          $total_pages= ceil($row/$num_per_page);
         for($i=1; $i <= $total_pages; $i++)
         {   
            echo "<a href='earring.php?page=".$i."'>".$i."</a>";
            
         }
        ?>
        </div>
      
</section>
<?php @include "user-includes/footer.php"?>
   
  
</body>
</html>