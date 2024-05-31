

$(document).ready(function () {

    $(document).on('click','.delete', function (e) {


        e.preventDefault();
        var id = $(this).val();
        alert(id);

        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        method: "POST",
                        url: "process.php",
                        data: {
                            'id': id,
                            'delete': true
                        },
                        success: function (response) {
                            console.log(response);
                            if (response == 200) {
                                // $('.refresh').load(location.href + ".refresh");
                                swal("success!", "You clicked the button!", "success");
                                // $("#products_table").load(location.href + "#products_table");
                            } else if (response == 500) {
                                swal("error!", "Something went wrong", "error");
                            }
                        }
                    });
                }
            });
    });

    $(document).on('click', '.delete-silver', function (e) {


        e.preventDefault();
        var id = $(this).val();
        alert(id);

        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        method: "POST",
                        url: "process.php",
                        data: {
                            'id': id,
                            'delete-silver': true
                        },
                        success: function (response) {
                            console.log(response);
                            if (response == 200) {

                                swal("success!", "You clicked the button!", "success");
                                // $("#silver_table").load(location.href +"#silver_table");

                            } else if (response == 500) {
                                swal("error!", "Something went wrong", "error");
                            }
                        }
                    });
                }
            });
    });

    $(document).on('click', '.delete-artificial', function (e) {


        e.preventDefault();
        var id = $(this).val();
        alert(id);

        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        method: "POST",
                        url: "process.php",
                        data: {
                            'id': id,
                            'delete-artificial': true
                        },
                        success: function (response) {
                            console.log(response);
                            if (response == 200) {
                                swal("success!", "You clicked the button!", "success");
                                // $("#artificial_table").load(location.href + "#artificial_table");
                            } else if (response == 500) {
                                swal("error!", "Something went wrong", "error");
                            }
                        }
                    });
                }
            });
    });


    $('.increment-btn').click(function () {
        var inputField = $('#quantity');
        var value = parseInt(inputField.val());
        if (value < 4) {
            inputField.val(value + 1);
        } else {
            alert("You cannot increase the quantity more than 4");
        }
    });

    // Decrement button
    $('.decrement-btn').click(function () {
        var inputField = $('#quantity');
        var value = parseInt(inputField.val());
        if (value > 1) {
            inputField.val(value - 1);
        }
    });



    $('.add-to-cart').click(function () {

        var inputid = $('.id');
        var id = parseInt(inputid.val());

        var inputField = $('.name');
        var name = inputField.val();

        var inputField = $('#quantity');
        var qty = parseInt(inputField.val());

        var inputField = $('.price');
        var price = parseInt(inputField.val());

        var inputField = $('.type');
        var type = inputField.val();

        var inputField = $('.category');
        var category = inputField.val();

        var inputField = $('.image');
        var image = inputField.val();



        addToCart(id, name, qty, price, type, category, image);

    });

    function addToCart(id, name, qty, price, type, category, image) {
        $.ajax({
            method: 'POST',
            url: 'add-to-cart.php',
            data: {
                p_id: id,
                p_name: name,
                p_qty: qty,
                p_type: type,
                p_price: price,
                p_category: category,
                p_image: image

            },
            success: function (response) {
                if (response === 'success') {
                    alert('Item added to cart!');
                    //alertify.set('notifier','position', 'top-right');
                    //alertify.success('<?= $_SESSION["Item added to cart!"];?>');


                } else if (response === 'already_in_cart') {
                    alert('Item is already in the cart...');
                    //alertify.success('<?= $_SESSION["Item is already in the cart..."];?>');

                    window.history.back();
                } else if (response === 'not_logged_in') {
                    alert('Please login before adding items to the cart.');
                    // alertify.success('<?= $_SESSION["Please login before adding items to the cart."];?>');
                } else {
                    alert('Failed to add item to cart.');
                    //alertify.success('<?= $_SESSION["Failed to add item to cart."];?>');

                }

            },
            error: function (xhr, status, error) {
                alert('error ..Failed to add item to cart.');
                //alertify.success('<?= $_SESSION["error ..Failed to add item to cart."];?>');

                console.error(xhr.responseText);
            }
        });
    }
    $('.sav').click(function () {

        var inputid = $('.id');
        var id = parseInt(inputid.val());

        var inputField = $('.name');
        var name = inputField.val();

        var inputField = $('#gender');
        var gender = inputField.val();

        var inputField = $('.price');
        var price = parseInt(inputField.val());

        var inputField = $('.type');
        var type = inputField.val();

        var inputField = $('.category');
        var category = inputField.val();

        var inputField = $('.image');
        var image = inputField.val();



        save_btn(id, name, gender, price, type, category, image);

    });

    function save_btn(id, name, gender, price, type, category, image) {
        $.ajax({
            method: 'POST',
            url: 'save.php',
            data: {
                p_id: id,
                p_name: name,
                gender: gender,
                p_type: type,
                p_price: price,
                p_category: category,
                p_image: image

            },
            success: function (response) {
                if (response === 'success') {
                    alert('Item added to wishlist');
                    //alertify.set('notifier','position', 'top-right');
                    //alertify.success('<?= $_SESSION["Item added to cart!"];?>');


                } else if (response === 'already_in_cart') {
                    alert('Item is already in the wishlist...');
                    //alertify.success('<?= $_SESSION["Item is already in the cart..."];?>');

                    window.history.back();
                } else if (response === 'not_logged_in') {
                    alert('Please login before adding items to the cart.');
                    // alertify.success('<?= $_SESSION["Please login before adding items to the cart."];?>');
                } else {
                    alert('Failed to add item in wishlist.');
                    //alertify.success('<?= $_SESSION["Failed to add item to cart."];?>');

                }

            },
            error: function (xhr, status, error) {
                alert('error ..Failed to add item to wishlist.');
                //alertify.success('<?= $_SESSION["error ..Failed to add item to cart."];?>');

                console.error(xhr.responseText);
            }
        });
    }
    $('.update_qty').click(function () {

        var inputField = $('#quantity');
        var qty = parseInt(inputField.val());

        var inputid = $('.p_id');
        var id = parseInt(inputid.val());

        updateCart(id, qty);

        function updateCart(id, qty) {

            $.ajax({
                method: "POST",
                url: "update-cart.php",
                data: {
                    prod_id: id,
                    prod_qty: qty

                },
                success: function (response) {
                    if (response === '200') {
                        alert('Product quantity updated successfully.');

                        // alertify.success('<?= $_SESSION["Product quantity updated successfully"];?>');
                        // Optionally, you can perform additional actions such as updating the UI.
                    } else if (response === '401') {
                        alert('You are not logged in. Please log in to update your cart.');
                        //alertify.success('<?= $_SESSION["You are not logged in. Please log in to update your cart"];?>');
                        // Redirect the user to the login page or perform other actions.
                    } else if (response === '404') {
                        alert('Product not found in your cart.');
                        // alertify.success('<?= $_SESSION["Product not found in your cart."];?>');
                        // Optionally, you can perform additional actions such as updating the UI.
                    } else if (response === '400') {
                        alert('Missing product ID or quantity.');
                        //alertify.success('<?= $_SESSION["Missing product ID or quantity."];?>');
                        // Optionally, you can perform additional actions such as displaying an error message.
                    } else {
                        //alertify.success('<?= $_SESSION["Failed to update product quantity. Please try again later"];?>');
                        alert('Failed to update product quantity. Please try again later.');
                        // Optionally, you can perform additional actions such as displaying an error message.
                    }
                },
                error: function (xhr, status, error) {
                    //alert('Failed to update product quantity. Please try again later.');
                    alertify.success('<?= $_SESSION["Failed to update product quantity. Please try again later"];?>');

                    console.error(xhr.responseText);
                    // Optionally, you can perform additional actions such as displaying an error message.
                }

            });
        }
    });


    $('.delete_item').click(function () {
        var inputField = $('.c_id');
        var c_id = parseInt(inputField.val());
        // alert(c_id);
        $.ajax({
            method: 'POST',
            url: 'delete-cart.php',
            data: {
                id: c_id
            },
            success: function (response) {
                if (response === '200') {
                    alert('Product deleted from cart successfully.');
                    $('#mycart').load(location.href + "#mycart");
                    // Optionally, you can perform additional actions such as updating the UI.
                } else if (response === '401') {
                    alert('You are not logged in. Please log in to manage your cart.');
                    // Redirect the user to the login page or perform other actions.
                } else if (response === '404') {
                    alert('Product not found in your cart.');
                    // Optionally, you can perform additional actions such as updating the UI.
                } else {
                    alert('Failed to delete product from cart. Please try again later.');
                    // Optionally, you can perform additional actions such as displaying an error message.
                }
            },
            error: function (xhr, status, error) {
                alert('Failed to delete product from cart. Please try again later.');
                console.error(xhr.responseText);
                // Optionally, you can perform additional actions such as displaying an error message.
            }
        });
    });

   


});


