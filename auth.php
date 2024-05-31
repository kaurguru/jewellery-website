<?php
session_start();
@include "connection.php";
@include "admin/config/dbcon.php";
@include "admin/includes/functions/myfunctions.php";
if (isset($_POST["register-btn"])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $rpassword = mysqli_real_escape_string($con, $_POST['r-password']);

    $check_email_query = "SELECT email FROM `login-form` WHERE email ='$email' ";
    $check_email_query_run = mysqli_query($con, $check_email_query);
    if (mysqli_num_rows($check_email_query_run) > 0) {
        $_SESSION['message'] = "Email already Register!";
        header('Location:registration.php');
    } else {
        if ($password == $rpassword) {

            $sql1 = "INSERT INTO `login-form` ( `username`,`email`,`password`) VALUES ('$username' , '$email' , '$password')";
            $mysqli_query = mysqli_query($con, $sql1);
            if ($mysqli_query) {
                $_SESSION['message'] = "Registered Sucessfully...";
                header('Location:user-login.php');
            } else {
                $_SESSION['message'] = "Something went wrong!";
                header('Location:registration.php');
            }

        } else {

            $_SESSION['message'] = "Password Do Not Match";
            header('Location:registration.php');
        }

    }

} else if (isset($_POST["login-btn"])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $login_query = "SELECT * FROM `login-form` WHERE username='$username' && password= '$password' ";
    $login_query_run = mysqli_query($con, $login_query);
    if (mysqli_num_rows($login_query_run) > 0) {

        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_query_run);
        $userid = $userdata['id'];
        $username = $userdata['username'];
        $email = $userdata['email'];
        // $mobile = $userdata['mobile'];
        // $gender = $userdata['gender'];
        // $dob = $userdata['dob'];
        // $address = $userdata['address'];
        // $role_as = $userdata['role-as'];

        $_SESSION['auth_user'] = [
            'user_id' => $userid,
            'username' => $username,
            'email' => $email,
            // 'mobile' => $mobile,
            // 'gender' => $gender,
            // 'dob' => $dob,
            // 'address' => $address
        ];
        $_SESSION['role-as'] = $role_as;

        if ($role_as == 1) {
            session_start();
            redirect("admin/index.php", "Welcome to Dashboard");
        } else {

            redirect("index.php", "Logged In Successfully");
        }


    } else {

        redirect("user-login.php", "Invalid Username or Password");
    }
}
?>