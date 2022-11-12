<?php
include_once('navbar.php');
session_start();
if(!isset($_SESSION['is-user-logged'])){
      header("Location: index.php");
  }
?>
<div class="container bg-light bg-gradient">
      <h1 class="mt-4 pt-2 text-center">Courses</h1>
      <hr class="text-center">
</div>