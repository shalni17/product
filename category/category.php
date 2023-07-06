<?php
include '../config/config.php';

include '../header/header.php';
include '../navbar/navbar.php';

$category = $_GET['category'];

$query = "SELECT * From `electronic_shop` WHERE `category` = '$category'";
$result = mysqli_query($conn, $query);
?>

<div class="container-fluid ms-3 me-3">
    <div class="row">


        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <h1 class='text-center mt-4 fst-italic mb-5'> ".$row['category']."</h1>
                    <div class='col-md-3'>
                        <div class='card'style='width: 100%;'>
                        <div class='card-body'>
                            <img src= '../image/uploadProductImage/" . $row['image'] . "' class='img-fluid'>
                            <h1>" . $row['category'] . "</h1>
                            <h4>" . $row['type'] . "</h4>
                            <h5> Price : " . $row['price'] . "</h5>
                            <a href='../purchase/buy.php?id=" . $row['id'] . "' class='btn btn-primary float-end '>Shop Now</a>
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