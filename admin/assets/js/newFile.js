$(document).ready(function () {


    $(document).on('click', '.delete', function (e) {


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
                                swal("success!", "You clicked the button!", "success");
                                $("#products_table").load(location.href + "#products_table");
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
                                $("#silver_table").load(location.href + "#silver_table");
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
                                $("#artificial_table").load(location.href + "#artificial_table");
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


    // $('.add-to-cart').click(function (e) {
    //         e.preventDefault();
    //         var id = $(this).val();
    //         $.ajax({
    //             type: 'POST',
    //             url: 'add_to_cart.php', // Update the URL to your PHP script
    //             data: { id: id },
    //             dataType: 'json',
    //             success: function (response) {
    //                 // Handle success response here
    //                 if (response.success) {
    //                     alert('Item added to cart successfully!');
    //                 } else {
    //                     alert('Failed to add item to cart!');
    //                 }
    //             },
    //             error: function (xhr, status, error) {
    //                 // Handle error here
    //                 //console.error(xhr.responseText);
    //             }
    //         });
    //     });
    $('.add-to-cart').click(function (e) {
        e.preventDefault();
        var inputField = $('#quantity');
        var qty = parseInt(inputField.val());

        var inputid = $('.id');
        var id = parseInt(inputid.val());
        //  var add= "add";
        // alert(qty);
        // alert(qty);
        $.ajax({
            method: "POST",
            url: "add-to-cart.php",
            data: {
                "id": id,
                "qty": qty,
                "scope": 'add',
            },

            success: function (response) {
                console.log(response);
                if (response == 201) {
                    alert("Product Add to Cart ");
                    //redirect("gold-product-detail.php", "Product Add to Cart");
                } else if (response == 401) {
                    alert('login to continue');
                    //redirect("user-login.php", "ogin to continue");
                } else if (response == 500) {
                    alert('somethimg went wrong');
                    //redirect("gold-product-detail.php", "somethimg went wrong");
                }

            }
        });

    });


});
