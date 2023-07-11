<?php
session_start();
include '../config/config.php';

if (isset($_POST['submit'])) {
    $touch = $_POST['touch'];
    $email = $_POST['email'];
    $description = $_POST['description'];


    $query = "INSERT INTO `contact`(`touch`,`email`,`description`)VALUES('$touch','$email','$description')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "sql errror";
    }
}

include '../header/header.php';
include '../navbar/navbar.php';
?>

<div class="container-fluid">
    <h1 class="text-center mb-3 mt-3 ">CONTACT US</h1>
    <form method="POST">
        <div class="row mt-5">
            <div class="col-md-6 col-sm-8 col-8">
                <div class="row">
                    <div class="col-md-5 col-sm-4">
                        <label for="Getting in touch is easy" class="form-label"><b>
                                <h2>Getting in touch is easy!</h2>
                            </b></label>
                    </div>
                    <div class="col-md-7 col-sm-8 mt-3">
                        <input type="text" class="form-control" placeholder="Your name" id="touch" name="touch"required></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <label for="Happy face based on mars" class="form-label  mt-4"><b>
                                <h6>Happy face based on mars</h6>
                            </b></label>
                    </div>
                    <div class="col me-7 mt-3">
                        <input type="text" class="form-control " placeholder="Your Email" id="email" name="email"required></textarea>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <a href="...">
                            Find us here
                        </a>
                    </div>
                    <div class="col me-7 mt-3">
                        <textarea class="form-control" placeholder="Description" id="description" name="description" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <label for="Find us here!" class="form-label mt-4"><b>
                                <h6><u>contact23@coolappse.com</u></h6>
                            </b></label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <a href="https://www.facebook.com/TajHotels/">
                            <i class="fa-brands fa-facebook ms-5"></i>
                        </a>
                        <a href="">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <div class="text-end me-4">
                            <button type="submit" class="btn btn-warning mb-3" name="submit" id="submit">Send to the outer space</button>
                            <button type="submit" class="btn btn-secondary mb-3" name="back" id="button">Back</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-12">
                <img src="../image/1474287957_18TSa8_electronics-shutterstock-470.jpg" class="img-fluid">
            </div>

        </div>
    </form>

</div>





<?php
include '../footer/footer.php'
?>