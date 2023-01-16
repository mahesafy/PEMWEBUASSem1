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
        $fileName   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
        $extension  = pathinfo( $_FILES["file"]["name"], PATHINFO_EXTENSION ); // jpg
        $basename   = $fileName . "." . $extension; // 5dab1961e93a7_1571494241.jpg
        $image = $basename;
        $source       = $_FILES["file"]["tmp_name"];
        $destination  = "uploads/{$basename}";
        $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($extension, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file( $source, $destination )){
            // Insert image file name into database
            $insert = $conn->query("INSERT into images (file_name, uploaded_on) VALUES ('".$basename."', NOW())");
            if($insert){
                $statusMsg = "The file ".$basename. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
    if($source==''){
        $query = mysqli_query($conn,"SELECT image FROM laptops WHERE id = '$id'");
        if ($data = mysqli_fetch_array($query)) {
            $image = mysqli_escape_string($conn, $data['image']);
        }
    }
$query = "UPDATE laptops SET image='$image', brand='$brand', model='$model', memory='$memory', storage='$storage', graphics='$graphics', processor='$processor', price='$price', date='$date' WHERE id = '$id'";
if($conn->query($query)) {
    lastupdate();
    header("location: index.php");

} else {
    echo "Data Gagal DiUpdate!";

}

?>