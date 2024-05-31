<html>
<body>

<link rel="stylesheet" type="text/css" href="f.css">


<?php
@include "user-includes/connection.php";
$picture = $_POST['picture'];
$message = $_POST['message'];
$name = $_POST['name']; 


$sql="INSERT INTO `review-form` ( `picture`, `message`, `name`) VALUES ( '$picture','$message' , '$name ')";
mysqli_query($con, $sql);

?>
  <?php
    $filename= $_FILES["picture"]["name"];
    $tempname=$_FILES["picture"]["tmp_name"];
    $folder= "review/".$filename;
    move_uploaded_file($tempname,$folder);
?> 
<section class="review--form-sec">
    <div class="form">
        <form action="<?php $_PHP_SELF ?>" method="post" >
            <h1> REVIEW FORM </h1>
            <div></div>
             <label>name:</label> name:<input type="text" name="name" required placeholder="name" >
             <label> picture</label> 
             <input type="file" name="picture"  required>
             <label>message</label> 
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
            <input type="submit" value="submit">
        </form>
    </div>

</section>





</body>
</html
