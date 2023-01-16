<?php 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
include 'koneksi.php';

?>
<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <style> 
          body{
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
          input[type="text"], input[type="number"] {
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
                      <form action="save.php" method="POST" enctype="multipart/form-data">
                        <h1>TAMBAH DATA</h1>
                        <label>Gambar</label>
                        <img height="150" width="230" id="blah" src="#" ><br>
                        <input type="file" name="file" id="imgInp">
                        <label>Brand</label>
                        <input type="text" name="brand" placeholder="Masukkan Brand" class="form-control">
                        <label>Nama Model</label>
                        <input type="text" name="model" placeholder="Masukkan Nama Model" class="form-control">
                        <label>Memory</label>
                        <input type="number" name="memory" id="Memory" placeholder="Masukkan Memory" class="form-control">
                        <label>Storage</label>
                        <input  type="text" name="storage" placeholder="Masukkan Storage" class="form-control">
                        <label>Graphics</label>
                        <input  type="text" name="graphics" placeholder="Masukkan Graphics" class="form-control">
                        <label>Processor</label>
                        <input  type="text" name="processor" placeholder="Masukkan processor" class="form-control">
                        <label>Harga</label>
                        <input  type="text" name="price" placeholder="Masukkan Harga" class="form-control datepicker">
                        <label>Tanggal Masuk</label>
                        <input  type="date" name="date" placeholder="Masukkan Tanggal contoh 2023-01-19" class="form-control datepicker">
                        <button type="submit" class="btn btn-success">SIMPAN</button>
                        <a href="index.php" class="btn btn-warning" >Kembali</a>
                      </form>
                  </div>
                </div>
            </div>
          </div>
      </div>
      <script>
imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>
  </body>
</html>