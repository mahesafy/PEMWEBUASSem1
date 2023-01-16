<?php 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
include 'koneksi.php';
        $id= mysqli_escape_string($conn, $_GET['id']);
        $query = mysqli_query($conn,"SELECT * FROM laptops WHERE id = '$id'");
        if ($data = mysqli_fetch_array($query)) {
            $brand = mysqli_escape_string($conn, $data['brand']); 
            $model = mysqli_escape_string($conn, $data['model']); 
            $memory = mysqli_escape_string($conn, $data['memory']); 
            $storage = mysqli_escape_string($conn, $data['storage']); 
            $graphics = mysqli_escape_string($conn, $data['graphics']); 
            $processor = mysqli_escape_string($conn, $data['processor']); 
            $price = mysqli_escape_string($conn, $data['price']); 
            $date = mysqli_escape_string($conn, $data['date']);
            $image = mysqli_escape_string($conn, $data['image']);
        }elseif(!$data){
          header("Location: index.php");
        }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
      body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }

      form {
        width: 500px;
        margin: 0 auto;
        text-align: center;
        padding: 30px;
        border: 1px solid #ccc;
        border-radius: 10px;
      }

      .form-group {
        margin-bottom: 20px;
      }

      label {
        font-weight: bold;
        display: block;
        margin-bottom: 8px;
      }

      input[type="text"],
      input[type="number"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
      }

      button[type="submit"] {
        width: 100%;
        background-color: blue;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
    </style>
    <title>Tambah Data</title>
  </head>
  <body>
    <div class="container" style="margin-top: 20px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-body">
              <form action="actionedit.php" method="POST" enctype="multipart/form-data">
                <h1>EDIT DATA</h1><input value="<?=$id?>" type="text" name="id" hidden>
                <label>Gambar</label>
                <img src="uploads/<?=$image?>" height="150" width="230" id="blah" src="#" ><br>
                <input type="file" name="file" id="imgInp">
                <label>Brand</label>
                <input value="<?=$brand?>" type="text" name="brand" placeholder="Masukkan Brand" class="form-control"><label>Nama Model</label>
                <input value="<?=$model?>" type="text" name="model" placeholder="Masukkan Nama Model" class="form-control"><label>Memory</label>
                <input value="<?=$memory?>" type="number" name="memory" id="Memory" placeholder="Masukkan Memory" class="form-control"><label>Storage</label>
                <input value="<?=$storage?>" type="text" name="storage" placeholder="Masukkan Storage" class="form-control"><label>Graphics</label>
                <input value="<?=$graphics?>" type="text" name="graphics" placeholder="Masukkan Graphics" class="form-control"><label>Processor</label>
                <input value="<?=$processor?>" type="text" name="processor" placeholder="Masukkan processor" class="form-control"><label>Harga</label>
                <input value="<?=$price?>" type="text" name="price" placeholder="Masukkan Harga" ><label>Tanggal Masuk</label>
                <input value="<?=$date?>" type="date" name="date" placeholder="Masukkan Tanggal contoh 2023-01-19">
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <a href="index.php" class="btn btn-warning">Kembali</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<script>
const img = document.getElementById("blah")
img.addEventListener("error", function(event) {
  event.target.src = "https://lyon.palmaresdudroit.fr/images/joomlart/demo/default.jpg"
  event.onerror = null
})
imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>
  </body>
</html>