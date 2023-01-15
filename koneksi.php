<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'uas';
$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>