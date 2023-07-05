<?php
include '../config/config.php';
$id = $_GET['id'];
$query = "DELETE FROM `buy` WHERE `id`= $id";

$result = mysqli_query($conn, $query);

if (!$result) {
    echo "sql errror";
}else{
    header('location:./purchaseTable.php');
}


?>





