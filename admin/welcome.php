<?php
session_start();

if($_SESSION['level'] = "") {
    header('location: index.php');
}
?>

<DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widht-device-widht, initial-scale=1.0">
    <title>Selamat datang</title>
</head>
<style>
    body{
        background-color: black;
    }
     .jumbotron{
            padding: 30px;
            text-align: center;
        }
        .container{
            margin: 0 auto;
            padding: 30px;
            border-radius: 10px;
        }
        .jumbotron .container{
            max-width: 100%;
            background-color: #1a1a1d;
            color: white;
        }
        .jumbotron h3{
            text-align: center;
            color: white;
            font-family: 'raleway', helvetica, arial, sans-serif;
            font-weight: 600;
            font-size: 40px;
            text-transform: uppercase;
        }
        .jumbotron a{
            color: #66fcf1;
            font-family: 'raleway', helvetica, arial, sans-serif;
            font-weight: 600;
            font-size: 20px;
            text-transform: uppercase;            
        }
</style>
<body>
    <div class="jumbotron"><div class="container">
    <h3>Masuk sebagai admin</h3>
    <a href="data_lapangan.php">Data Lapangan</a>&emsp;
    <a href="data_pembayaran.php">Data Pembayaran</a>&emsp;
    <a href="data_pendaftar.php">Data Pendaftar</a>&emsp;
    <br><br>
    <br><br>
    <a href="../logout.php">LOG OUT</a>
    </div></div>

</html>