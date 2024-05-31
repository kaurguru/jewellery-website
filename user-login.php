
<?php
session_start();
include "user-includes/links.php";

include "user-includes/connection.php";

?>
<?php  include "user-includes/header.php";
?>
<section class="login-sec">
    <div class="login center">
               <!-- Login/Registration Form Popup -->
               <div id="loginPopup" class="content">
                        <form action="auth.php" method="post">

                            <span>
                                <h2>Login</h2> 
                                
                            </span>
                            <?php @include "error-msg.php";?>
                            <input id="loginUsername" name="username" type="text" required placeholder="Username">
                            <input id="loginPassword" name="password" type="password" required placeholder="Password">
                            <input class="button" name="login-btn" value="Sign In" type="submit">


                            <!-- <button class="button"  type = "submit"name="submit-login">Login</button> -->
                            <p>Don't have an account? <a href="registration.php">Register</a></p>
                        </form>
                       

    </div>

</section>
</body>       
</html>