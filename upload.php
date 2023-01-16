<?php
// Include the database configuration file
include 'koneksi.php';
$statusMsg = '';
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $fileName   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
    $extension  = pathinfo( $_FILES["file"]["name"], PATHINFO_EXTENSION ); // jpg
    $basename   = $fileName . "." . $extension; // 5dab1961e93a7_1571494241.jpg

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
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>
<form action="" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>