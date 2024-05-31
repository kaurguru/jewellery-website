<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <?php
    include "user-includes/connection.php";
    include "admin/includes/functions/myfunction.php";
    include " auth.php";
    // include "authenticate.php";
    

    $order_query = "SELECT  * FROM `carts`";
    $order_query_run = mysqli_query($con, $order_query);
    $order_row = mysqli_num_rows($order_query_run);
    $totalPrice = 0;

    ?>
    <div id="mycart">

        <?php include "user-includes/header.php"; ?>

        <div class="py-3 " style="background:var(--blue);">
            <div class="container">
                <div class="text-white">
                    <a href="index.php" class="text-white">Home/</a><a href="checkout.php"
                        class="text-white">Checkout</a>
                </div>
            </div>
        </div>

        <div class="py-5">



            <div class="container  ">
                <div class="card">
                    <div class="card-body mb-2" style=" padding:40px 30px;">

                        <form action="process-od.php" method="POST" enctype="multipart/form-data">
                            <div class="row">

                                <?php @include "error-msg.php"; ?>


                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <h5>Basic Details</h5>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="fw-bold">Name</label>
                                            <input type="text" name="username" id="username"
                                                placeholder="Enter your full name" class="form-control username">
                                                <small class="text-danger name"></small>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="fw-bold">E-mail</label>
                                            <input type="email" name="email" id="email" placeholder="Enter your email"
                                                class="form-control email">
                                                <small class="text-danger email"></small>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="fw-bold">Phone</label>
                                            <input type="tel" name="phone" id="phone" pattern="[0-9]{10}" minlength="10"
                                                maxlength="10" placeholder="Enter your phone number"
                                                class="form-control phone">
                                                <small class="text-danger phone"></small>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="fw-bold">State</label>
                                            <input type="text" name="state" id="state" placeholder="Enter your State"
                                                class="form-control state">
                                                <small class="text-danger state"></small>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="fw-bold">Landmark</label>
                                            <input type="text" name="landmark" id="landmark" placeholder="Landmark"
                                                class="form-control landmark">
                                                <small class="text-danger "></small>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="fw-bold">Pin Code</label>
                                            <input type="text" name="pincode" id="pincode"
                                                placeholder="Enter your pin code" class="form-control pincode">
                                                <small class="text-danger pincode"></small>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="fw-bold">Address</label>
                                            <textarea name="address" id="address" class="form-control address"
                                                rows="5"></textarea>
                                                <small class="text-danger address"></small>
                                        </div>
                                        <input type="hidden" name="payment_mode" value="COD" class="payment_mode">
                                        <input type="hidden" name="payment_id" value="22222" class="payment_id">
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <h5>Order Details</h5>
                                    <hr>
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <h6>Product</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <h6>Name</h6>
                                        </div>

                                        <div class="col-md-2">
                                            <h6>Price</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>Quantity</h6>
                                        </div>

                                    </div>


                                    <?php
                                    if ($order_row > 0) {
                                        while ($row = mysqli_fetch_array($order_query_run)) {
                                            ?>
                                            <div class="card shadow-sm mb-3">
                                                <div class="row align-items-center">
                                                    <div class="col-md-2">
                                                        <img src="artificial/<?php echo $row['image']; ?>" width="50px"
                                                            alt="product " class="product-img">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h5><?php echo $row['p_name']; ?></h5>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <h5>₹<?php echo $row['price']; ?></h5>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <h5>x<?php echo $row['qty']; ?></h5>
                                                    </div>
                                                    <input type="hidden" name="prod_id" class="prod_id"
                                                        value="<?php echo $row['prod_id']; ?>">
                                                    <input type="hidden" name="qty" class="qty"
                                                        value="<?php echo $row['qty']; ?>">
                                                </div>
                                            </div>
                                            <?php

                                            $totalPrice += $row['price'] * $row['qty'];
                                        }
                                    }
                                    ?>
                                    <hr>

                                    <input type="hidden" name="totalPrice" class="totalPrice"
                                        value="<?= $totalPrice ?>">
                                    <h5>Total Price: <span class="float-end">₹<?= $totalPrice ?>/-</span></h5>
                                    <div class="float-end row">

                                        <button type="submit" name="order-places-btn"
                                            class="btn btn-outline-primiry w-100 order-places-btn"
                                            style="background:var(--blue); color:white; padding:15px;">Conform and
                                            placeorder | COD</button>
                                        <div id="paypal-button-container" class="mt-4"></div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- </section> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- Initialize the JS-SDK -->
    <!-- <script src="https://www.paypal.com/sdk/js?client-id=AeRe6Fo9pno814HPaXju7LQf0o7sbu5IJhs2rpDKNfnPIDnSXIVtzN1l3ECq2LIVL0IAg5izfPDHFip5&currency=USD&components=buttons&enable-funding=venmo"
        data-sdk-integration-source="developer-studio"></script> -->

    <script
        src="https://www.paypal.com/sdk/js?client-id=AeRe6Fo9pno814HPaXju7LQf0o7sbu5IJhs2rpDKNfnPIDnSXIVtzN1l3ECq2LIVL0IAg5izfPDHFip5&enable-funding=venmo">
    </script>

    <!-- <script>
        // Render the Venmo button into #paypal-button-container
        paypal.Buttons().render('#paypal-button-container')
    </script>

    <script>
        let fundingSource

        paypal.Buttons({
            onClick: (data) => {
                // fundingSource = "venmo"
                fundingSource = data.fundingSource

                // Use this value to determine what funding source was used to pay
                // Update your confirmation pages and notifications from "PayPal" to "Venmo"
            },
        })
    </script> -->
    <script>

