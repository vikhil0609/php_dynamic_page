<?php
include_once('navbar.php');
include 'dbconnect.php';

session_start();
$sql = "SELECT course_name, course_duration, course_desc FROM courses_data";
$result = $conn->query($sql);
$row = [];

if ($result->num_rows > 0) {
      // fetch all data from db into array 
      $row = $result->fetch_all(MYSQLI_ASSOC);
}
?>
<div class="container bg-light bg-gradient">
      <h1 class="mt-4 pt-2 text-center">Courses</h1>
      <hr class="text-center">
      <div class="container">
            <div class="row">
                  <?php
                  if (!empty($row))
                        foreach ($row as $rows) {
                  ?>
                  <div class="col-sm-4">
                        <div class="card my-3">
                              <div class="card-body">
                                    <h5 class="card-title text-center">
                                          <?php echo $rows['course_name']; ?>
                                    </h5>
                                    <p class="mb-0">
                                          <?php echo $rows['course_duration']; ?>h
                                    </p>
                                    <p class="card-text">
                                          <?php echo $rows['course_desc']; ?>
                                    </p>
                                    <div class="text-center">
                                          <a href="#" class="btn btn-primary">Start</a>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <?php } ?>
            </div>

      </div>
</div>