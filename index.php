<?php
session_start();
include "user-includes/connection.php";
// $query = "SELECT * FROM `silver-earrings` order by id ASC";
$query = "SELECT * FROM `silver-earrings` order by date DESC LIMIT 5 ";
$queryfire = mysqli_query($con, $query);
$num = mysqli_num_rows($queryfire);


$query1 = "SELECT * FROM `Gold-earrings` order by date DESC LIMIT 5 ";
$queryfire1 = mysqli_query($con, $query1);
$num1 = mysqli_num_rows($queryfire1);

$query2 = "SELECT  `picture`, `message`, `name` FROM `review-form` order by id ASC";
$queryfire2 = mysqli_query($con, $query2);
$num2 = mysqli_num_rows($queryfire2);

?>
   <?php @include "error-msg.php";?>

<?php
@include "user-includes/header.php"; ?>
<!-- ----------------swiper section------------------
    ---------------------------------------------- -->
<section class="main_sec">

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="swiper-img">
                    <figure><img src="swiper/Frame 888.png" alt="1" class="frame"></figure>
                </div>

            </div>
            <!-- ----section end----- -->
            <div class="swiper-slide">
                <div class="swiper-img">
                    <figure><img src="swiper/img (1).png" alt="1" class="frame"></figure>
                </div>
            </div>
            <!-- ----section end----- -->
            <div class="swiper-slide">
                <div class="swiper-img">
                    <figure><img src="swiper/img (6).png" alt="1" class="frame"></figure>
                </div>
            </div>
            <!-- ----section end----- -->
            <div class="swiper-slide">
                <div class="swiper-img">
                    <figure><img src="swiper/img (3).png" alt="1" class="frame"></figure>
                </div>
            </div>
            <!-- ----section end----- -->
            <div class="swiper-slide">
                <div class="swiper-img">
                    <figure><img src="swiper/img (4).png" alt="1" class="frame"></figure>
                </div>
            </div>


            <!-- ----section end----- -->
            <div class="swiper-slide">
                <div class="swiper-img">
                    <figure><img src="swiper/img (5).png" alt="1" class="frame"></figure>
                </div>
            </div>
            <!-- ----section end----- -->
        </div>

        <div class="swiper-pagination"></div>
    </div>
</SECTION>
<!-- ----------------iITEMS SECTION------------------
    ---------------------------------- ------------------>
<section class="item_sec">
    <div class="items">
        <div class="odd_img"><img src="frame/Frame 1.png" alt="1">
            <h3>Bangles</h3>
        </div>
        <div class="even_img"><img src="frame/Frame 2.png" alt="2">
            <h3>Chains</h3>
        </div>
        <div class="odd_img"><img src="frame/Frame 3.png" alt="3">
            <h3>Earrings</h3>
        </div>
        <div class="even_img"><img src="frame/Frame 4.png" alt="4">
            <h3>Neckwears</h3>
        </div>
        <div class="odd_img"> <img src="frame/Frame 5.png" alt="5">
            <h3>Pendants</h3>
        </div>
        <div class="even_img"> <img src="frame/Frame 6.png" alt="6">
            <h3>Rings</h3>
        </div>
    </div>
</section>
<!-- ----------------TRENDING SECTION------------------
    ---------------------------------- ------------------>
<section class="trending-sec">
    <div>
        <h3>Trending Now</h3>
    </div>

    <div class="t-content">

        <?php if ($num > 0) {
            while ($product = mysqli_fetch_array($queryfire)) {
                ?>
                <div class="t-img">
                    <a href="product-detail.php?id=<?php echo $product["id"]; ?>">
                        <div>
                            <span class="disc">-<?php echo $product['discount']; ?>%</span>
                            <figure><img src="artificial/<?php echo $product['image']; ?>" alt="trending"></figure>
                        </div>
                        <div class="text">
                            <p><?php echo $product['name']; ?></p>
                            <span><?php echo $product['gender']; ?> | <?php echo $product['category']; ?></span>
                            <p>Rs. <?php echo $product['price']; ?>.00 </p>
                        </div>
                    </a>
                </div>
                <?php
            }
        }
        ?>
    </div>


</section>
<!-- ----------------BLUE BORDER SECTION------------------
    ---------------------------------- ------------------>
