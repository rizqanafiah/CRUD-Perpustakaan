<!doctype html>
<?php
include 'koneksi.php'; ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    if (isset($_POST['login'])) {
        $user = trim(mysqli_real_escape_string($conn, $_POST['user']));
        $pass = sha1(trim(mysqli_real_escape_string($conn, $_POST['pass'])));

        $sql_login = mysqli_query($conn, "SELECT * FROM user WHERE username = '$user' AND password = '$pass'")
            or die(mysqli_error($conn));
        if (mysqli_num_rows($sql_login) > 0) {
            session_start();
            $_SESSION['username'] = $user;
            $_SESSION['password'] = $pass;
            echo "<script>window.location='" . baseurl("index.php") . "';</script>";
        } else {
    ?>
            <div class="alert alert-danger" role="alert">
                Gagal Login
            </div>
    <?php
        }
    }


    ?>
  
  <form action="" method="post">
  <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="text" class="form-control form-control-lg" placeholder="Username" name="user"> 
              </div>

              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="Password" name="pass"> 
              </div>

              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit" name="login">Login</button>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>