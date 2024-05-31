<html>

<title>Edit</title>
<link rel="stylesheet" type="text/css" href="../styling.css">

<body>
<?php
     @include "../connection.php";

$discount = $_POST['discount'];
$image = $_POST['image'];
$karat = $_POST['karat'];
$name = $_POST['name'];
$gender = $_POST['gender']; 
$category = $_POST['category']; 
$price = $_POST['price']; 
$quantity = $_POST['quantity']; 

$sqli="INSERT INTO `Gold-earrings` ( `discount`, `image`,`karat`, `name`, `gender`, `category`, `price`, `qty`) VALUES ( '$discount','$image' ,'$karat ' , '$name ' , '$gender ' , '$category ' , '$price  , '$quantity ')";
mysqli_query($con, $sqli);

// $query3= "SELECT  `discount`, `image`, `name`, `gender`, `category`, `price` FROM `Gold-earrings` order by id ASC";
// $queryfire3 = mysqli_query($con,$query3);
//  $num3 = mysqli_num_rows($fire);

?>

<section class="form-earrings">
<a href="earrings-form.php"><ion-icon name="chevron-back-outline" class="back"></ion-icon></a>

    <h1> edit products</h1>
    <div class="form">
    <?php
 if(isset($_GET["id"])){
    $id=$_GET["id"];
    @include("../connection.php");
    $sqli="SELECT * FROM `Gold-earrings` where id=$id";
    $result=mysqli_query($con,$sqli);
    $row=mysqli_fetch_array($result);
   ?>

<?php
 }
?> 
     <form action=" process.php " method="post" >
   
          <div class="first">
             <div><label>discount:</label> </div>
         <div>
         <input type="number" name="discount" required placeholder="discount" value=<?php echo $row["discount"];?>>
         </div>
         
         </div>

         <div class="first">
             <div>
             <label>product image:</label>
             </div>
             <div>
             <input type="file" name="image" required value=<?php echo $row["image"];?>>
             </div>
        
         </div>

         <div class="first">
             <div>
             <label>karat</label> 
             </div>
             <div> 
             <input type="number" name="karat" required placeholder="karat"  value=<?php echo $row["karat"];?> >
             </div>
        
         </div>

         <div class="first">
             <div>  <label>name/ description:</label></div>
             <div>
                <input type=""  name="name" placeholder="description" value=<?php echo $row["name"];?>>
             </div>

         </div>

         <div class="first">
             <div>
             <label>gender:</label>
             </div>
             <div>
                 <input type="radio" name="gender" value="male" > 
                 <span>male</span>
                 <input type="radio" name="gender" value="female">
                 <span>female</span>
             </div>
        </div>

         <div class="first">
             <div>
             <label>category:</label> 
             </div>
             <div>
             <select name="category" id="category" required>
                     <option value="bangles" <?php if($row['category']=="bangles"){echo "selected";} ?> >bangles</option>
                     <option value="earrings" <?php if($row['category']=="earrings"){echo "selected";} ?> >earrings</option>
                     <option value="chains"<?php if($row['category']=="chains"){echo "selected";} ?> >chains</option>
                     <option value="necklaces"<?php if($row['category']=="necklaces"){echo "selected";} ?> >necklaces</option>
                     <option value="rings" <?php if($row['category']=="rings"){echo "selected";} ?> >rings</option>
                     <option value="bracelets"<?php if($row['category']=="bracelets"){echo "selected";} ?> >bracelets</option>
                     <option value="pendants"<?php if($row['category']=="pendants"){echo "selected";} ?> >pendants</option>
                     <option value="gifts" <?php if($row['category']=="gifts"){echo "selected";} ?>>gifts</option>
                 </select>
             </div>
                 
         </div>

            
         <div class="first">
             <div>
             <label>price:</label>
             </div>
             <div>
             <input type="number" required name="price" placeholder="price" value=<?php echo $row["discount"];?> >
             </div>
         
         </div>
        
         <div class="first">
            <div><label>Quantity:</label> </div>
            <div>
            <input type="number" name="quantity" required placeholder="Quantity"value=<?php echo $row["quantity"];?>  >
            </div>
        </div>
         <input type="hidden" name="id" value=<?php echo $row["id"];?> >

         <div>
             <input type="submit" value="edit product"  name="edit"class="submit">
         </div>

     </form>


    
       
    </div>
  
   




  

</section>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html