<section class="blue-sec">
    <div class="boxes center">
        <div class="div">
            <svg width="40" height="38" viewBox="0 0 40 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M3.90625 21.4348C3.47503 21.4348 3.125 21.785 3.125 22.2161C3.125 22.6473 3.47503 22.9973 3.90625 22.9973C4.33747 22.9973 4.6875 22.6473 4.6875 22.2161C4.6875 21.785 4.33747 21.4348 3.90625 21.4348Z"
                    fill="white" />
                <path
                    d="M35.9077 24.144L28.5425 26.676C28.5752 26.4946 28.5935 26.3098 28.5935 26.1221C28.5935 24.399 27.1918 22.9971 25.4685 22.9971H20.4093C20.275 22.9971 20.1425 22.9626 20.0257 22.8966L15.8982 20.5751C15.0821 20.1153 14.1547 19.8721 13.2163 19.8721H7.67793C7.35567 18.963 6.48713 18.3098 5.46877 18.3098H0.781252C0.349732 18.3098 0 18.6596 0 19.0911V33.1533C0 33.5848 0.349732 33.9346 0.781252 33.9346H5.46877C6.46393 33.9346 7.31722 33.3093 7.65597 32.431C8.54036 32.5408 9.56362 32.8025 10.2066 33.1881L14.2923 35.6396C15.8402 36.5686 17.6123 37.0596 19.4178 37.0596C20.8485 37.0596 22.2345 36.7593 23.538 36.1673L38.1195 29.7466C39.7345 29.0915 40.532 27.1538 39.6088 25.4461C38.9298 24.1895 37.3395 23.6303 35.9077 24.144ZM6.25002 31.5945C6.24818 32.0236 5.89815 32.3721 5.46877 32.3721H1.5625V19.8723H5.46877C5.89937 19.8723 6.25002 20.2226 6.25002 20.6536V31.5945ZM37.526 28.3016C37.5178 28.3046 37.5095 28.3083 37.5013 28.3116L22.8952 34.743C21.7952 35.2435 20.625 35.4971 19.4178 35.4971C17.8955 35.4971 16.4014 35.0833 15.0965 34.3L11.0104 31.8485C10.1358 31.3238 8.88338 31.004 7.81252 30.8758V21.4348H13.2163C13.8864 21.4348 14.5487 21.6081 15.1319 21.937L19.2593 24.2583C19.6092 24.4555 20.007 24.5598 20.4093 24.5598H25.4685C26.33 24.5598 27.031 25.2606 27.031 26.1223C27.031 26.9808 26.3297 27.6848 25.4685 27.6848H17.5267C17.095 27.6848 16.7453 28.0346 16.7453 28.4661C16.7453 28.8973 17.095 29.2471 17.5267 29.2471H25.4685C25.9808 29.2471 26.4853 29.1198 26.933 28.8811C26.933 28.8811 36.4287 25.617 36.4323 25.6158C37.1323 25.3631 37.924 25.6146 38.2343 26.189C38.6997 27.0498 38.3148 27.9858 37.526 28.3016Z"
                    fill="white" />
                <path
                    d="M22.7512 19.9027C22.8982 20.03 23.0804 20.0935 23.2629 20.0935C23.4454 20.0935 23.6279 20.03 23.7747 19.9027C30.1489 14.3784 34.0919 11.5827 34.0919 7.23823C34.0919 3.80133 31.6587 0.953125 28.2404 0.953125C25.9956 0.953125 24.2764 2.24706 23.1692 4.18891C22.0646 2.25134 20.3472 0.953125 18.0991 0.953125C15.4822 0.953125 13.2944 2.64898 12.5253 5.27319C12.4039 5.68733 12.6413 6.12128 13.0554 6.24274C13.4696 6.36419 13.9035 6.12678 14.0247 5.71264C14.5938 3.77051 16.1929 2.51563 18.0991 2.51563C20.3277 2.51563 21.8912 4.49469 22.4164 6.33734C22.5101 6.67579 22.8184 6.91016 23.1692 6.91016C23.5206 6.91016 23.8284 6.67579 23.9221 6.33734C23.9329 6.29919 25.0181 2.51563 28.2404 2.51563C30.6854 2.51563 32.5294 4.54566 32.5294 7.23823C32.5294 10.7136 29.1321 13.2191 23.2624 18.2802C19.6861 15.2088 16.8451 13.0469 15.2304 10.9321C14.9686 10.5891 14.4785 10.5231 14.1354 10.785C13.7924 11.0468 13.7268 11.5369 13.9884 11.8803C15.8084 14.264 18.8809 16.548 22.7512 19.9027Z"
                    fill="white" />
                <path
                    d="M13.2031 7.84131C12.7719 7.84131 12.4219 8.19134 12.4219 8.62254C12.4219 9.05376 12.7719 9.40379 13.2031 9.40379C13.6343 9.40379 13.9844 9.05376 13.9844 8.62254C13.9844 8.19134 13.6343 7.84131 13.2031 7.84131Z"
                    fill="white" />
            </svg>
            <p>Support Independent Brands</p>
        </div>
        <div class="div">
            <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_69_18" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="39"
                    height="39">
                    <path d="M38.7879 0H0V38.7879H38.7879V0Z" fill="white" />
                </mask>
                <g mask="url(#mask0_69_18)">
                    <path
                        d="M26.6667 32.3233H2.14303C0.961616 32.3233 0 31.3617 0 30.1803V10.5051C0 10.059 0.36202 9.69702 0.808081 9.69702H31.5152C31.9612 9.69702 32.3232 10.059 32.3232 10.5051V16.9697C32.3232 17.4158 31.9612 17.7778 31.5152 17.7778C31.0691 17.7778 30.7071 17.4158 30.7071 16.9697V11.3132H1.61616V30.1803C1.61616 30.4712 1.85212 30.7071 2.14303 30.7071H26.6667C27.1127 30.7071 27.4747 31.0691 27.4747 31.5152C27.4747 31.9613 27.1127 32.3233 26.6667 32.3233Z"
                        fill="white" />
                    <path
                        d="M31.5152 11.3131C31.2307 11.3131 30.9543 11.1628 30.8073 10.8945L25.9265 2.03475C25.7859 1.77616 25.5143 1.61616 25.2186 1.61616H7.10463C6.80887 1.61616 6.53736 1.77616 6.39675 2.03475L1.51595 10.8945C1.301 11.2873 0.806455 11.4246 0.418576 11.2129C0.0274644 10.998 -0.114758 10.505 0.100192 10.1156L4.98099 1.25576C5.40604 0.48 6.22059 0 7.10463 0H25.2202C26.1042 0 26.9188 0.48 27.3438 1.25414L32.223 10.1139C32.4396 10.505 32.2974 10.9964 31.9063 11.2113C31.7818 11.2808 31.6477 11.3131 31.5152 11.3131Z"
                        fill="white" />
                    <path
                        d="M16.1616 11.3131C15.7155 11.3131 15.3535 10.9511 15.3535 10.505V0.808081C15.3535 0.36202 15.7155 0 16.1616 0C16.6077 0 16.9697 0.36202 16.9697 0.808081V10.505C16.9697 10.9511 16.6077 11.3131 16.1616 11.3131Z"
                        fill="white" />
                    <path
                        d="M37.9798 38.7879C37.5337 38.7879 37.1717 38.4259 37.1717 37.9798V34.7475C37.1717 29.8457 33.183 25.8586 28.2828 25.8586H25.0505C24.6045 25.8586 24.2424 25.4966 24.2424 25.0505C24.2424 24.6045 24.6045 24.2424 25.0505 24.2424H28.2828C34.0752 24.2424 38.7879 28.9552 38.7879 34.7475V37.9798C38.7879 38.4259 38.4259 38.7879 37.9798 38.7879Z"
                        fill="white" />
                    <path
                        d="M30.7071 30.706C30.5212 30.706 30.3337 30.6414 30.1818 30.5105L24.5253 25.662C24.3443 25.5101 24.2424 25.2854 24.2424 25.0495C24.2424 24.8135 24.3443 24.5889 24.5253 24.437L30.1818 19.5885C30.5196 19.2992 31.0271 19.3363 31.3212 19.6757C31.6121 20.0135 31.5717 20.5242 31.2323 20.8151L26.2933 25.0495L31.2339 29.2854C31.5733 29.5764 31.6121 30.0854 31.3228 30.4248C31.1596 30.6107 30.935 30.706 30.7071 30.706Z"
                        fill="white" />
                </g>
            </svg>
            <p>Free Returns and Exchanges</p>

        </div>
        <div class="div">
            <svg width="32" height="40" viewBox="0 0 32 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M31.5395 8.09891L16.5057 0.0881401C16.2827 -0.0308937 16.0154 -0.029223 15.794 0.0923167L1.17629 8.10309C0.936556 8.23464 0.787872 8.48608 0.787872 8.75964V19.2237C0.796639 27.8255 5.89296 35.6074 13.7742 39.0535L15.8032 39.9377C15.9929 40.0204 16.2089 40.0209 16.3989 39.9385L18.6852 38.9512C26.7125 35.5799 31.935 27.7229 31.9359 19.0162V8.75964C31.9359 8.48316 31.7834 8.22881 31.5395 8.09891ZM30.439 19.0162C30.4374 27.1225 25.5737 34.4372 18.0992 37.5742L18.0942 37.5767L16.1032 38.4362L14.3732 37.6815C7.03693 34.4739 2.29271 27.2307 2.28436 19.2237V9.20279L16.1587 1.59882L30.439 9.20823V19.0162Z"
                    fill="white" />
                <path
                    d="M10.641 18.7421C10.3724 18.4276 9.90005 18.3904 9.58555 18.6589C9.27105 18.9271 9.23389 19.3999 9.50244 19.7141L13.456 24.3438C13.72 24.6529 14.1823 24.6951 14.4972 24.4386L23.705 16.9474C24.0258 16.6868 24.0742 16.2153 23.8132 15.8945C23.5525 15.5741 23.081 15.5253 22.7603 15.7863L14.1197 22.8156L10.641 18.7421Z"
                    fill="white" />
            </svg>


            <p>Secure and trusted platiform</p>
        </div>
        <div class="div">
            <svg width="36" height="39" viewBox="0 0 36 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0.935867 1H3.91478C5.76377 1 7.21898 2.69091 7.0649 4.63636L5.64393 22.7455C5.58844 23.447 5.67078 24.1532 5.88572 24.8192C6.10066 25.4852 6.44352 26.0965 6.89257 26.6144C7.34162 27.1323 7.88707 27.5456 8.49436 27.8279C9.10165 28.1102 9.75754 28.2555 10.4205 28.2545H28.6535C31.1188 28.2545 33.2759 26.1091 33.4643 23.5091L34.3888 9.87273C34.5942 6.85455 32.4371 4.4 29.578 4.4H7.47579M12.92 11.9091H33.4643M25.3322 37.3636C25.8997 37.3636 26.4441 37.1242 26.8454 36.698C27.2467 36.2718 27.4722 35.6937 27.4722 35.0909C27.4722 34.4881 27.2467 33.9101 26.8454 33.4838C26.4441 33.0576 25.8997 32.8182 25.3322 32.8182C24.7646 32.8182 24.2203 33.0576 23.8189 33.4838C23.4176 33.9101 23.1921 34.4881 23.1921 35.0909C23.1921 35.6937 23.4176 36.2718 23.8189 36.698C24.2203 37.1242 24.7646 37.3636 25.3322 37.3636ZM11.636 37.3636C12.2036 37.3636 12.7479 37.1242 13.1492 36.698C13.5506 36.2718 13.776 35.6937 13.776 35.0909C13.776 34.4881 13.5506 33.9101 13.1492 33.4838C12.7479 33.0576 12.2036 32.8182 11.636 32.8182C11.0684 32.8182 10.5241 33.0576 10.1228 33.4838C9.72144 33.9101 9.49597 34.4881 9.49597 35.0909C9.49597 35.6937 9.72144 36.2718 10.1228 36.698C10.5241 37.1242 11.0684 37.3636 11.636 37.3636Z"
                    stroke="white" stroke-width="1.6" />
                <path
                    d="M0.935867 1H3.91478C5.76377 1 7.21898 2.69091 7.0649 4.63636L5.64393 22.7455C5.58844 23.447 5.67078 24.1532 5.88572 24.8192C6.10066 25.4852 6.44352 26.0965 6.89257 26.6144C7.34162 27.1323 7.88707 27.5456 8.49436 27.8279C9.10165 28.1102 9.75754 28.2555 10.4205 28.2545H28.6535C31.1188 28.2545 33.2759 26.1091 33.4643 23.5091L34.3888 9.87273C34.5942 6.85455 32.4371 4.4 29.578 4.4H7.47579M12.92 11.9091H33.4643M25.3322 37.3636C25.8997 37.3636 26.4441 37.1242 26.8454 36.698C27.2467 36.2718 27.4722 35.6937 27.4722 35.0909C27.4722 34.4881 27.2467 33.9101 26.8454 33.4838C26.4441 33.0576 25.8997 32.8182 25.3322 32.8182C24.7646 32.8182 24.2203 33.0576 23.8189 33.4838C23.4176 33.9101 23.1921 34.4881 23.1921 35.0909C23.1921 35.6937 23.4176 36.2718 23.8189 36.698C24.2203 37.1242 24.7646 37.3636 25.3322 37.3636ZM11.636 37.3636C12.2036 37.3636 12.7479 37.1242 13.1492 36.698C13.5506 36.2718 13.776 35.6937 13.776 35.0909C13.776 34.4881 13.5506 33.9101 13.1492 33.4838C12.7479 33.0576 12.2036 32.8182 11.636 32.8182C11.0684 32.8182 10.5241 33.0576 10.1228 33.4838C9.72144 33.9101 9.49597 34.4881 9.49597 35.0909C9.49597 35.6937 9.72144 36.2718 10.1228 36.698C10.5241 37.1242 11.0684 37.3636 11.636 37.3636Z"
                    stroke="white" stroke-width="1.6" />
            </svg>
            <p>Support Independent Brands</p>
        </div>

    </div>

