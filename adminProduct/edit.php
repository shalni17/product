<?php
include '../config/config.php';

$id = $_GET['id'];

$query  = "SELECT * FROM `electronic_shop` WHERE `id` = $id";
$result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);




include '../header/header.php';
include '../navbar/navbar.php';
?>

<div class="container-fluid">
  <form method="POST">
    <div class="row">
      <div class="col-md-6 col-sm-12 col-12 col-lg-6 col-xxl-6">
        <h1 class="mt-4 mb-4 text-center">Create Products</h1>

        <div class="row mt-2">
          <div class="col-md-4 col-sm-4 col-4">
            <label for="text" class="form-label">Category</label>
          </div>
          <div class="col-md-8 col-sm-8 col-8">
            <select class="form-select" name="category" aria-label="Default select example" name="category" id="category" value="<?php echo $row['category'] ?>" >
            <option selected  value="">Choose...</option>
              <option <?php if($row['category'] == 'AC' ) { echo 'selected'; }   ?>>AC</option>
              <option <?php if($row['category'] == 'Smart Watch' ) { echo 'selected'; }?>>Smart Watch</option>
              <option <?php if($row['category'] == 'Smart TV' ) { echo 'selected'; }?>>Smart TV</option>
              <option <?php if($row['category'] == 'Laptop' ) { echo 'selected'; }?> >Laptop</option>
              <option <?php if($row['category'] == 'Refrigerator' ) { echo 'selected'; }?>>Refrigerator</option>
              <option <?php if($row['category'] == 'Fan' ) { echo 'selected'; }?>>Fan</option>
              <option <?php if($row['category'] == 'mobile' ) { echo 'selected'; }?>>Mobile Phone</option>
            </select>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-md-4 col-sm-4 col-4">
            <label for="text" class="form-label">Product type</label>
          </div>
          <div class="col-md-8 col-sm-8 col-8">
            <input type="text" class="form-control" name="type" id="type" value="<?php echo $row['type'] ?>" required>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-md-4 col-sm-4 col-4">
            <label for="text" class="form-label">Product Price</label>
          </div>
          <div class="col-md-8 col-sm-8 col-8">
            <input type="text" class="form-control" name="price" id="price" value="<?php echo $row['price'] ?>" required>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-md-4 col-sm-4 col-4">
            <label for="text" class="form-label">Quantity</label>
          </div>
          <div class="col-md-8 col-sm-8 col-8">
            <input type="text" class="form-control" name="quantity" id="quantity" value="<?php echo $row['quantity'] ?>" required>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-md-4 col-sm-4 col-4">
            <label for="text" class="form-label">Image url</label>
          </div>
          <div class="col-md-8 col-sm-8 col-8">
            <input type="file" class="form-control" name="image" id="image" value="<?php echo $row['image'] ?>"   required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 text-end my-2">
            <button type="submit" name="submit" class="btn btn-primary " 
            value="<?php
include '../config/config.php';

if (isset($_POST['submit'])) {
    $category = $_POST['category'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $image = $_POST['image'];
    
    

    print_r($image);

    $query = "UPDATE `electronic_shop` SET category = '$category' , type = '$type' , price = '$price' , quantity = '$quantity', image = '$image' WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "sql errror";
    }
}
?>"
            
            id="submit">Create</button>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 col-12 col-lg-6  col-xxl-6 mt-5">
        <img src="./image/electronics.jpg" class="img-fluid">
      </div>
    </div>
  </form>
</div>




<?php
include '../footer/footer.php'
?>
