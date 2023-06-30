<?php
include './config.php';
$id = $_GET['id'];
$query = "DELETE FROM `electronic_shop` WHERE `id`= $id";

$result = mysqli_query($conn, $query);

if (!$result) {
    echo "sql errror";
}else{
    header('location:./product.php');
}


?>



