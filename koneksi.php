<?php
$host = 'localhost';
$user = 'rodeom';
$password = 'RAMADHAN001';
$dbname = 'uas';
$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>