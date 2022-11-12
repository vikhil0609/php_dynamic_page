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
      $showError = false;
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

            include 'dbconnect.php';
            // collect value of input field
            $name = $_POST['fullname'];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $confirm_password = $_POST["confirmpassword"];



            if ($password != $confirm_password) {

                  $showError = "Passwords do not match";
            } else {

                  // $conn = new mysqli($servername, $username, $password, $dbname);
                  $sql = "INSERT INTO users_data (name, username, password)
            VALUES ('$name', '$username', '$password')";
                  if ($conn->query($sql) === TRUE) {

                        header("Location:/coursewebsite/index.php"); /* Redirect browser */
                        exit();
                  } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                  }

                  $conn->close();

            }

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
                        <form method="post" action="signup.php">

                              <a href="index.php" class="text-dark text-decoration-none fw-bold "><i
                                          class="fa-solid fa-arrow-left-long d-flex m-0"></i></a>
                              <h1 class="text-center">Sign Up</h1>
                              <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="fullname" id="fullname"
                                          placeholder="Enter Your Name" />
                              </div>
                              <div class="mb-3">
                                    <label for="username" class="form-label">User Name</label>
                                    <input type="text" class="form-control" name="username" id="username" />
                              </div>
                              <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password"
                                          id="exampleInputPassword1" />
                              </div>
                              <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="confirmpassword"
                                          id="exampleInputPassword1" />
                              </div>
                              <div class="mb-3 form-check p-0">
                                    <div class="text-center">
                                          <!-- <a href="index.php" class="btn btn-outline-dark text-decoration-none">Sign
                                                Up</a> -->
                                          <input type="submit"
                                                class="w-auto btn btn-outline-dark text-decoration-none form-control" />
                                    </div>
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
      <script src="https://kit.fontawesome.com/978e90e471.js" crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    -->
</body>

</html>