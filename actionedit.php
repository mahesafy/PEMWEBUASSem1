<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
include('koneksi.php');
include('function.php');
        $id = mysqli_escape_string($conn, $_POST['id']); 
        $brand = mysqli_escape_string($conn, $_POST['brand']); 
        $model = mysqli_escape_string($conn, $_POST['model']); 
        $memory = mysqli_escape_string($conn, $_POST['memory']); 
        $storage = mysqli_escape_string($conn, $_POST['storage']); 
        $graphics = mysqli_escape_string($conn, $_POST['graphics']); 
        $processor = mysqli_escape_string($conn, $_POST['processor']); 
        $price = mysqli_escape_string($conn, $_POST['price']); 
        $date = mysqli_escape_string($conn, $_POST['date']);
$query = "UPDATE laptops SET brand='$brand', model='$model', memory='$memory', storage='$storage', graphics='$graphics', processor='$processor', price='$price', date='$date' WHERE id = '$id'";
if($conn->query($query)) {
    lastupdate();
    header("location: index.php");

} else {
    echo "Data Gagal DiUpdate!";

}

?>