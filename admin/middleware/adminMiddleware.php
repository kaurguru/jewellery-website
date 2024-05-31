<?php
session_start();
@include "connection.php";
@include "../includes/functions/myfunctions.php";

if(isset($_SESSION['auth'])){
    if($_SESSION['role-as'] !=1 ){
       redirect("index.php","you are not authorized to access this page");
    }


}else{
    redirect("user-login.php","login to continue");

     
}