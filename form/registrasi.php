<?php
    require '../function/function_registrasi.php';

    if(isset($_POST["register"])){

        if(registerasi($_POST) > 0){
            header("location: ../index.php");
            echo"<script>alert('user di tambahkan')</script>";
        }else{
            echo mysqli_error($koneksi);
        }
       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
    <style>
        label{
            display:block;
        }
        body {
            font-family:sans-serif;
            background-image: url("../asset/img/futsal.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        .kotak_login {
            width: 350px;
            background: white;
            margin: 80px auto;
            padding: 30px 20px;
            text-align: center;
            border-radius: 10px;
            background-color: #6290c8;
        }
        .input_form {
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            font-size: 11pt;
            margin-bottom: 20px;
            border-color: #1d3461;
            border-radius: 10px;       
        }
        .judul {
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
        }
        .kotak_login p{
            text-align: left;
        }
    </style>
<body>
    <h1 class="judul">welcome to registrasi</h1>

    <form class="kotak_login" action="" method="post">
       
                <input class="input_form" type="text" placeholder="id user" name="id_user" id="" value="<?= rand(0000, 9999)?>" readonly><br>
                <br>
                <input class="input_form" type="text" placeholder="Username" name="username" required><br>
                <br>
                <input class="input_form" type="password" placeholder="Password" name="password" required><br>
                <br>
                <input class="input_form" type="password" placeholder="konfirmasi password" name="password2" required><br>
                <br>

                <button type="submit" name="register">register</button>
        <p><a href="../index.php">sudah memiliki akun</a></p>
    </form>
</body>
</html>