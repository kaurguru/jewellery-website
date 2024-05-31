<?php
session_start();
include "includes/header.php";
include "../middleware/adminmiddleware.php";
include "includes/functions/myfunctions.php";
?>
<!-- JavaScript -->


<div class="container">
  <din class="row">
    <div class="cl-md-12">
      <div class="card">
        <div class="card-header">
          <h4>Add Artificial Products</h4>
        </div>
        <div class="card-body">
          <form action="process.php" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
                <div><label>Discount</label> </div>

                <input type="number" name="discount" aria-label="Sizing example input" class="form-control" required
                  placeholder="discount">
              </div>
              <div class="col-md-6">
                <label>Product Image</label>
                <input type="file" name="image" class="form-control" required>
              </div>

              <div class="col-md-12">
                <label>Name/ Description</label>
                <textarea name="name" rows="3" class="form-control" required placeholder="description"></textarea>

                <!-- <input type="text" rows="3" name="name" class="form-control" required placeholder="description"> -->
              </div>
              <div class="col-md-6">
                <label>Gender</label>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" value="men" id="flexRadioDefault1">
                  <label class="form-check-label" for="">
                    Men
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" value="women"  id="flexRadioDefault2" checked>
                  <label class="form-check-label" for="">
                    Women</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" value="bigender" id="flexRadioDefault3">
                  <label class="form-check-label" for="">
                  Bigender
                  </label>
                </div>
              </div>


              <div class="col-md-12">
                <label>Category</label>
                <select name="category" id="category" class="form-control form-select" required>
                  <option selected>Select Category</option>
                  <option value="bangles">bangles</option>
                  <option value="earrings">earrings</option>
                  <option value="chains">chains</option>
                  <option value="necklaces">necklaces</option>
                  <option value="rings">rings</option>
                  <option value="bracelets">bracelets</option>
                  <option value="pendants">pendants</option>
                  <option value="gifts">gifts</option>
                </select>
              </div>
              <div class="col-md-6">
                <label>price</label>
                <input type="number" name="price" class="form-control" placeholder="price" required>
              </div>
              <div class="col-md-6">
                <label>Quantity</label>
                <input type="number" name="quantity" class="form-control" required placeholder="Quantity">
              </div>
              <div class="col-md-12">

                <button type="submit" class="btn btn-primary" name="add-artificial-products"> Save </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </din>
</div>








<?php
include "includes/footer.php";
?>