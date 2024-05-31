<?php
$page =substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>

<aside
  class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
  id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
      aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" index.php "
      target="_blank">
      <img src="../logo/logo2.png" class="navbar-brand-img h-100" alt="main_logo">
      <!-- <span class="ms-1 font-weight-bold text-white">jewlux</span> -->
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white <?= $page == "index.php"? ' active bg-gradient-primary':''; ?>" href="index.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white  <?= $page == "list-gold.php"? ' active bg-gradient-primary' : '' ; ?>" href="list-gold.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
          </div>
          <span class="nav-link-text ms-1">Gold</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white  <?= $page == "list-silver.php"? ' active bg-gradient-primary' : '' ; ?>" href="list-silver.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
          </div>
          <span class="nav-link-text ms-1">Silver</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white  <?= $page == "list-artificial.php"? ' active bg-gradient-primary' : '' ; ?>" href="list-artificial.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
          </div>
          <span class="nav-link-text ms-1">Artificial</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white  <?= $page == "list-orders.php"? ' active bg-gradient-primary' : '' ; ?>" href="list-orders.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
          </div>
          <span class="nav-link-text ms-1">Orders</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white  <?= $page == "list-account.php"? ' active bg-gradient-primary' : '' ; ?>" href="list-account.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
          </div>
          <span class="nav-link-text ms-1">Accounts</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white  <?= $page == "add-category.php"? ' active bg-gradient-primary' : '' ; ?>" href="add-category.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
          </div>
          <span class="nav-link-text ms-1">Add Gold Products</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-whit <?= $page == "add-silver-category.php"? ' active bg-gradient-primary' : '' ; ?>" href="add-silver-category.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
          </div>
          <span class="nav-link-text ms-1">Add Silver Products</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white  <?= $page == "add-artificial-category.php"? ' active bg-gradient-primary' : '' ; ?>" href="add-artificial-category.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
          </div>
          <span class="nav-link-text ms-1">Add Artificial Category</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
      <a class="btn bg-gradient-primary mt-4 w-100" href="../logout.php" type="button">Logout</a>
    </div>
  </div>
</aside>