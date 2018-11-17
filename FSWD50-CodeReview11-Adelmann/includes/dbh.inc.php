<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "cr11_nico_adelmann_travelblog";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}





?>