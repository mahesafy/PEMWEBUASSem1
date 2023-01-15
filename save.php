<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
//include koneksi file penting
include('koneksi.php');
include('function.php');
//get data dari form
$brand = mysqli_escape_string($conn, $_POST['brand']); 
$model = mysqli_escape_string($conn, $_POST['model']); 
$memory = mysqli_escape_string($conn, $_POST['memory']); 
$storage = mysqli_escape_string($conn, $_POST['storage']); 
$graphics = mysqli_escape_string($conn, $_POST['graphics']); 
$processor = mysqli_escape_string($conn, $_POST['processor']); 
$price = mysqli_escape_string($conn, $_POST['price']); 
$date = mysqli_escape_string($conn, $_POST['date']);

$query = "INSERT INTO laptops (brand, model, memory, storage, graphics, processor, price, date) VALUES ('$brand', '$model', '$memory', '$storage', '$graphics', '$processor', '$price', '$date')";
if($conn->query($query)) {
    lastupdate();
    header("location: index.php");
} else {
    echo "Data Gagal Disimpan!";

}

?>