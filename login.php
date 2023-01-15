<?php 
include "koneksi.php";

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
if (isset($_POST['submit'])) {
    if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
    }
    if(!$captcha){
          echo 'Mohon Selesaikan Captcha.';
    }else{
        $secretKey = "6Lff5-QjAAAAAE4mZeDK3ktH9t6TxMnTCulAfdlS";
        $ip = $_SERVER['REMOTE_ADDR'];
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
        if($responseKeys["success"]) {
              $username = mysqli_escape_string($conn,$_POST['username']);
              $password = md5(mysqli_escape_string($conn, $_POST['password']));
              $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
              $result = mysqli_query($conn, $sql);
              if ($result->num_rows > 0) {
                  $row = mysqli_fetch_assoc($result);
                  $_SESSION['username'] = $row['username'];
                  header("Location: index.php");
              } else {
                  echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
              }
        }else{
              echo 'Mohon Selesaikan Captcha';
        }
}
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

 <script src='https://www.google.com/recaptcha/api.js' async defer></script>
<style>
    body{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    form {
  width: 300px;
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

input[type="text"], input[type="password"] {
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
.topnav {
  overflow: hidden;
  background-color: orange;
}

.topnav {
  color: #f2f2f2;
  text-align: center;
  padding: 11px 16px;
  text-decoration: none;
  font-size: 17px;
}

</style>
    <title>Login Admin</title>
</head>
<body>
    <div class="topnav">
Github : <a href="https://github.com/mahesafy/PEMWEBUASSem1/">https://github.com/mahesafy/PEMWEBUASSem1/</a>
</div>
    <br><br>
    
<form action='' method='post'>
<h2>Login Admin</h2>
    <label>Username</label>
    <input type="text" name="username" placeholder="Enter Username">
    <label>Password</label>
    <input type="password" placeholder="Password" name="password">
  </div>
   <div class="g-recaptcha" data-sitekey="6Lff5-QjAAAAAHhzo91mVz-W4lVJclWmRn-98pzT"></div>
  <button type="submit" name='submit' class="btn btn-primary">Masuk</button>
        </form>
</body>
</html>