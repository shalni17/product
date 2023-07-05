<?php
include '../config/config.php';


$query = "SELECT * FROM `electronic_shop`";

$result = mysqli_query($conn, $query);

include '../header/header.php';
include '../navbar/navbar.php';
?>
<div class="container-fluid">
<div class="row">
<h1 class='text-center mt-4 fst-italic mb-5'> Products</h1>

  <?php
  while ($row = mysqli_fetch_assoc($result)) {
    echo "
      <div class='col-md-4'>
        <div class='card'>
          <div class='card-body'>
            <img src= '../image/uploadProductImage/".$row['image'] ."' class='img-fluid'>
            <h1>".$row['category']."</h1>
            <h3>".$row['type']."</h3>
            <h4> Price : ".$row['price']."</h4>
            <a href='../purchase/buy.php?id=" . $row['id'] ."' class='btn btn-primary float-end '>Shop Now</a>
            <a href='../addToCart/cart.php?id=" . $row['id'] . "' class='btn btn-warning float-end me-3'>Add to cart</a>
          </div>
        </div>
      </div>
  ";
  }

  ?>
</div>
</div>

<?php
include '../footer/footer.php';
?>