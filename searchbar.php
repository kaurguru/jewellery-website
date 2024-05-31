<?php session_start();
@include "user-includes/connection.php";
@include "user-includes/header.php";



//$query4= "SELECT  `discount`, `image`, `name`, `gender`, `category`, `price`,`karat` FROM `Gold-earrings` order by id ASC";
//$queryfire4 = mysqli_query($con,$query4);
//$num4 = mysqli_num_rows($queryfire4);
$num_per_page = 12;

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}
$start_form = ($page - 1) * 12;
$query4 = "SELECT  * FROM `Gold-earrings` LIMIT $start_form,$num_per_page ";
$queryfire4 = mysqli_query($con, $query4);
$num4 = mysqli_num_rows($queryfire4);
?>




<section class="gold-earring-sec">
    <div class="earring-content">
        <?php
        @include "user-includes/side-filter.php";
        ?>
        <div class="earring-products">
            <span> <?php echo $row; ?> Items Found</span>
            <!-- --------------start---------- -->

            <?php
            $id = "SELECT `id` FROM `Gold-earrings` ORDER BY id";
            $id_query = mysqli_query($con, $id);
            $row = mysqli_num_rows($id_query);
            ?>

            <div class="t-content ">
                <?php
                if (isset($_POST['search_btn'])) {
                    $search_value = $_POST['search_value'];
                    $query = "SELECT  * FROM  `Gold-earrings`  WHERE CONCAT(name,gender,category,price,karat) LIKE '%$search_value%' ";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        while ($product = mysqli_fetch_assoc($query_run)) {
                            ?>

                            <div class="t-img">
                                <a href="gold-product-detail.php?id=<?php echo $product["id"]; ?>">
                                    <div>
                                        <span class="disc">-<?php echo $product['discount']; ?>%</span>
                                        <figure><img src="artificial/<?php echo $product['image']; ?>" alt="gold-e"></figure>
                                    </div>
                                    <div class="text">
                                        <p><?php echo $product['karat']; ?>KT <?php echo $product['name']; ?></p>
                                        <span><?php echo $product['gender']; ?> | <?php echo $product['category']; ?></span>
                                        <p>Rs. <?php echo $product['price']; ?>.00 </p>

                                    </div>
                                </a>
                            </div>
                            <?php
                        }
                    
                }else{
                    ?>

                    <div class="msg ">
                        <h3 style="font-size:30px; color:red; border:1px solid black; padding:10px;">No Result found</h3>
                    </div>

                    <?php
                } }?>

            </div>

        </div>

    </div>


</section>
<?php @include "user-includes/footer.php"; ?>