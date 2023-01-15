<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
include('koneksi.php');
include('function.php');
$id = mysqli_escape_string($conn, $_GET['id']); 
$query = "DELETE FROM laptops WHERE id = '$id'";
if($conn->query($query)) {
    lastupdate();
    header("location: index.php");
} else {
    echo "Data Gagal Disimpan!";
}

?>