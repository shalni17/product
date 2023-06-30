<?php

$server = "localhost";
$name = "root";
$password = "";
$database = "shalni_db";

$conn = mysqli_connect($server, $name, $password, $database);
if (!$conn) {
  echo "connection error";
}
?>