</section>

<!-- ----------------DETAIL SECTION---------------------
 ----------------------------------------------------->
<section class="detail-sec center ">
    <div class="content-detail-sec  grid-two grid">
        <div class="image-det">
            <img src="trending/detail.png" alt="gold">
        </div>
        <div class="content-det">
            <span>Jewlux</span>
            <p class="heading-detail">A Symbol of Prestige and Refinement</p>
            <p class="inner-text">Elevate your style with Jewlux, where elegance meets craftsmanship. Indulge in luxury
                with our exquisite collection of timeless jewelry pieces. Discover the allure of Jewlux and adorn
                yourself with opulence and refinement.


            </p>
        </div>
    </div>

</section>
<!-- ---------------NEW PRODUCTS SECTION---------------------
 ----------------------------------------------------->
<section class="trending-sec">
    <div>
        <h3>New</h3>
    </div>

    <div class="t-content">

        <?php if ($num1 > 0) {
            while ($product = mysqli_fetch_array($queryfire1)) {
                ?>
        <div class="t-img">
            <a href="gold-product-detail.php?id=<?php echo $product["id"]; ?>">
                <div>
                    <span class="disc">-
                        <?php echo $product['discount']; ?>%
                    </span>
                    <figure><img src="artificial/<?php echo $product['image']; ?>" alt="trending"></figure>
                </div>
                <div class="text">
                    <p>
                        <?php echo $product['karat']; ?>KT
                        <?php echo $product['name']; ?>
                    </p>
                    <span>
                        <?php echo $product['gender']; ?> |
                        <?php echo $product['category']; ?>
                    </span>
                    <p>Rs.
                        <?php echo $product['price']; ?>.00
                    </p>
                </div>
            </a>
        </div>
        <?php
            }
        }
        ?>
    </div>

    <div class="center"><a href="earring.php"><button class="btn">View all</button></a> </div>

