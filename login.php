<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/style.css">
</head>


<body class="imgbg" >
    <div class="container ">
            <form class="row text-center">
                <div class="col-md-3 col-sm-3 col-3"></div>
                <div class="col-md-6 col-sm-6 col-6">
                    <h1 class="text-light mt-5 text-center"><b>LOGIN </b></h1>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-5">
                            <label for="Username" class="form-label mt-3 text-light"><b>Username</b></label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-7">
                            <input type="text" id="loginuser" name="username" class="form-control mt-3">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-5">
                            <label for="password" class="form-label mt-3 text-light"><b>Password</b></label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-7"><input type="password" id="loginpass" name="password" class="form-control mt-3">
                        </div>
                    </div>
                    <div class="mt-3 text-center col-md-12 col-sm-12 col-12 mt-5 ms-4">
                        <a href="./signup.php" class="text-light me-3"><b>Sign up</b></a>
                        <button type="submit" id="button1" class="btn btn-success  col-sm-" name="submit">Submit</button>
                    </div>
                    
                    
                </div>
                <div class="col-mn-3 col-sm-3 col-3"></div>
            </form>
    </div>


<script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>




