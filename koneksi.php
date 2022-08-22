<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "booking_futsal";
$koneksi = mysqli_connect($host, $user, $password, $database);
if(!$koneksi){
    echo "Koneksi gagal";
}
?>