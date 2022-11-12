<?php
include_once('navbar.php');
// session_start();
// if(!isset($_SESSION['is-user-logged'])){
//       header("Location: index.php");
//   }

?>
<div class="container bg-light bg-gradient rounded-1 w-50">
      <div class="container">
            <h1 class="mt-4 pt-4 text-center">Add Course</h1>
            <div class="m-auto w-75">
                  <form>
                        <div class="mb-3">
                              <label for="courseName" class="form-label">Course Name</label>
                              <input type="text" class="form-control" id="courseName">
                        </div>
                        <div class="mb-3">
                              <label for="courseDuration" class="form-label">Course Duration</label>
                              <input type="text" class="form-control" id="courseDuration">
                        </div>
                        <div class="mb-3">
                              <label for="courseDeadline" class="form-label">Course Deadline</label>
                              <input type="text" class="form-control" id="courseDeadline">
                        </div>
                        <div class="mb-3">
                              <label for="courseDesc" class="form-label">Course Description</label>
                              <input type="text" style="height: 7.5rem;" class="form-control" id="courseDesc">
                        </div>
                        <div class="text-center">
                              <input type="submit" class="w-auto mb-4 form-control btn btn-primary text-decoration-none"
                                    value="Add Course" />
                        </div>
                  </form>
            </div>
      </div>

</div>