<?php
session_start();
include './config/config.php';

if (!empty($_POST)) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $pass = password_hash($cpassword, PASSWORD_DEFAULT);

    if ($email == 'shalnipalial28@gmail.com') {
        $account = 'admin';
    } else {
        $account = 'user';
    }
    $sql = "SELECT * FROM `login` WHERE `email`='$email' ";
    $res = mysqli_query($conn, $sql);
    $check_email = mysqli_fetch_row($res);
    if ($check_email > 0) {
        echo "email already exist";
    } else {
        if ($password === $cpassword) {
            $query = "INSERT INTO `login`(`email`,`name`,`gender`, `password` , `account_type`) Values('$email','$name','$gender','$pass', '$account')";
            $result = mysqli_query($conn, $query);

            if (!$result) {
                echo "sql errror";
            } else {
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $name;
                $_SESSION['gender'] = $gender;
                $_SESSION['account'] = $account;
                $_SESSION['login_user'] = true;

                header('location:./home/home.php');
            }
        } else {
            echo  "password does not match";
        }
    }
}

?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/19c5c16224.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body class="imgbg">
    <div class="container ">
        <div class=" ">
            <form class="row text-center" method="post">
                <div class="col-md-3 col-sm-3 col-3"></div>
                <div class="col-md-6 col-sm-6 col-6">
                    <h1 class="text-light mt-5 text-center"><b>Sign Up </b></h1>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-5">
                            <label for="email" class="form-label mt-3 text-light"><b>Email</b></label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-7">
                            <input type="email" id="email" name="email" class="form-control mt-3">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-5">
                            <label for="name" class="form-label mt-3 text-light"><b>Name</b></label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-7">
                            <input type="text" id="name" name="name" class="form-control mt-3">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-5">
                            <label for="gender" class="form-label mt-3 text-light"><b>Gender</b></label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-7">
                            <select class="form-select mt-3" aria-label="Default select example" name="gender" id="gender">
                                <option selected disabled value="">Choose...</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Transgender</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-5">
                            <label for="password" class="form-label mt-3 text-light"><b>Password</b></label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-7">
                            <input type="password" id="password" name="password" class="form-control mt-3">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-5">
                            <label for="cpassword" class="form-label mt-3 text-light"><b> Confirm Password</b></label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-7">
                            <input type="password" id="cpassword" name="cpassword" class="form-control mt-3">
                        </div>
                    </div>
                    <div class="mt-3 text-center col-md-12 col-sm-12 col-12 mt-5">
                        <a href="./login.php" class="text-light me-3"><b>Login</b></a>
                        <button type="submit" id="button1" class="btn btn-success  col-sm-" name="submit">Submit</button>
                    </div>


                </div>
                <div class="col-mnd-3"></div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>