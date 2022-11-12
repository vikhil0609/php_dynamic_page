<?php
include_once('navbar.php');
include 'dbconnect.php';

session_start();
$sql = "SELECT id, course_name, course_duration, course_desc FROM courses_data ORDER BY id DESC";
$result = $conn->query($sql);
$row = [];

if ($result->num_rows > 0) {
      // fetch all data from db into array 
      $row = $result->fetch_all(MYSQLI_ASSOC);
}
?>
<div class="container bg-light bg-gradient">
      <h1 class="mt-4 pt-2 text-center">Home</h1>
      <hr class="text-center">
      <h3 class="me-3">Recently Added</h3>
      <div class="container">
            <div class="row">
                  <?php
                  $max = 0;
                  $arr = [];
                  for ($j = 0; $j < count($row); $j++) {
                        array_push($arr, $row[$j]['id']);
                  }
                  for ($i = 0; $i < 3; $i++) {
                  ?>
                  <div class="col-sm-4">
                        <div class="card my-3">
                              <div class="card-body">
                                    <h5 class="card-title">
                                          <?php echo $row[$i]['course_name']; ?>
                                    </h5>
                                    <p class="mb-0">
                                          <?php echo $row[$i]['course_duration']; ?>h
                                    </p>
                                    <p class="card-text">
                                          <?php echo $row[$i]['course_desc']; ?>
                                    </p>
                                    <div class="text-center">
                                          <a href="#" class="btn btn-primary">Start</a>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <?php
                  }
                  ?>
            </div>

      </div>
</div>