paypal.Buttons({
    style: {
        layout: 'vertical',
        color: 'blue',
        shape: 'rect',
        label: 'paypal'
    }
})
</script>
<script>

        // var username = $('#username').val();
        // var email = $('#email').val();
        // var phone = $('#phone').val();
        // var state = $('#state').val();
        // var landmark = $('#landmark').val();
        // var pincode = $('#pincode').val();
        // var address = $('#address').val();

        var inputField1 = $('#username');
        var username = inputField1.val();

        var inputField2 = $('#email');
        var email = inputField2.val();

        var inputField3 = $('#phone');
        var phone = inputField3.val();

        var inputField4 = $('#state');
        var state = inputField4.val();

        var inputField5 = $('#landmark');
        var landmark = inputField5.val();

        var inputField6 = $('#pincode');
        var pincode = inputField6.val();

        var inputField7 = $('#address');
        var address = inputField7.val();

        paypal.Buttons({
            onClick() {
                alert(name.length);
                if (username.length == 0) {
                    $('.name').text("*This field is required");
                  
                }
                if (email.length == 0) {
                    $('.email').text("*This field is required");
                   
                }
                if (phone.length == 0) {
                    $('.phone').text("*This field is required");
                    
                }
                if (state.length == 0) {
                    $('.state').text("*This field is required");
                    
                }
            
                if (pincode.length == 0) {
                    $('.pincode').text("*This field is required");
                    
                }
                if (address.length == 0) {
                    $('.address').text("*This field is required");
                   
                }
                if(username.length == 0 ||email.length == 0 ||phone.length == 0 ||state.length == 0 ||pincode.length == 0 ||address.length == 0  ){
                    return false;
                }
            }
        })
    </script>

    <script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and currency
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '<?= $totalPrice ?>' // Set the amount here
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction
      return actions.order.capture().then(function(details) {
        // Show a success message to the buyer
        alert('Transaction completed by ' + details.payer.name.given_name);
        
        // Optionally, you can send the details to your server for further processing
        // Example: 
        fetch('/paypal-transaction-complete', {
          method: 'post',
          headers: {
            'content-type': 'application/json'
          },
          body: JSON.stringify({
            orderID: data.orderID,
            details: details
          })
        }).then(response => {
          // Handle the response from your server
          if (response.ok) {
            // Redirect or update the UI as needed
          } else {
            // Handle any errors
          }
        });
      });
    }
  }).render('#paypal-button-container');
