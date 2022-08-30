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

<body>
    <h3>Masuk sebagai admin</h3>
    <a href="data_lapangan.php">Isi data lapangan</a> ||
    <a href="data_pembayaran.php">Update Pembayaran</a>||
    <br><br>
    <br><br>
    <a href="../logout.php">LOG OUT</a>

</html>