<?php
session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>
   admin panel
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  
  <link id="pagestyle" href="assets/css/material.css" rel="stylesheet" />
    <!-- alertify links -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>

<style>
  .form-control {
    text-transform: capitalize; border: 1px solid #d2d6da !important;padding: 8px 10px;margin-bottom: 10px;
  }#i{
    width: 25px;
    height: 25px;
  }
  .table td, .table th {
    white-space: wrap;text-align: center;
}
.remove-bg{
  background: transparent;border: none;
  outline: none;display: inline-block;}
</style>

</head>
<body class="g-sidenav-show  bg-gray-200">
    <?php  include "sidebar.php";?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php  include "navbar.php";?>

