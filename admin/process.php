<?php
session_start();
include "includes/functions/myfunctions.php";
include "config/dbcon.php";

if (isset($_POST["add-products"])) {
    $discount = $_POST['discount'];
    $image = $_POST['image'];
    $karat = $_POST['karat'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $id = $_POST['id'];


    $image = $_FILES['image']['name'];
    $path = "../artificial";
    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_ext;

    $sql = "INSERT INTO `Gold-earrings` ( `discount`, `image`,`karat`, `name`, `gender`, `category`, `price` ,`qty`)
     VALUES ( '$discount','$filename' ,'$karat ' , '$name ' , '$gender ' , '$category ' , '$price ', '$quantity ')";
    $sql_query = mysqli_query($con, $sql);

    if ($sql_query) {
        move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $filename);
        redirect("add-category.php", "Successfully added a product");
    } else {
        redirect("add-category.php", "something Went wrong");
    }
} else if (isset($_POST["update"])) {
    $discount = $_POST['discount'];
    // $image = $_POST['image'];
    $karat = $_POST['karat'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $id = $_POST['id'];

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];

    if ($new_image != "") {
        // $update_filename= $new_image;
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = time() . '.' . $image_ext;
    } else {
        $update_filename = $old_image;
    }
    $path = "../artificial";

    $sql_query = "UPDATE `Gold-earrings` SET discount='$discount',karat='$karat',image='$update_filename',name='$name',gender='$gender',category='$category',price='$price',qty='$quantity' WHERE id=$id";
    $sqli_query_run = mysqli_query($con, $sql_query);

    if ($sqli_query_run) {
        if ($_FILES['image']['name'] != "") {
            move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $update_filename);
            if (file_exists("../gold-earrings/" . $old_image)) {
                unlink("../gold-earrings/" . $old_image);
            }

        }
        redirect("edit.php?id=$id", "updated");

    } else {
        redirect("edit.php?id= $id", "something wrong");
    }



} else if (isset($_POST["delete"])) {
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $image = mysqli_real_escape_string($con, $_POST['image']);
    $product_query = "SELECT * FROM `Gold-earrings` WHERE id= '$id' ";
    $product_query_run = mysqli_query($con, $product_query);
    $product_data = mysqli_fetch_array($product_query_run);
    $image1 = $product_data['image'];

    $delete_query = "DELETE FROM `Gold-earrings` WHERE id= '$id '";
    $delete_query_run = mysqli_query($con, $delete_query);

    if ($delete_query_run) {

        if (file_exists("../artificial/" . $image)) {
            unlink("../artificial/" . $image);
        }

        //redirect("list-gold.php", " Product Deleted Successfully..");
        echo "200";
    } else {
        //redirect("list-gold..php", " Something Wrong!");
        echo "500";
    }


} else if (isset($_POST["add-silver-products"])) {
    $discount = $_POST['discount'];
    $image = $_POST['image'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $id = $_POST['id'];

    $image = $_FILES['image']['name'];
    $path = "../artificial";
    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_ext;

    $sql = "INSERT INTO `silver-earrings` ( `discount`, `image`, `name`, `gender`, `category`, `price` ,`qty`) VALUES ( '$discount','$filename' , '$name ' , '$gender ' , '$category ' , '$price ', '$quantity ')";
    $sql_query = mysqli_query($con, $sql);

    if ($sql_query) {
        move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $filename);
        redirect("add-silver-category.php", "Successfully added a product");

    } else {
        redirect("add-silver-category.php", "something Went wrong");
    }
} else if (isset($_POST["update-silver"])) {
    $discount = $_POST['discount'];
    // $image = $_POST['image'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $id = $_POST['id'];

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];

    if ($new_image != "") {
        // $update_filename= $new_image;
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = time() . '.' . $image_ext;
    } else {
        $update_filename = $old_image;
    }
    $path = "../artificial";

    $sql_query = "UPDATE `silver-earrings` SET discount='$discount',image= '$update_filename ',name='$name',gender='$gender',category='$category',price='$price',qty='$quantity' WHERE id= $id";
    $sqli_query_run = mysqli_query($con, $sql_query);

    if ($sqli_query_run) {
        if ($_FILES['image']['name'] != "") {
            move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $update_filename);
            if (file_exists("../artificial/" . $old_image)) {
                unlink("../artificial/" . $old_image);
            }
            redirect("edit2.php?id=$id", "updated Sucessfully");
        }


    } else {
        redirect("edit2.php?id= $id", " something wrong");
    }



} else if (isset($_POST["delete-silver"])) {
    $id = mysqli_real_escape_string($con, $_POST['id']);
    //$image = mysqli_real_escape_string($con, $_POST['image']);
    $product_query = "SELECT * FROM `silver-earrings` WHERE id= '$id' ";
    $product_query_run = mysqli_query($con, $product_query);
    $product_data = mysqli_fetch_array($product_query_run);
    $image = $product_data['image'];

    $delete_query = "DELETE FROM `silver-earrings` WHERE id= '$id '";
    $delete_query_run = mysqli_query($con, $delete_query);

    if ($delete_query_run) {

        if (file_exists("../artificial/" . $image)) {
            unlink("../artificial/" . $image);
        }

        //redirect("list-gold.php", " Product Deleted Successfully..");
        echo "200";
    } else {
        //redirect("list-gold..php", " Something Wrong!");
        echo "500";
    }


} else if (isset($_POST["add-artificial-products"])) {
    $discount = $_POST['discount'];
    $image = $_POST['image'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $id = $_POST['id'];

    $image = $_FILES['image']['name'];
    $path = "../artificial";
    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_ext;

    $sql = "INSERT INTO `artificial` ( `discount`, `image`, `name`, `gender`, `category`, `price` ,`qty`) VALUES ( '$discount','$filename ' , '$name ' , '$gender ' , '$category ' , '$price ', '$quantity ')";
    $sql_query = mysqli_query($con, $sql);

    if ($sql_query) {
        move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $filename);
        redirect("add-artificial-category.php", "Successfully added a product");
        //  $_FILES['image']['tmp_name']
    } else {
        redirect("add-artificial-category.php", "something Went wrong");
    }

} else if (isset($_POST["update-artificial"])) {
    $discount = $_POST['discount'];
    // $image = $_POST['image'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $id = $_POST['id'];

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];

    if ($new_image != "") {
        // $update_filename= $new_image;
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = time() . '.' . $image_ext;
    } else {
        $update_filename = $old_image;
    }
    $path = "../artificial";

    $sql_query = "UPDATE `artificial` SET discount='$discount',image='$update_filename',name='$name',gender='$gender',category='$category',price='$price',qty='$quantity' WHERE id= $id";
    $sqli_query_run = mysqli_query($con, $sql_query);

    if ($sqli_query_run) {
        if ($_FILES['image']['name'] != "") {
            move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $update_filename);
            if (file_exists("../artificial/" . $old_image)) {
                unlink("../artificial/" . $old_image);
            }

        }
        redirect("edit3.php?id=$id", "updated");

    } else {
        redirect("edit3.php?id= $id", " something wrong");
    }



} else if (isset($_POST["delete-artificial"])) {
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $image = mysqli_real_escape_string($con, $_POST['image']);

    $product_query = "SELECT * FROM `artificial` WHERE id= '$id' ";
    $product_query_run = mysqli_query($con, $product_query);
    $product_data = mysqli_fetch_array($product_query_run);
    $image1 = $product_data['image'];

    $delete_query = "DELETE FROM `artificial` WHERE id= '$id '";
    $delete_query_run = mysqli_query($con, $delete_query);

    if ($delete_query_run) {

        if (file_exists("../artificial/" . $image)) {
            unlink("../artificial/" . $image);
        }

        //redirect("list-gold.php", " Product Deleted Successfully..");
        echo 200;
    } else {
        //redirect("list-gold..php", " Something Wrong!");
        echo 500;
    }

} else if (isset($_POST["update_order_btn"])) {
    $order_id = $_POST['order_id'];
    $order_status = $_POST['order_status'];

    $updateorder_query = "UPDATE `orders` SET status = '$order_status' WHERE id= '$order_id'";
    $updateorder_query_run = mysqli_query($con, $updateorder_query);

    redirect("view-product.php?order_id= $order_id", " Order status update Successfully");
} else if (isset($_POST["save-profile-detail"])) {
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $id = $_POST['id'];


    $sql_query = "UPDATE `login-form` SET mobile ='$mobile',gender='$gender',dob='$dob',address ='$address' WHERE id= $id";
    $sqli_query_run = mysqli_query($con,$sql_query);

    if ($sql_query) {
        $_SESSION['message'] = " Successfully";
        header("Location:../profile.php");

    } else {
        $_SESSION['message'] = "something Went wrong";
        header("Location:../edit-profile.php");

    }

}else if(isset($_POST["save-btn"])) {
    $id = $_POST['id'];
    $type = $_POST['type'];
    $new = $_POST['wishlist'];

    // $updateorder_query = "UPDATE `Gold-earrings` SET wishlist = '$new' WHERE id = '$id' AND type = '$type'";
    //     $updateorder_query_run = mysqli_query($con, $updateorder_query);
    if($type == "gold") {
        $updateorder_query = "UPDATE `Gold-earrings` SET wishlist = '2' WHERE id= '$id' AND type= '$type'";
        $updateorder_query_run = mysqli_query($con, $updateorder_query);

        redirect("../gold-product-detail.php?id=$id", "Item saved Successfully");
    }else if($type == "silver"){
        $updateorder_query = "UPDATE `silver-earrings` SET wishlist = '$new' WHERE id= '$id' AND type= '$type'";
        $updateorder_query_run = mysqli_query($con, $updateorder_query);

        redirect("../product-detail.php?id=$id", " Item saved Successfully");
    }else if($type == "artificial"){
        $updateorder_query = "UPDATE `artificial` SET wishlist = '$new' WHERE id= '$id' AND type= '$type'";
        $updateorder_query_run = mysqli_query($con, $updateorder_query);

        redirect("../artificial-product-detail.php?id=$id", " Item saved Successfully");
    }
}else if(isset($_POST["remove-wishlist"])) {
    $id = $_POST['id'];
    $type = $_POST['type'];


    // $updateorder_query = "UPDATE `Gold-earrings` SET wishlist = '$new' WHERE id = '$id' AND type = '$type'";
    //     $updateorder_query_run = mysqli_query($con, $updateorder_query);
    if($type == "gold") {
        $updateorder_query = "UPDATE `Gold-earrings` SET wishlist = '0' WHERE id= '$id' AND type= '$type'";
        $updateorder_query_run = mysqli_query($con, $updateorder_query);

        redirect("../wishlist.php?id=$id", "Item Removed");
    }else if($type == "silver"){
        $updateorder_query = "UPDATE `silver-earrings` SET wishlist = '0' WHERE id= '$id' AND type= '$type'";
        $updateorder_query_run = mysqli_query($con, $updateorder_query);

        redirect("../wishlist.php?id=$id", " Item Removed");
    }else if($type == "artificial"){
        $updateorder_query = "UPDATE `artificial` SET wishlist = '0' WHERE id= '$id' AND type= '$type'";
        $updateorder_query_run = mysqli_query($con, $updateorder_query);

        redirect("../wishlist.php?id=$id", " Item Removed");
    }
}
?>