</section>
<section class="instagram-sec">
    <div class="insta-heading">
        <h4>Follow Us On Instagram</h4>
    </div>
    <div class="insta-images center">
        <div class="img"><a href="#"> <img src="insta/insta1.png" alt="insta"></a> </div>
        <div class="img"> <a href="#"> <img src="insta/insta2.png" alt="insta"></a></div>
        <div class="img"> <a href="#"> <img src="insta/insta3.png" alt="insta"></a></div>
        <div class="img"><a href="#"> <img src="insta/insta4.png" alt="insta"></a></div>
        <div class="img"><a href="#"> <img src="insta/insta5.png" alt="insta"></a></div>
        <div class="img"><a href="#"> <img src="insta/insta6.png" alt="insta"></a></div>
    </div>
</section>

<!-- ---------------reviewSECTION---------------------
 ----------------------------------------------------->
<section class="review-sec center">


    <div class="Swiper myswiper">
        <div class="swiper-wrapper">

            <?php if ($num > 0) {
                while ($product = mysqli_fetch_array($queryfire2)) {
                    ?>
            <div class="swiper-slide">
                <div class="review">
                    <div class="review-img">
                        <img src="review/<?php echo $product['picture']; ?>" alt="review">
                    </div>
                    <div class="review-msg">
                        <p>
                            <?php echo $product['message']; ?>
                        </p>
                    </div>
                    <div class="user-name"><span>--
                            <?php echo $product['name']; ?>
                        </span></div>
                </div>

            </div>
            <?php
                }
            }
            ?>

        </div>
        <div class="swiper-pagination2m"></div>
    </div>
</section>

<!--  ----------------------------------------------
OUR footer SECTION start
----------------------------------------------
   -->

<?php
@include "user-includes/footer.php" ?>


</body>

</html>