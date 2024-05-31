<?php
include "user-includes/links.php";
?>
<?php
@include "user-includes/connection.php";

// $username = $_POST['username'];
// $email = $_POST['email'];
// $password = $_POST['password'];
// $rpassword = $_POST['r-password'];
// $sql1 = "INSERT INTO `login-form` ( `id`,`username`, `email`,`password`,`r-password`, `date-time`) VALUES (NULL, '$username' , '$email ' , '$password ', '$rpassword ', current_timestamp())";
// mysqli_query($con, $sql1);
?>

<?php
session_start();
@include "user-includes/header.php"; ?>
<section class="login-sec">
    <div class="login center">
        <!-- Registration Form Popup (Initially Hidden)  -->
        <div id="registrationPopup" class=" content">

            <form action="auth.php" method="post">
                <span>
                    <h2>Register</h2>

                </span>

             <?php @include "error-msg.php";?>

                <input id="registerUsername" name="username" type="text" required placeholder="Username">
                <input id="registeremail" name="email" type="email" required placeholder="Email">
                <input id="registerPassword" name="password" type="password" required placeholder="Password">
                <input id="repeatPassword" name="r-password" type="password" required placeholder="Conform Password">
                <input class="button" name="register-btn" value="Sign Up" type="submit">

                <p>Already have an account? <a href="user-login.php">Login</a></p>
            </form>
        </div>


    </div>

</section>







</body>

</html>