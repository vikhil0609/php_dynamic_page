<!doctype html>
<html dir="ltr">


<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css"
            integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <title>Online Courses</title>
</head>

<body>

      <?php
      session_start();
      $showError = false;
      if ($_SERVER["REQUEST_METHOD"] == "POST") {


            // collect value of input field
      
            $username = $_POST["username"];
            $password = $_POST["password"];

            $sql = "SELECT password FROM users_data WHERE username = '$username'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                  // output data of each row
                  $_SESSION['is-user-logged'] = 1;
                  while ($row = $result->fetch_assoc()) {
                        if ($row["password"] == $password) {
                              header("Location:/coursewebsite/admincourses.php");
                        } else {
                              $showError = "User name or password does not match";
                        }
                  }
            } else {
                  $showError = "ACCOUNT DOES NOT EXISTS";
            }
            $conn->close();
      }
      ?>
      <?php
      if ($showError) {

            echo '<div class="alert alert-danger" role="alert">
                  ' . $showError . ' 
                </div> ';
      }
      ?>

      <div class="container-fluid px-0">
            <div class="square">

                  <div class="container p-4">
                        <form method="post" action="adminlogin.php">
                              <div class="mb-3 text-center">
                                    <a class="text-dark text-decoration-none" href="/">
                                          <i class="fa-solid fa-arrow-left-long d-flex m-0"></i>
                                    </a>
                                    <h1>Admin Login</h1>
                              </div>
                              <div class="mb-3">
                                    <label for="username" class="form-label">Admin Username</label>
                                    <input type="text" class="form-control" name="username" id="username" />
                              </div>
                              <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Admin Password</label>
                                    <input type="password" class="form-control" name="password"
                                          id="exampleInputPassword1" />
                              </div>
                              <div class="text-center">
                                    <input type="submit"
                                          class="w-auto form-control btn btn-outline-dark text-decoration-none"
                                          value="Log In" />
                              </div>
                        </form>
                  </div>
            </div>
      </div>


      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    -->
</body>

</html>