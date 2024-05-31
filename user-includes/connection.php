<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'e-jewellery');

if($con){
    echo  "";
}else{
    echo"not connect";
}

?>