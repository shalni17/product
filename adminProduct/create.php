<?php
include '../config/config.php';

if (isset($_POST['submit'])) {
  $category = $_POST['category'];
  $type = $_POST['type'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  $image = $_FILES['image'];
  if ($image) {
    $name = $image['name'];
    $temp_name = $image['tmp_name'];
    $full_path = $image['full_path'];
   
    $path = '../image/uploadProductImage/' . $name;
    $isUploaded = move_uploaded_file($temp_name, $path);
  } else {
    echo "upload error";
  }

  $query = "INSERT INTO `electronic_shop`(`category`,`type`,`price`,`quantity`,`image`)VALUES('$category','$type','$price','$quantity','$name')";
  $result = mysqli_query($conn, $query);

  if (!$result) {
    echo "sql errror";
  } else {
  }
}

include '../header/header.php';
include '../navbar/navbar.php';
?>

<div class="container-fluid">
  <form method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-6 col-sm-12 col-12 col-lg-6 col-xxl-6">
        <h1 class="mt-4 mb-4 text-center">Create Products</h1>

        <div class="row mt-2">
          <div class="col-md-4 col-sm-4 col-4">
            <label for="text" class="form-label">Category</label>
          </div>
          <div class="col-md-8 col-sm-8 col-8">
            <select class="form-select" name="category" aria-label="Default select example" id="category">
              <option selected disabled value="">Choose...</option>
              <option value="AC">AC</option>
              <option value="Smart Watch">Smart Watch</option>
              <option value="Smart TV">Smart TV</option>
              <option value="Laptop">Laptop</option>
              <option value="Refrigerator">Refrigerator</option>
              <option value="Fan">Fan</option>
            </select>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-md-4 col-sm-4 col-4">
            <label for="text" class="form-label">Product type</label>
          </div>
          <div class="col-md-8 col-sm-8 col-8">
            <input type="text" class="form-control" name="type" id="type" required>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-md-4 col-sm-4 col-4">
            <label for="text" class="form-label">Product Price</label>
          </div>
          <div class="col-md-8 col-sm-8 col-8">
            <input type="text" class="form-control" name="price" id="price" required>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-md-4 col-sm-4 col-4">
            <label for="text" class="form-label">Quantity</label>
          </div>
          <div class="col-md-8 col-sm-8 col-8">
            <input type="text" class="form-control" name="quantity" id="quantity" required>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-md-4 col-sm-4 col-4">
            <label for="text" class="form-label">Image url</label>
          </div>
          <div class="col-md-8 col-sm-8 col-8">
            <input type="file" class="form-control" name="image" id="image">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 text-end my-2">
            <button type="submit" name="submit" class="btn btn-primary " id="submit">Create</button>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 col-12 col-lg-6  col-xxl-6 mt-5">
        <img src="../image/electronics.jpg" class="img-fluid">
      </div>
    </div>
  </form>
</div>




<?php
include '../footer/footer.php'
?>