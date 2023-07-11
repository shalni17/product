<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Electronic shop</title>
  <script src="https://kit.fontawesome.com/19c5c16224.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-sm-8 col-8">
        <h3 class="ms-4 mt-2">Welcome to our shop</h3>
      </div>
      <div class="col-md-6 col-sm-4 col-4 mt-2 text-end">

        <?php
        if (!$_SESSION['login_user']) {
          echo '
                <a href="../signup.php" class="float-end ">signUp</a>
                <a href="../login.php" class="float-end me-3">Login</a>
            ';
        } else {

          echo  '<div class="dropdown">
            <button class="btn btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            
              <img src="../image/2-35.jpg" class="img-fluid rounded" width="50">
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#"></a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </div>';
        }
        ?>
      </div>

    </div>
  </div>