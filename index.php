<?php 
session_start();
include 'koneksi.php';
include 'function.php';
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Laptop</title>
    <style>
      body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }

      .table {
        width: 100%;
        border-collapse: collapse;
      }

      .table th,
      .table td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
      }

      tr:nth-child(even) {
        background-color: #f2f2f2;
      }

      tr:hover {
        background-color: #ddd;
      }

      .table th {
        color: black;
        background-color: #f2f2f2;
      }

      .table tr:hover {
        background-color: #ddd;
      }

      input[type="text"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
      }

      .add {
        width: 150px;
        background-color: blue;
        color: white;
        padding: 12px 12px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      .profile {
        float: left;
        width: 530px;
        background-color: black;
        color: white;
        padding: 12px 10px;
        margin: 0px 0px 12px 12px;
        border: none;
        border-radius:9px;
        cursor: default;
      }

      .logout {
        width: 150px;
        background-color: red;
        color: white;
        padding: 12px 12px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      .edit {
        width: 100px;
        background-color: orange;
        color: white;
        padding: 12px 12px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      .delete {
        width: 100px;
        background-color: red;
        color: white;
        padding: 12px 12px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      .action {
        float: right;
      }
    </style>
  </head>
  <body>
    <span class="profile"> <?=$_SESSION['username']?> | Update Terakhir : <?=getlastUpdate();?> WIB  <a href="logout.php"><button class="logout">Logout</button></a></span>
    <span class="action">
      
      <a href="add.php"><button class="add">Tambah Data</button></a>
      </span>
<table class="table">
    <thead>
        <tr>
        <th width="1%">No</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Memory</th>
            <th>Storage</th> 
            <th>Graphics</th>
            <th>Processor</th>
            <th>Price</th>
            <th>Tanggal Masuk</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $query = mysqli_query($conn,"SELECT * FROM laptops ORDER BY id ASC");
        $hitung_data = mysqli_num_rows($query);
        if ($hitung_data > 0) {
            while ($data = mysqli_fetch_array($query)) {
                echo table($data, true, $no++);
            } } else { ?> 
                <tr>
                    <td colspan='10'><center>Tidak ada data ditemukan</center></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<script>
function deleteData(id, model){
        if (confirm("Are you sure you want to delete "+model+" ?")) {
            window.location.replace("delete.php?id="+id);
        } else {
        }
}
</script>
</body>
</html>