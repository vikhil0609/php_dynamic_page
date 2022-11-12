<?php
      include_once('navbar.php');
      $showError = false;
      $showMess = false;
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            include 'dbconnect.php';

            // collect value of input field
            $course_name = $_POST['courseName'];
            $course_duration = $_POST["courseDuration"];
            $course_Desc = $_POST["courseDesc"];

            $sql = "INSERT INTO courses_data (course_name, course_duration,course_desc)
            VALUES ('$course_name', '$course_duration','$course_Desc')";
            if ($conn->query($sql) === TRUE) {
                  $showMess = "COURSE ADDED";
            } else {
                  // $showError = "COURSE  NOT ADDED";
                  echo "NOT WORKING";
            }

            $conn->close();

            }


      ?>
       <?php
      if ($showMess) {
      
            echo '<div class="alert alert-danger" role="alert">
                  ' . $showMess . ' 
                </div> ';
      }
      ?>
      <?php
      if ($showError) {
      
            echo '<div class="alert alert-danger" role="alert">
                  ' . $showError . ' 
                </div> ';
      }
      ?>

<div class="container bg-light bg-gradient rounded-1 w-50">
      <div class="container">
            <h1 class="mt-4 pt-4 text-center">Add Course</h1>
            <div class="m-auto w-75">
                  <form method="POST" action="admincourses.php">
                        <div class="mb-3">
                              <label for="courseName" class="form-label">Course Name</label>
                              <input type="text" class="form-control" name= "courseName" id="courseName">
                        </div>
                        <div class="mb-3">
                              <label for="courseDuration" class="form-label">Course Duration</label>
                              <input type="text" class="form-control" name= "courseDuration" id="courseDuration">
                        </div>
                        
                        <div class="mb-3">
                              <label for="courseDesc" class="form-label">Course Description</label>
                              <input type="text" style="height: 7.5rem;" class="form-control" name ="courseDesc" id="courseDesc">
                        </div>
                        <div class="text-center">
                              <input type="submit" class="w-auto mb-4 form-control btn btn-primary text-decoration-none"
                                    value="Add Course" />
                        </div>
                  </form>
            </div>
      </div>

</div>