<?php

    include "koneksi.php";
    
    error_reporting(1);

    session_start();

    if (isset($_SESSION['username'])) {
        header('location: index.php');
    }

    if (isset($_POST['sumbit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "select * from login where username='$username' and password='$password'";

        $result = mysqli_query($koneksi, $query);
        if ($result->num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            if ($row['hak_akses'] == '1') {
            $_SESSION['username'] = $row['username'];
            $_SESSION['hak_akses'] = $row['hak_akses'];
            header('location: admin/welcome.php');
            } elseif ($row['hak_akses'] == '9') {
            $_SESSION['username'] = $row['username'];
            $_SESSION['hak_akses'] = $row['hak_akses'];
            header('location: welcome.php');
            }
        } else {
            echo "<script>alert('username atau password salah')</script>";
        }
    }
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login form</title>
        <link rel="stylesheet" href="style.css">
        <style>
            body{
                font-family: sans-serif;
                background-image: url('assets/image/background.jpg');
                background-size: cover;
                background-repeat: no-repeat;
            }
        </style>
    </head>
    <body>
        <div> 
            <h4 style="color: red;"><?=$_SESSION['error']?></h4>
            <div class="center">
      <h1>Login</h1>
      <form action="" method="post">
        <div class="txt_field">
          <input type="text" placeholder="Username" name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" placeholder="Password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" name="sumbit" value="Login">
        <div class="signup_link">
          Not a member? <a href="./form/registrasi.php">Signup</a>
        </div>
      </form>
    </div>

    </body>
    </html>