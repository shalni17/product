<?php
include './config.php';
$id = $_GET['id'];
$query = "DELETE FROM `contact` WHERE `id`= $id";

$result = mysqli_query($conn, $query);

if (!$result) {
    echo "sql errror";
}else{
    header('location:./contactT.php');
}


?>