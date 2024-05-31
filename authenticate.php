<?php
if(!isset($_SESSION['auth'])){
    redirect("user-login.php","Login to continue");
}
?>