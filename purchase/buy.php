<?php
include '../config/config.php';

if (isset($_POST['purchase'])) {
    $customer = $_POST['customer'];
    $product = $_POST['product'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $tprice = $_POST['tprice'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO `buy`(`customer_name`,`product_name`,`price`,`quantity`,`total_price`,`address`,`phone_no`)VALUES('$customer','$product','$price','$quantity','$tprice','$address','$phone')";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "sql errror";
    }
}

include '../header/header.php';
include '../navbar/navbar.php';
?>



<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1 class="text-center mt-3">Purchase form</h1>
            <form method="POST">
                <div class="row mt-5">
                    <div class="col-md-4">
                        <label for="" class="form-label">Customer_Name</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="customer" class="form-control">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label for="productname" class="form-label">Product_name</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="product" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <label for="price" class="form-label">Price</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="price" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <label for="quantity" class="form-label">Quantity</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="quantity" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <label for="totalprice" class="form-label">Total_Price</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="tprice" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <label for="address" class="form-label">Address</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="address" class="form-control">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-4">
                        <label for="phoneno" class="form-label">Phone_no</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="phone" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success float-end mt-3 mb-3" name="purchase">Purchase</button>
                    </div>
                </div>
            </form>


        </div>
        <div class="col-md-6">
            <img src="../image/Electronics-Shop.png" class="img-fluid">
        </div>


    </div>
</div>


<?php
include '../footer/footer.php';
?>