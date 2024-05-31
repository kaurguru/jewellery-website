<link rel="stylesheet" href="styling.css">

<?php
session_start();
include "user-includes/connection.php";
//  include "user-includes/links.php";
include "user-includes/header.php";
// include "auth.php";
// include "admin/includes/functions/myfunctions.php";
?>
<!-- <script src="../action.js"></script> -->
<?php if (isset($_SESSION['message'])) { ?>
  <div id="message" class="field-error"><?= $_SESSION['message']; ?></div>
  <?php unset($_SESSION['message']); ?>
  <script>
    // Wait for 5 seconds and then remove the message element
    setTimeout(function () {
      var messageElement = document.getElementById('message');
      if (messageElement) {
        messageElement.remove();
      }
    }, 1500);
  </script>
<?php } ?>
<section class="product-det-sec center">

    <div class="product-container ">

        <div class="det">

            <?php
            // @include "user-includes/connection.php";
            $id = "";
            if (isset($_GET['id'])) {
                $id = $_GET['id'];


                $query = "SELECT  * FROM `artificial` WHERE id = '$id'";
                $queryfire = mysqli_query($con, $query);
                $num = mysqli_num_rows($queryfire);



                if ($num > 0) {
                    while ($item = mysqli_fetch_array($queryfire)) {
                        ?>
                        <div class="det-img">
                            <span class="loc">Home / Stellar Dainty Diamond Hoop</span>
                            <img src="artificial/<?php echo $item['image']; ?>" id="img" alt="silver">
                        </div>

                        <div class="det-text">
                            <span class="brand">STYLUM</span>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_155_11)">
                                    <path
                                        d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                        fill="#E1A829" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_155_11">
                                        <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                    </clipPath>
                                </defs>
                            </svg>

                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_155_11)">
                                    <path
                                        d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                        fill="#E1A829" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_155_11">
                                        <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_155_11)">
                                    <path
                                        d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                        fill="#E1A829" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_155_11">
                                        <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_155_17)">
                                    <path
                                        d="M5.60399 5.45152L7.78799 1.12452C7.82993 1.03747 7.89547 0.963953 7.97715 0.912329C8.05883 0.860705 8.15336 0.833053 8.24999 0.83252C8.43299 0.83252 8.61599 0.92952 8.71499 1.12452L10.899 5.45152L15.797 6.14752C15.9191 6.16671 16.0308 6.22743 16.1133 6.31943C16.1959 6.41142 16.2441 6.52907 16.25 6.65252C16.257 6.73471 16.2453 6.81741 16.2159 6.89446C16.1864 6.97151 16.14 7.04092 16.08 7.09752L12.557 10.4535L13.387 15.1835C13.465 15.6265 13.027 15.9735 12.641 15.7755L8.24999 13.5195L3.86099 15.7755C3.81508 15.7994 3.76587 15.8162 3.71499 15.8255C3.37299 15.8855 3.04699 15.5715 3.11499 15.1835L3.94499 10.4535L0.422988 7.09752C0.368233 7.04572 0.324711 6.98321 0.295123 6.91389C0.265535 6.84456 0.250512 6.76989 0.250988 6.69452C0.25104 6.58796 0.280449 6.48347 0.335988 6.39252C0.375386 6.32659 0.429086 6.27035 0.493125 6.22794C0.557164 6.18554 0.629908 6.15805 0.705988 6.14752L5.60399 5.45152V5.45152ZM8.24999 12.3595C8.33071 12.3592 8.41031 12.3784 8.48199 12.4155L12.168 14.3095L11.474 10.3525C11.4576 10.2615 11.4638 10.1679 11.4921 10.0798C11.5203 9.99178 11.5697 9.91201 11.636 9.84752L14.543 7.07752L10.491 6.50152C10.4071 6.48885 10.3275 6.45603 10.2591 6.40587C10.1906 6.35571 10.1353 6.28971 10.098 6.21352L8.25099 2.55552L8.24999 2.55852V12.3585V12.3595Z"
                                        fill="#E1A829" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_155_17">
                                        <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_155_19)">
                                    <path
                                        d="M3.11563 15.1826C3.03763 15.6266 3.47563 15.9736 3.86163 15.7756L8.25163 13.5196L12.6406 15.7756C13.0266 15.9736 13.4646 15.6266 13.3866 15.1836L12.5566 10.4536L16.0786 7.09756C16.4086 6.78356 16.2386 6.20956 15.7966 6.14756L10.8986 5.45156L8.71463 1.12456C8.67303 1.03685 8.60739 0.962748 8.52534 0.910857C8.44329 0.858966 8.34821 0.831421 8.25113 0.831421C8.15405 0.831421 8.05897 0.858966 7.97692 0.910857C7.89487 0.962748 7.82923 1.03685 7.78763 1.12456L5.60363 5.45256L0.70563 6.14856C0.26463 6.21056 0.09363 6.78456 0.42263 7.09856L3.94563 10.4546L3.11563 15.1846V15.1826ZM8.02063 12.4156L4.33463 14.3096L5.02863 10.3526C5.04489 10.2615 5.03853 10.1678 5.01011 10.0797C4.98168 9.99168 4.93207 9.91196 4.86563 9.84756L1.95963 7.07756L6.01163 6.50156C6.09553 6.48889 6.17512 6.45607 6.24356 6.40592C6.31201 6.35576 6.36728 6.28976 6.40463 6.21356L8.24963 2.55556L10.0966 6.21356C10.134 6.28976 10.1893 6.35576 10.2577 6.40592C10.3261 6.45607 10.4057 6.48889 10.4896 6.50156L14.5416 7.07656L11.6356 9.84656C11.569 9.91106 11.5193 9.99095 11.4909 10.0792C11.4625 10.1674 11.4562 10.2613 11.4726 10.3526L12.1666 14.3096L8.48063 12.4156C8.40935 12.3788 8.33032 12.3596 8.25013 12.3596C8.16994 12.3596 8.09091 12.3788 8.01963 12.4156H8.02063Z"
                                        fill="#E1A829" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_155_19">
                                        <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                    </clipPath>
                                </defs>
                            </svg>


                            <span class="rating"><a href=""> See All Reviews (22)</a></span>
                            <h3><?php echo $item['name']; ?></h3>


                            <div class="check-qty">
                                <?php
                                if ($item['qty'] == 0) {
                                    echo '<h4 style="color:red; font-size:20px; font-weight:500;"> Out Of Stock</h4>';
                                } else {
                                    echo '<h4 style="color:green; font-size:20px; font-weight:500;"> In Stock</h4>';
                                }
                                ?>
                            </div>

                            <div class="qty">
                                <div>
                                    <p>Quantity</p>
                                    <input type="hidden" value="<?php echo $item["id"]; ?>" class="p-id">
                                    <span> <button class="decrement-btn">-</button>
                                        <input type="number" id="quantity" value="1" name="qty" disabled class="input-qty">
                                        <button class="increment-btn">+</button> </span>
                                </div>

                                <div>
                                    <p>price total</p>
                                    <h4>₹<?php echo $item['price']; ?>.00</h4>
                                </div>

                            </div>



                            <div class="cart-button">


                                <input type="hidden" name="name" class="name" value="<?php echo $item["name"]; ?>">

                                <input type="hidden" name="price" class="price" value="<?php echo $item["price"]; ?>">
                                <input type="hidden" name="image" class="image" value="<?php echo $item["image"]; ?>">
                                <input type="hidden" name="category" class="category" value="<?php echo $item["category"]; ?>">
                                <input type="hidden" name="type" class="type" value="<?php echo $item["type"]; ?>">
                                <input type="hidden" name="id" class="id" value="<?php echo $item["id"]; ?>">

                                <button class="cart"> <input type="submit" class=" add-to-cart " name="add-to-cart"
                                        value="Add to bag"></button>

                                <form action="admin/process.php" method="POST">
                                    <input type="hidden" name="type" class="type" value="<?php echo $item["type"]; ?>">
                                    <input type="hidden" name="id" class="id" value="<?php echo $item["id"]; ?>">
                                    <input type="hidden" name="wishlist" class="wishlist" value="2">
                                    <button type="submit" class="save" name="save-btn"><a href="#" class="save-btn"> <ion-icon
                                                name="heart-outline" id="i-heart"></ion-icon>save</a></button>
                         

                            </form>
                        </div>


                        <div class="shipping">
                            <div class="sec">
                                <p> <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.00002 14.75C7.00002 15.1478 6.84198 15.5293 6.56068 15.8107C6.27937 16.092 5.89784 16.25 5.50002 16.25C5.10219 16.25 4.72066 16.092 4.43936 15.8107C4.15805 15.5293 4.00002 15.1478 4.00002 14.75M7.00002 14.75C7.00002 14.3522 6.84198 13.9706 6.56068 13.6893C6.27937 13.408 5.89784 13.25 5.50002 13.25C5.10219 13.25 4.72066 13.408 4.43936 13.6893C4.15805 13.9706 4.00002 14.3522 4.00002 14.75M7.00002 14.75H13M4.00002 14.75H2.12502C1.82665 14.75 1.5405 14.6315 1.32952 14.4205C1.11855 14.2095 1.00002 13.9234 1.00002 13.625V10.25M13 14.75H15.25M13 14.75V10.25M1.00002 10.25V2.61499C0.998429 2.34116 1.09848 2.07648 1.28081 1.87217C1.46313 1.66786 1.71477 1.53845 1.98702 1.50899C5.32006 1.16302 8.67997 1.16302 12.013 1.50899C12.578 1.56699 13 2.04699 13 2.61499V3.57299M1.00002 10.25H13M18.25 14.75C18.25 15.1478 18.092 15.5293 17.8107 15.8107C17.5294 16.092 17.1478 16.25 16.75 16.25C16.3522 16.25 15.9707 16.092 15.6894 15.8107C15.4081 15.5293 15.25 15.1478 15.25 14.75M18.25 14.75C18.25 14.3522 18.092 13.9706 17.8107 13.6893C17.5294 13.408 17.1478 13.25 16.75 13.25C16.3522 13.25 15.9707 13.408 15.6894 13.6893C15.4081 13.9706 15.25 14.3522 15.25 14.75M18.25 14.75H19.375C19.996 14.75 20.504 14.246 20.465 13.626C20.2641 10.3236 19.1519 7.14155 17.252 4.43299C17.0711 4.17927 16.8348 3.97001 16.5611 3.82102C16.2873 3.67203 15.9833 3.58722 15.672 3.57299H13M13 3.57299V10.25"
                                            stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>Free Shipping</p>
                                <span><a href="#" class="link-ship margin">Enter your Postal code for Delivery
                                        Availability</a></span>
                            </div>
                            <div class="sec">
                                <a href="">
                                    <p class="align-center"> <ion-icon name="bag-handle-outline" id="i-bag"></ion-icon> Return
                                        Delivery</p>
                                    <span>Free 30 days Delivery Return.
                                        <a href="#" class="link-ship">Details</a> </span>

                                </a>

                            </div>

                        </div>
                    </div>


                </div>


                </div>
                <!-- // -------------------------end product detail ------------------------ -->
                <!-- // ------------------------******************------------------------ -->
                <div class="description-sec">
                    <div class="navbar-description">
                        <ul>
                            <li><a href="javascript:void(0)" onclick="showDescription()">Description</a></li>
                            <li><a href="javascript:void(0)" onclick="showReview()">Reviews</a></li>
                        </ul>
                    </div>

                    <div class="internal-box" id="description">
                        <div class="product-about">

                            <div>
                                <h4>ABOUT PRODUCT</h4>
                                <p>Each piece of jewelry at Radiant Creations is meticulously crafted by skilled artisans who bring
                                    years of
                                    expertise and precision to every design. From the initial concept to the final polish, our
                                    artisans pour
                                    their heart and soul into creating jewelry that is as exceptional as it is beautiful.</p>
                            </div>
                            <div>
                                <h4>Specifications</h4>
                                <ul>
                                    <li>Brand: Jewlux</li>
                                    <li>Collection: Bestsellers</li>
                                    <li>Gender: <?php echo $item['gender']; ?></li>
                                    <li>Jewellery Type: <?php echo $item['type']; ?></li>
                                    <li> Category: <?php echo $item['category']; ?></li>
                                    <li>Discount: <?php echo $item['discount']; ?>%</li>


                                </ul>
                            </div>
                            <div>

                                <?php
                    }
                } else {
                    echo "product not found";
                }
            } ?>
                    <h4>ADVANTAGES</h4>
                    <ul>
                        <li> Timeless Design</li>
                        <li>Adjustable Length:</li>
                        <li>Versatile Style</li>
                        <li>Secure Clasp</li>
                        <li> Hypoallergenic</li>
                        <li>Enhanced Durability</li>
                        <li> 100% pure</li>
                        <li>Nickel-Free</li>
                    </ul>
                </div>


            </div>
            <div class="product-shipping">
                <div>
                    <h4>SHIPPING</h4>
                    <p>We offer Free Standard Shipping for all orders over ₹2000 to the 50 states and the District of
                        Columbia.
                        The minimum order value must be ₹2000 before taxes, shipping and handling. Shipping fees are
                        non-refundable.</p>
                    <p>Please allow up to 2 business days (excluding weekends, holidays, and sale days) to process your
                        order.
                    </p>
                    <p>Processing Time + Shipping Time = Delivery Time</p>
                </div>
            </div>

        </div>
    </div>
    <!-- // ------------end description---- -->
    <div class="product-review-sec" id="review">
        <h1>Customers Feedback</h1>
        <!-- // -------------------------customer-feedback------------------------ -->
        <div class="customer-feedback">

            <div class="rating-no">
                <h1>4.8</h1>
                <div>

                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_155_11)">
                            <path
                                d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                fill="#E1A829" />
                        </g>
                        <defs>
                            <clipPath id="clip0_155_11">
                                <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_155_11)">
                            <path
                                d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                fill="#E1A829" />
                        </g>
                        <defs>
                            <clipPath id="clip0_155_11">
                                <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_155_11)">
                            <path
                                d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                fill="#E1A829" />
                        </g>
                        <defs>
                            <clipPath id="clip0_155_11">
                                <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_155_11)">
                            <path
                                d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                fill="#E1A829" />
                        </g>
                        <defs>
                            <clipPath id="clip0_155_11">
                                <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_155_11)">
                            <path
                                d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                fill="#E1A829" />
                        </g>
                        <defs>
                            <clipPath id="clip0_155_11">
                                <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                            </clipPath>
                        </defs>
                    </svg>


                </div>
                <p>Product Rating</p>
            </div>
            <div class="star-sec-box">
                <div class="star-box">
                    <div class="progess-bar one">
                    </div>
                    <div class="star-sec">

                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>

                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>

                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>

                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>

                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                    <div><span>70%</span></div>

                </div>
                <div class="star-box">
                    <div class="progess-bar two">
                    </div>
                    <div class="star-sec">

                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>

                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>

                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>

                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>

                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_19)">
                                <path
                                    d="M3.11563 15.1826C3.03763 15.6266 3.47563 15.9736 3.86163 15.7756L8.25163 13.5196L12.6406 15.7756C13.0266 15.9736 13.4646 15.6266 13.3866 15.1836L12.5566 10.4536L16.0786 7.09756C16.4086 6.78356 16.2386 6.20956 15.7966 6.14756L10.8986 5.45156L8.71463 1.12456C8.67303 1.03685 8.60739 0.962748 8.52534 0.910857C8.44329 0.858966 8.34821 0.831421 8.25113 0.831421C8.15405 0.831421 8.05897 0.858966 7.97692 0.910857C7.89487 0.962748 7.82923 1.03685 7.78763 1.12456L5.60363 5.45256L0.70563 6.14856C0.26463 6.21056 0.09363 6.78456 0.42263 7.09856L3.94563 10.4546L3.11563 15.1846V15.1826ZM8.02063 12.4156L4.33463 14.3096L5.02863 10.3526C5.04489 10.2615 5.03853 10.1678 5.01011 10.0797C4.98168 9.99168 4.93207 9.91196 4.86563 9.84756L1.95963 7.07756L6.01163 6.50156C6.09553 6.48889 6.17512 6.45607 6.24356 6.40592C6.31201 6.35576 6.36728 6.28976 6.40463 6.21356L8.24963 2.55556L10.0966 6.21356C10.134 6.28976 10.1893 6.35576 10.2577 6.40592C10.3261 6.45607 10.4057 6.48889 10.4896 6.50156L14.5416 7.07656L11.6356 9.84656C11.569 9.91106 11.5193 9.99095 11.4909 10.0792C11.4625 10.1674 11.4562 10.2613 11.4726 10.3526L12.1666 14.3096L8.48063 12.4156C8.40935 12.3788 8.33032 12.3596 8.25013 12.3596C8.16994 12.3596 8.09091 12.3788 8.01963 12.4156H8.02063Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_19">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>


                    </div>
                    <div><span>15%</span></div>

                </div>
                <div class="star-box">
                    <div class="progess-bar three">
                    </div>
                    <div class="star-sec">

                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>

                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>

                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>

                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_19)">
                                <path
                                    d="M3.11563 15.1826C3.03763 15.6266 3.47563 15.9736 3.86163 15.7756L8.25163 13.5196L12.6406 15.7756C13.0266 15.9736 13.4646 15.6266 13.3866 15.1836L12.5566 10.4536L16.0786 7.09756C16.4086 6.78356 16.2386 6.20956 15.7966 6.14756L10.8986 5.45156L8.71463 1.12456C8.67303 1.03685 8.60739 0.962748 8.52534 0.910857C8.44329 0.858966 8.34821 0.831421 8.25113 0.831421C8.15405 0.831421 8.05897 0.858966 7.97692 0.910857C7.89487 0.962748 7.82923 1.03685 7.78763 1.12456L5.60363 5.45256L0.70563 6.14856C0.26463 6.21056 0.09363 6.78456 0.42263 7.09856L3.94563 10.4546L3.11563 15.1846V15.1826ZM8.02063 12.4156L4.33463 14.3096L5.02863 10.3526C5.04489 10.2615 5.03853 10.1678 5.01011 10.0797C4.98168 9.99168 4.93207 9.91196 4.86563 9.84756L1.95963 7.07756L6.01163 6.50156C6.09553 6.48889 6.17512 6.45607 6.24356 6.40592C6.31201 6.35576 6.36728 6.28976 6.40463 6.21356L8.24963 2.55556L10.0966 6.21356C10.134 6.28976 10.1893 6.35576 10.2577 6.40592C10.3261 6.45607 10.4057 6.48889 10.4896 6.50156L14.5416 7.07656L11.6356 9.84656C11.569 9.91106 11.5193 9.99095 11.4909 10.0792C11.4625 10.1674 11.4562 10.2613 11.4726 10.3526L12.1666 14.3096L8.48063 12.4156C8.40935 12.3788 8.33032 12.3596 8.25013 12.3596C8.16994 12.3596 8.09091 12.3788 8.01963 12.4156H8.02063Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_19">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>


                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_19)">
                                <path
                                    d="M3.11563 15.1826C3.03763 15.6266 3.47563 15.9736 3.86163 15.7756L8.25163 13.5196L12.6406 15.7756C13.0266 15.9736 13.4646 15.6266 13.3866 15.1836L12.5566 10.4536L16.0786 7.09756C16.4086 6.78356 16.2386 6.20956 15.7966 6.14756L10.8986 5.45156L8.71463 1.12456C8.67303 1.03685 8.60739 0.962748 8.52534 0.910857C8.44329 0.858966 8.34821 0.831421 8.25113 0.831421C8.15405 0.831421 8.05897 0.858966 7.97692 0.910857C7.89487 0.962748 7.82923 1.03685 7.78763 1.12456L5.60363 5.45256L0.70563 6.14856C0.26463 6.21056 0.09363 6.78456 0.42263 7.09856L3.94563 10.4546L3.11563 15.1846V15.1826ZM8.02063 12.4156L4.33463 14.3096L5.02863 10.3526C5.04489 10.2615 5.03853 10.1678 5.01011 10.0797C4.98168 9.99168 4.93207 9.91196 4.86563 9.84756L1.95963 7.07756L6.01163 6.50156C6.09553 6.48889 6.17512 6.45607 6.24356 6.40592C6.31201 6.35576 6.36728 6.28976 6.40463 6.21356L8.24963 2.55556L10.0966 6.21356C10.134 6.28976 10.1893 6.35576 10.2577 6.40592C10.3261 6.45607 10.4057 6.48889 10.4896 6.50156L14.5416 7.07656L11.6356 9.84656C11.569 9.91106 11.5193 9.99095 11.4909 10.0792C11.4625 10.1674 11.4562 10.2613 11.4726 10.3526L12.1666 14.3096L8.48063 12.4156C8.40935 12.3788 8.33032 12.3596 8.25013 12.3596C8.16994 12.3596 8.09091 12.3788 8.01963 12.4156H8.02063Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_19">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>


                    </div>
                    <div><span>10%</span></div>

                </div>
                <div class="star-box">
                    <div class="progess-bar four">
                    </div>
                    <div class="star-sec">

                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>

                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>

                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_19)">
                                <path
                                    d="M3.11563 15.1826C3.03763 15.6266 3.47563 15.9736 3.86163 15.7756L8.25163 13.5196L12.6406 15.7756C13.0266 15.9736 13.4646 15.6266 13.3866 15.1836L12.5566 10.4536L16.0786 7.09756C16.4086 6.78356 16.2386 6.20956 15.7966 6.14756L10.8986 5.45156L8.71463 1.12456C8.67303 1.03685 8.60739 0.962748 8.52534 0.910857C8.44329 0.858966 8.34821 0.831421 8.25113 0.831421C8.15405 0.831421 8.05897 0.858966 7.97692 0.910857C7.89487 0.962748 7.82923 1.03685 7.78763 1.12456L5.60363 5.45256L0.70563 6.14856C0.26463 6.21056 0.09363 6.78456 0.42263 7.09856L3.94563 10.4546L3.11563 15.1846V15.1826ZM8.02063 12.4156L4.33463 14.3096L5.02863 10.3526C5.04489 10.2615 5.03853 10.1678 5.01011 10.0797C4.98168 9.99168 4.93207 9.91196 4.86563 9.84756L1.95963 7.07756L6.01163 6.50156C6.09553 6.48889 6.17512 6.45607 6.24356 6.40592C6.31201 6.35576 6.36728 6.28976 6.40463 6.21356L8.24963 2.55556L10.0966 6.21356C10.134 6.28976 10.1893 6.35576 10.2577 6.40592C10.3261 6.45607 10.4057 6.48889 10.4896 6.50156L14.5416 7.07656L11.6356 9.84656C11.569 9.91106 11.5193 9.99095 11.4909 10.0792C11.4625 10.1674 11.4562 10.2613 11.4726 10.3526L12.1666 14.3096L8.48063 12.4156C8.40935 12.3788 8.33032 12.3596 8.25013 12.3596C8.16994 12.3596 8.09091 12.3788 8.01963 12.4156H8.02063Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_19">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>


                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_19)">
                                <path
                                    d="M3.11563 15.1826C3.03763 15.6266 3.47563 15.9736 3.86163 15.7756L8.25163 13.5196L12.6406 15.7756C13.0266 15.9736 13.4646 15.6266 13.3866 15.1836L12.5566 10.4536L16.0786 7.09756C16.4086 6.78356 16.2386 6.20956 15.7966 6.14756L10.8986 5.45156L8.71463 1.12456C8.67303 1.03685 8.60739 0.962748 8.52534 0.910857C8.44329 0.858966 8.34821 0.831421 8.25113 0.831421C8.15405 0.831421 8.05897 0.858966 7.97692 0.910857C7.89487 0.962748 7.82923 1.03685 7.78763 1.12456L5.60363 5.45256L0.70563 6.14856C0.26463 6.21056 0.09363 6.78456 0.42263 7.09856L3.94563 10.4546L3.11563 15.1846V15.1826ZM8.02063 12.4156L4.33463 14.3096L5.02863 10.3526C5.04489 10.2615 5.03853 10.1678 5.01011 10.0797C4.98168 9.99168 4.93207 9.91196 4.86563 9.84756L1.95963 7.07756L6.01163 6.50156C6.09553 6.48889 6.17512 6.45607 6.24356 6.40592C6.31201 6.35576 6.36728 6.28976 6.40463 6.21356L8.24963 2.55556L10.0966 6.21356C10.134 6.28976 10.1893 6.35576 10.2577 6.40592C10.3261 6.45607 10.4057 6.48889 10.4896 6.50156L14.5416 7.07656L11.6356 9.84656C11.569 9.91106 11.5193 9.99095 11.4909 10.0792C11.4625 10.1674 11.4562 10.2613 11.4726 10.3526L12.1666 14.3096L8.48063 12.4156C8.40935 12.3788 8.33032 12.3596 8.25013 12.3596C8.16994 12.3596 8.09091 12.3788 8.01963 12.4156H8.02063Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_19">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>


                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_19)">
                                <path
                                    d="M3.11563 15.1826C3.03763 15.6266 3.47563 15.9736 3.86163 15.7756L8.25163 13.5196L12.6406 15.7756C13.0266 15.9736 13.4646 15.6266 13.3866 15.1836L12.5566 10.4536L16.0786 7.09756C16.4086 6.78356 16.2386 6.20956 15.7966 6.14756L10.8986 5.45156L8.71463 1.12456C8.67303 1.03685 8.60739 0.962748 8.52534 0.910857C8.44329 0.858966 8.34821 0.831421 8.25113 0.831421C8.15405 0.831421 8.05897 0.858966 7.97692 0.910857C7.89487 0.962748 7.82923 1.03685 7.78763 1.12456L5.60363 5.45256L0.70563 6.14856C0.26463 6.21056 0.09363 6.78456 0.42263 7.09856L3.94563 10.4546L3.11563 15.1846V15.1826ZM8.02063 12.4156L4.33463 14.3096L5.02863 10.3526C5.04489 10.2615 5.03853 10.1678 5.01011 10.0797C4.98168 9.99168 4.93207 9.91196 4.86563 9.84756L1.95963 7.07756L6.01163 6.50156C6.09553 6.48889 6.17512 6.45607 6.24356 6.40592C6.31201 6.35576 6.36728 6.28976 6.40463 6.21356L8.24963 2.55556L10.0966 6.21356C10.134 6.28976 10.1893 6.35576 10.2577 6.40592C10.3261 6.45607 10.4057 6.48889 10.4896 6.50156L14.5416 7.07656L11.6356 9.84656C11.569 9.91106 11.5193 9.99095 11.4909 10.0792C11.4625 10.1674 11.4562 10.2613 11.4726 10.3526L12.1666 14.3096L8.48063 12.4156C8.40935 12.3788 8.33032 12.3596 8.25013 12.3596C8.16994 12.3596 8.09091 12.3788 8.01963 12.4156H8.02063Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_19">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>


                    </div>
                    <div><span>3%</span></div>

                </div>

                <div class="star-box">
                    <div class="progess-bar five">
                    </div>
                    <div class="star-sec">

                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>

                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_19)">
                                <path
                                    d="M3.11563 15.1826C3.03763 15.6266 3.47563 15.9736 3.86163 15.7756L8.25163 13.5196L12.6406 15.7756C13.0266 15.9736 13.4646 15.6266 13.3866 15.1836L12.5566 10.4536L16.0786 7.09756C16.4086 6.78356 16.2386 6.20956 15.7966 6.14756L10.8986 5.45156L8.71463 1.12456C8.67303 1.03685 8.60739 0.962748 8.52534 0.910857C8.44329 0.858966 8.34821 0.831421 8.25113 0.831421C8.15405 0.831421 8.05897 0.858966 7.97692 0.910857C7.89487 0.962748 7.82923 1.03685 7.78763 1.12456L5.60363 5.45256L0.70563 6.14856C0.26463 6.21056 0.09363 6.78456 0.42263 7.09856L3.94563 10.4546L3.11563 15.1846V15.1826ZM8.02063 12.4156L4.33463 14.3096L5.02863 10.3526C5.04489 10.2615 5.03853 10.1678 5.01011 10.0797C4.98168 9.99168 4.93207 9.91196 4.86563 9.84756L1.95963 7.07756L6.01163 6.50156C6.09553 6.48889 6.17512 6.45607 6.24356 6.40592C6.31201 6.35576 6.36728 6.28976 6.40463 6.21356L8.24963 2.55556L10.0966 6.21356C10.134 6.28976 10.1893 6.35576 10.2577 6.40592C10.3261 6.45607 10.4057 6.48889 10.4896 6.50156L14.5416 7.07656L11.6356 9.84656C11.569 9.91106 11.5193 9.99095 11.4909 10.0792C11.4625 10.1674 11.4562 10.2613 11.4726 10.3526L12.1666 14.3096L8.48063 12.4156C8.40935 12.3788 8.33032 12.3596 8.25013 12.3596C8.16994 12.3596 8.09091 12.3788 8.01963 12.4156H8.02063Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_19">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>


                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_19)">
                                <path
                                    d="M3.11563 15.1826C3.03763 15.6266 3.47563 15.9736 3.86163 15.7756L8.25163 13.5196L12.6406 15.7756C13.0266 15.9736 13.4646 15.6266 13.3866 15.1836L12.5566 10.4536L16.0786 7.09756C16.4086 6.78356 16.2386 6.20956 15.7966 6.14756L10.8986 5.45156L8.71463 1.12456C8.67303 1.03685 8.60739 0.962748 8.52534 0.910857C8.44329 0.858966 8.34821 0.831421 8.25113 0.831421C8.15405 0.831421 8.05897 0.858966 7.97692 0.910857C7.89487 0.962748 7.82923 1.03685 7.78763 1.12456L5.60363 5.45256L0.70563 6.14856C0.26463 6.21056 0.09363 6.78456 0.42263 7.09856L3.94563 10.4546L3.11563 15.1846V15.1826ZM8.02063 12.4156L4.33463 14.3096L5.02863 10.3526C5.04489 10.2615 5.03853 10.1678 5.01011 10.0797C4.98168 9.99168 4.93207 9.91196 4.86563 9.84756L1.95963 7.07756L6.01163 6.50156C6.09553 6.48889 6.17512 6.45607 6.24356 6.40592C6.31201 6.35576 6.36728 6.28976 6.40463 6.21356L8.24963 2.55556L10.0966 6.21356C10.134 6.28976 10.1893 6.35576 10.2577 6.40592C10.3261 6.45607 10.4057 6.48889 10.4896 6.50156L14.5416 7.07656L11.6356 9.84656C11.569 9.91106 11.5193 9.99095 11.4909 10.0792C11.4625 10.1674 11.4562 10.2613 11.4726 10.3526L12.1666 14.3096L8.48063 12.4156C8.40935 12.3788 8.33032 12.3596 8.25013 12.3596C8.16994 12.3596 8.09091 12.3788 8.01963 12.4156H8.02063Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_19">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>


                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_19)">
                                <path
                                    d="M3.11563 15.1826C3.03763 15.6266 3.47563 15.9736 3.86163 15.7756L8.25163 13.5196L12.6406 15.7756C13.0266 15.9736 13.4646 15.6266 13.3866 15.1836L12.5566 10.4536L16.0786 7.09756C16.4086 6.78356 16.2386 6.20956 15.7966 6.14756L10.8986 5.45156L8.71463 1.12456C8.67303 1.03685 8.60739 0.962748 8.52534 0.910857C8.44329 0.858966 8.34821 0.831421 8.25113 0.831421C8.15405 0.831421 8.05897 0.858966 7.97692 0.910857C7.89487 0.962748 7.82923 1.03685 7.78763 1.12456L5.60363 5.45256L0.70563 6.14856C0.26463 6.21056 0.09363 6.78456 0.42263 7.09856L3.94563 10.4546L3.11563 15.1846V15.1826ZM8.02063 12.4156L4.33463 14.3096L5.02863 10.3526C5.04489 10.2615 5.03853 10.1678 5.01011 10.0797C4.98168 9.99168 4.93207 9.91196 4.86563 9.84756L1.95963 7.07756L6.01163 6.50156C6.09553 6.48889 6.17512 6.45607 6.24356 6.40592C6.31201 6.35576 6.36728 6.28976 6.40463 6.21356L8.24963 2.55556L10.0966 6.21356C10.134 6.28976 10.1893 6.35576 10.2577 6.40592C10.3261 6.45607 10.4057 6.48889 10.4896 6.50156L14.5416 7.07656L11.6356 9.84656C11.569 9.91106 11.5193 9.99095 11.4909 10.0792C11.4625 10.1674 11.4562 10.2613 11.4726 10.3526L12.1666 14.3096L8.48063 12.4156C8.40935 12.3788 8.33032 12.3596 8.25013 12.3596C8.16994 12.3596 8.09091 12.3788 8.01963 12.4156H8.02063Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_19">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>


                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_19)">
                                <path
                                    d="M3.11563 15.1826C3.03763 15.6266 3.47563 15.9736 3.86163 15.7756L8.25163 13.5196L12.6406 15.7756C13.0266 15.9736 13.4646 15.6266 13.3866 15.1836L12.5566 10.4536L16.0786 7.09756C16.4086 6.78356 16.2386 6.20956 15.7966 6.14756L10.8986 5.45156L8.71463 1.12456C8.67303 1.03685 8.60739 0.962748 8.52534 0.910857C8.44329 0.858966 8.34821 0.831421 8.25113 0.831421C8.15405 0.831421 8.05897 0.858966 7.97692 0.910857C7.89487 0.962748 7.82923 1.03685 7.78763 1.12456L5.60363 5.45256L0.70563 6.14856C0.26463 6.21056 0.09363 6.78456 0.42263 7.09856L3.94563 10.4546L3.11563 15.1846V15.1826ZM8.02063 12.4156L4.33463 14.3096L5.02863 10.3526C5.04489 10.2615 5.03853 10.1678 5.01011 10.0797C4.98168 9.99168 4.93207 9.91196 4.86563 9.84756L1.95963 7.07756L6.01163 6.50156C6.09553 6.48889 6.17512 6.45607 6.24356 6.40592C6.31201 6.35576 6.36728 6.28976 6.40463 6.21356L8.24963 2.55556L10.0966 6.21356C10.134 6.28976 10.1893 6.35576 10.2577 6.40592C10.3261 6.45607 10.4057 6.48889 10.4896 6.50156L14.5416 7.07656L11.6356 9.84656C11.569 9.91106 11.5193 9.99095 11.4909 10.0792C11.4625 10.1674 11.4562 10.2613 11.4726 10.3526L12.1666 14.3096L8.48063 12.4156C8.40935 12.3788 8.33032 12.3596 8.25013 12.3596C8.16994 12.3596 8.09091 12.3788 8.01963 12.4156H8.02063Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_19">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>


                    </div>
                    <div><span>2%</span></div>

                </div>
            </div>
        </div>
        <!-- // -------------------------display-review------------------------ -->
        <div class="review-display">
            <h2>Reviews</h2>
            <div class="data">
                <div> <img src="logo/profile.png" alt="profile"></div>
                <div>
                    <div class="display-flex">
                        <h3>Nicolas cage</h3><span>3 Days ago</span>
                    </div>
                    <div>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <h4>Greate Product</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration
                        in some form, by injected humour</p>
                    <div><a href="#"><ion-icon name="thumbs-up-outline" class="thum"></ion-icon>like</a>
                        <span>Reply</span>
                    </div>
                </div>

            </div>

            <div class="data">
                <div> <img src="logo/profile.png" alt="profile"></div>
                <div>
                    <div class="display-flex">
                        <h3>mcolas hoe</h3><span>3 Days ago</span>
                    </div>
                    <div>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_155_11)">
                                <path
                                    d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                    fill="#E1A829" />
                            </g>
                            <defs>
                                <clipPath id="clip0_155_11">
                                    <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <h4>Greate Product</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration
                        in some form, by injected humour</p>
                    <div><a href="#"><ion-icon name="thumbs-up-outline" class="thum"></ion-icon>like</a>
                        <span>Reply</span>
                    </div>
                </div>

            </div>
            <div class="view-more-link">
                <a href="#">View All Reviews</a>
            </div>
        </div>

        <!-- // -------------------------input-review------------------------ -->
        <div class="input-review-sec">
            <div class="ques">
                <h3>Write a Review</h3>

            </div>
            <div class="r-form">
                <p>What is it like to Product?</p>
                <div>

                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_155_11)">
                            <path
                                d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                fill="#E1A829" />
                        </g>
                        <defs>
                            <clipPath id="clip0_155_11">
                                <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_155_11)">
                            <path
                                d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                fill="#E1A829" />
                        </g>
                        <defs>
                            <clipPath id="clip0_155_11">
                                <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_155_11)">
                            <path
                                d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                fill="#E1A829" />
                        </g>
                        <defs>
                            <clipPath id="clip0_155_11">
                                <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_155_11)">
                            <path
                                d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                fill="#E1A829" />
                        </g>
                        <defs>
                            <clipPath id="clip0_155_11">
                                <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_155_11)">
                            <path
                                d="M3.86163 15.7755C3.47563 15.9735 3.03763 15.6265 3.11563 15.1835L3.94563 10.4535L0.42263 7.09753C0.09363 6.78353 0.26463 6.20953 0.70563 6.14753L5.60363 5.45153L7.78763 1.12453C7.98463 0.734531 8.51763 0.734531 8.71463 1.12453L10.8986 5.45153L15.7966 6.14753C16.2376 6.20953 16.4086 6.78353 16.0786 7.09753L12.5566 10.4535L13.3866 15.1835C13.4646 15.6265 13.0266 15.9735 12.6406 15.7755L8.24963 13.5195L3.86063 15.7755H3.86163Z"
                                fill="#E1A829" />
                        </g>
                        <defs>
                            <clipPath id="clip0_155_11">
                                <rect width="16" height="16" fill="white" transform="translate(0.25 0.33252)" />
                            </clipPath>
                        </defs>
                    </svg>

                </div>
                <form action="">
                    <label>Review Title</label>
                    <input type="text" placeholder="Title">
                    <label>Review Content</label>
                    <textarea name="content" id="" cols="50" rows="10"></textarea>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include "user-includes/footer.php";
?>
<!-- <script>
  function increment() {
    let inputElement = document.getElementById('quantity');
    let currentValue = parseInt(inputElement.value);
    if (currentValue < 4) {
      inputElement.value = currentValue + 1;
    }
  }

  function decrement() {
    let inputElement = document.getElementById('quantity');
    let currentValue = parseInt(inputElement.value);
    if (currentValue > 0) {
      inputElement.value = currentValue - 1;
    }
  }
</script>
<script>

  function showDescription() {
    document.getElementById('description').style.display = 'block';
    document.getElementById('review').style.display = 'none';
  }

  function showReview() {
    document.getElementById('description').style.display = 'none';
    document.getElementById('review').style.display = 'block';
  }
</script> -->
</body>

</html>