<?php
include_once('navbar.php');
session_start();
if(!isset($_SESSION['is-user-logged'])){
      header("Location: index.php");
  }

?>
<div class="container bg-light bg-gradient">
      <h1 class="mt-4 pt-2 text-center">Home</h1>
      <hr class="text-center">
      <div class=" container">
            <div class="card" style="width: 18rem;">
                  <!-- <img src="https://www.w3docs.com/uploads/media/default/0001/05/805cddb75d8fdc035886bc8d78487eef8b3845bb.png"
                        class="card-img-top" alt="..."> -->
                  <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                              the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
            </div>
      </div>
</div>