</script>





    <!-- <script>

        // -----------------------------------------
        import express from "express";
        import fetch from "node-fetch";
        import "dotenv/config";
        import path from "path";

        const { PAYPAL_CLIENT_ID, PAYPAL_CLIENT_SECRET, PORT = 8888 } = process.env;
        const base = "https://api-m.sandbox.paypal.com";
        const app = express();

        // host static files
        app.use(express.static("client"));

        // parse post params sent in body in json format
        app.use(express.json());

        /**
         * Generate an OAuth 2.0 access token for authenticating with PayPal REST APIs.
         * @see https://developer.paypal.com/api/rest/authentication/
         */
        const generateAccessToken = async () => {
            try {
                if (!PAYPAL_CLIENT_ID || !PAYPAL_CLIENT_SECRET) {
                    throw new Error("MISSING_API_CREDENTIALS");
                }
                const auth = Buffer.from(
                    PAYPAL_CLIENT_ID + ":" + PAYPAL_CLIENT_SECRET
                ).toString("base64");
                const response = await fetch(`${base}/v1/oauth2/token`, {
                    method: "POST",
                    body: "grant_type=client_credentials",
                    headers: {
                        Authorization: `Basic ${auth}`,
                    },
                });

                const data = await response.json();
                return data.access_token;
            } catch (error) {
                console.error("Failed to generate Access Token:", error);
            }
        };

        async function handleResponse(response) {
            try {
                const jsonResponse = await response.json();
                return {
                    jsonResponse,
                    httpStatusCode: response.status,
                };
            } catch (err) {
                const errorMessage = await response.text();
                throw new Error(errorMessage);
            }
        }

        /**
         * Create an order to start the transaction.
         * @see https://developer.paypal.com/docs/api/orders/v2/#orders_create
         */
        const createOrder = async (cart) => {
            // use the cart information passed from the front-end to calculate the purchase unit details
            console.log(
                "shopping cart information passed from the frontend createOrder() callback:",
                cart
            );

            const accessToken = await generateAccessToken();
            const url = `${base}/v2/checkout/orders`;

            const payload = {
                intent: "CAPTURE",
                purchase_units: [
                    {
                        amount: {
                            currency_code: "INR",//USD
                            value: "",
                        },
                    },
                ],
            };


            const response = await fetch(url, {
                headers: {
                    "Content-Type": "application/json",
                    Authorization: `Bearer ${accessToken}`,
                    // Uncomment one of these to force an error for negative testing (in sandbox mode only).
                    // Documentation: https://developer.paypal.com/tools/sandbox/negative-testing/request-headers/
                    // "PayPal-Mock-Response": '{"mock_application_codes": "MISSING_REQUIRED_PARAMETER"}'
                    // "PayPal-Mock-Response": '{"mock_application_codes": "PERMISSION_DENIED"}'
                    // "PayPal-Mock-Response": '{"mock_application_codes": "INTERNAL_SERVER_ERROR"}'
                },
                method: "POST",
                body: JSON.stringify(payload),
            });

            return handleResponse(response);
        };

        // createOrder route
        app.post("/api/orders", async (req, res) => {
            try {
                // use the cart information passed from the front-end to calculate the order amount detals
                const { cart } = req.body;
                const { jsonResponse, httpStatusCode } = await createOrder(cart);
                res.status(httpStatusCode).json(jsonResponse);
            } catch (error) {
                console.error("Failed to create order:", error);
                res.status(500).json({ error: "Failed to create order." });
            }
        });
        /**
         * Capture payment for the created order to complete the transaction.
         * @see https://developer.paypal.com/docs/api/orders/v2/#orders_capture
         */
        const captureOrder = async (orderID) => {
            const accessToken = await generateAccessToken();
            const url = `${base}/v2/checkout/orders/${orderID}/capture`;

            const response = await fetch(url, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    Authorization: `Bearer ${accessToken}`,
                    // Uncomment one of these to force an error for negative testing (in sandbox mode only).
                    // Documentation:
                    // https://developer.paypal.com/tools/sandbox/negative-testing/request-headers/
                    // "PayPal-Mock-Response": '{"mock_application_codes": "INSTRUMENT_DECLINED"}'
                    // "PayPal-Mock-Response": '{"mock_application_codes": "TRANSACTION_REFUSED"}'
                    // "PayPal-Mock-Response": '{"mock_application_codes": "INTERNAL_SERVER_ERROR"}'
                },
            });

            return handleResponse(response);
        };

        // captureOrder route
        app.post("/api/orders/:orderID/capture", async (req, res) => {
            try {
                const { orderID } = req.params;
                const { jsonResponse, httpStatusCode } = await captureOrder(orderID);
                res.status(httpStatusCode).json(jsonResponse);
            } catch (error) {
                console.error("Failed to create order:", error);
                res.status(500).json({ error: "Failed to capture order." });
            }
        }); // serve index.html
        app.get("/", (req, res) => {
            res.sendFile(path.resolve("checkout.php"));
        });

        app.listen(PORT, () => {
            console.log(`Node server listening at http://localhost:${PORT}/`);
        }); 
    </script> -->

    <?php include "user-includes/footer.php"; ?>
    <?php
// paypal-transaction-complete.php

// Get the JSON data from the request body
$data = json_decode(file_get_contents('php://input'), true);

$orderID = $data['orderID'];
$details = $data['details'];

// Process the payment details as needed (e.g., save to database, update order status)

// Return a response
header('Content-Type: application/json');
echo json_encode(['status' => 'success']);
