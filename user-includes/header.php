<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewlux</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styling.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>

</head>

<body>
    <?php 
    session_start();
    include "admin/includes/functions/myfunctions.php"; 
    ?>

<?php
$cart = "SELECT `id` FROM `carts` ORDER BY id";
$cart_query= mysqli_query($con,$cart);
$row1 =mysqli_num_rows($cart_query);
?>

 <header class="header">

        <!--------------------------offer section ------------------------ -->
        <section class="offer_border">
            <a href="#"><ion-icon name="arrow-back-outline" id="a"> </ion-icon></a>
            <div class="offer_text">
                <p>Free Home Shipping above 50,000</p>
            </div>
            <a href="#"><ion-icon name="arrow-forward-outline" id="a"></ion-icon></a>
        </section>
        <!--------------------------search section ------------------------ -->
        <section class="section">
            <div class="search_bar center">
                <form action="searchbar.php" method="POST">
                    <button type="submit" class="show " name=" search_btn"><ion-icon name="search-outline" id="i"></ion-icon> </button>
                    <input type="text" name=" search_value" class="show " placeholder="What are you looking for?">

                </form>
            </div>
            <div class="logo">
                <img src="logo/logo.png" alt="logo">
            </div>
            <div class="account_sec">
                <ul>
                    <li class="currency">
                        <a href="#" class="inr show">India (INR) <ion-icon name="chevron-down-outline"></ion-icon></a>
                        <a href="#" class="inr hide"><ion-icon name="chevron-down-outline"></ion-icon></a>
                        <ul class="dropdown_currency">
                            <li><a href="#">USD </a></li>
                            <li><a href="#">EUR </a></li>
                            <li><a href="#">GBP </a></li>
                        </ul>
                    </li>
                </ul>

                <div class="user_icon ">


                    <!-- dropdown icon -->

                    <div class="dropdown">
                        <a href="#" class="dbtn"><ion-icon name="person-outline" id="i" class="dropbtn"></ion-icon></a>
                        <div class="dropdown-content">
                            <?php
                            if (isset($_SESSION['auth'])) {
                                ?> <a href="profile.php" class="user-acc"><ion-icon name="person-circle-outline"
                                        id="i"></ion-icon><?= $_SESSION['auth_user']['username']; ?></a>
                                <a href="#"><ion-icon name="mail"
                                        id="i"></ion-icon><?= $_SESSION['auth_user']['email']; ?></a>
                                <a href="logout.php"><ion-icon name="power" id="i"></ion-icon>Logout</a>

                     <a href="my-orders.php"><ion-icon name="bag-check" id="i"></ion-icon>My Orders</a>
                            <?php } else { ?>
                                <a href="user-login.php"><ion-icon name="person-circle-outline" id="i"></ion-icon>Login</a>
                                <a href="registration.php"><ion-icon name="create-outline" id="i"></ion-icon>Register</a>
                            <?php } ?>
                            <a href="user-login.php"><ion-icon name="settings-outline" id="i"></ion-icon>Admin</a>
       
                            <!-- You can add more options here -->
                        </div>
                    </div>


                    <a href="wishlist.php"> <ion-icon name="heart-outline" id="i"></ion-icon></a>
                    <a href="cart.php"> <ion-icon name="bag-handle-outline" id="i"></ion-icon></a>
                    <span class="cart_num"><?php echo $row1;?></span>
                    <a href="index.php"> <ion-icon name="home-outline" id="i"></ion-icon></a>
                    <a href="#" id="menu_icon"> <ion-icon name="menu" id=" i"></ion-icon></a>

                    <!-- 
    ------------------side-menu-bar------------------------------------------------- -->

                    <div id="menu">
                        <div class="close-div"><a href="#" id="menu_close"> <ion-icon name="close-sharp"
                                    class="i-close"></ion-icon></a>
                        </div>
                        <div class="search_bar center">
                            <form action="# ">
                                <button type="submit" class="hide "><ion-icon name="search-outline" id="i"></ion-icon>
                                </button>
                                <input type="text" class="hide " placeholder="What are you looking for?">

                            </form>
                        </div>
                        <ul>
                            <li><a href="#"> Bangles</a>
                                <div class="nav-dropdown-content menu-cat1">
                                    <div class="subcategories sub1 ">
                                        <a href="earring.php">Gold</a>
                                        <a href="silver-earrings.php">Silver</a>
                                        <a href="artificial-earrings.php">Artificial</a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Chains</a>
                                <div class="nav-dropdown-content menu-cat2">
                                    <div class="subcategories sub2">
                                        <a href="searchbar.php" type="submit" name="search_btn"><input type="hidden"name="search_value" value="chains"> Gold</a>
                                        <a href="silver-earrings.php">Silver</a>
                                        <a href="artificial-products.php" >Artificial</a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Earrings</a>
                                <div class="nav-dropdown-content menu-cat3">
                                    <div class="subcategories sub3">
                                        <a href="earring.php" >Gold</a>
                                        <a href="silver-earrings.php" >Silver</a>
                                        <a href="artificial-products.php" >Artificial</a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Necklaces</a>

                                <div class="nav-dropdown-content menu-cat4">
                                    <div class="subcategories sub4">
                                        <a href="earring.php" >Gold</a>
                                        <a href="silver-earrings.php" >Silver</a>
                                        <a href="artificial-products.php" >Artificial</a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Rings</a>
                                <div class="nav-dropdown-content menu-cat5">
                                    <div class="subcategories sub5">
                                        <a href="earring.php" >Gold</a>
                                        <a href="silver-earrings.php" >Silver</a>
                                        <a href="artificial-products.php" >Artificial</a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Bracelets</a>

                                <div class="nav-dropdown-content menu-cat6">
                                    <div class="subcategories sub6">
                                        <a href="earring.php" >Gold</a>
                                        <a href="silver-earrings.php" >Silver</a>
                                        <a href="artificial-products.php" >Artificial</a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Pendants</a>

                                <div class="nav-dropdown-content menu-cat7">
                                    <div class="subcategories sub7">
                                        <a href="earring.php" >Gold</a>
                                        <a href="silver-earrings.php" >Silver</a>
                                        <a href="artificial-products.php" >Artificial</a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- 
    --------------------end --side-menu-bar------------------------------------------------- -->
                </div>

            </div>
        </section>

        <!-- ----------------end section--------------------- -->
        <section class="nav-section">
            <nav class="nav">
                <ul>
                    <li><button class="nav-btn" name="t-11" id="toggleButton"><a href="#"> Bangles</a></button>
                        <div class="nav-dropdown-content">
                            <div class="subcategories " name="c-11" id="Category-1">
                                <a href="earring.php">Gold</a>
                                <a href="silver-earrings.php">Silver</a>
                                <a href="artificial-products.php">Artificial</a>
                            </div>
                        </div>
                    </li>
                    <li><button class="nav-btn" name="t-22" id="toggleButton2"><a href="#"> Earrings</a></button>
                        <div class="nav-dropdown-content">
                            <div class="subcategories " name="c-22" id="Category-2">
                                <a href="earring.php" >Gold</a>
                                <a href="silver-earrings.php" >Silver</a>
                                <a href="artificial-products.php" >Artificial</a>
                            </div>
                        </div>
                    </li>
                    <li><button class="nav-btn"   id="toggleButton3"><a href="#"> Chains</a></button>
                        <div class="nav-dropdown-content">
                            <div class="subcategories " name="c-33" id="Category-3">
                            <a href="earring.php" type="submit" name="search_btn">Gold</a>
                                <a href="silver-earrings.php" >Silver</a>
                                <a href="artificial-products.php">Artificial</a>
                            </div>
                        </div>
                    </li>
                    <li><button class="nav-btn" name="t-44" id="toggleButton4"><a href="#"> Necklaces</a></button>
                        <div class="nav-dropdown-content">
                            <div class="subcategories " name="c-44" id="Category-4">
                                <a href="earring.php" >Gold</a>
                                <a href="silver-earrings.php" >Silver</a>
                                <a href="artificial-products.php" >Artificial</a>
                            </div>
                        </div>
                    </li>
                    <li><button class="nav-btn" name="t-55" id="toggleButton5"><a href="#"> Rings</a></button>
                        <div class="nav-dropdown-content">
                            <div class="subcategories " name="c-55" id="Category-5">
                                <a href="earring.php">Gold</a>
                                <a href="silver-earrings.php">Silver</a>
                                <a href="artificial-products.php" >Artificial</a>
                            </div>
                        </div>
                    </li>
                    <li><button class="nav-btn" name="t-66" id="toggleButton6"><a href="#"> Bracelets</a></button>
                        <div class="nav-dropdown-content">
                            <div class="subcategories " name="c-66" id="Category-6">
                                <a href="earring.php" >Gold</a>
                                <a href="silver-earrings.php">Silver</a>
                                <a href="artificial-products.php" >Artificial</a>
                            </div>
                        </div>
                    </li>
                    <li><button class="nav-btn" name="t-77" id="toggleButton7"><a href="#"> Pendants</a></button>
                        <div class="nav-dropdown-content">
                            <div class="subcategories " name="c-77" id="Category-7">
                                <a href="earring.php" >Gold</a>
                                <a href="silver-earrings.php" >Silver</a>
                                <a href="artificial-products.php" >Artificial</a>
                            </div>
                        </div>
                    </li>

                </ul>

            </nav>
        </section>

    </header>


