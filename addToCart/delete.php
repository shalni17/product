<?php
include '../config/config.php';
$id = $_GET['id'];
$query = "DELETE FROM `add_to_cart` WHERE `id`= $id";

$result = mysqli_query($conn, $query);

if (!$result) {
    echo "sql errror";
}else{
    header('location:./cartTable.php');
}


?>





