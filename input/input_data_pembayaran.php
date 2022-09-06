<?php
include "../koneksi.php";

$id_pembayaran = $_POST['id_pembayaran'];
$id_pendaftaran = $_POST['id_pendaftar'];
$jenis_lapangan = $_POST['jenis_lapangan'];
$jenis_pembayaran = $_POST['jenis_pembayaran'];
$nominal_pembayaran = $_POST['nominal_pembayaran'];
$status_pembayaran = $_POST['status_pembayaran'];

$insert = mysqli_query($koneksi, "INSERT INTO data_pembayaran SET id_pembayaran='$id_pembayaran', id_pendaftar='$id_pendaftaran', jenis_lapangan='$jenis_lapangan', nominal_pembayaran='$nominal_pembayaran', status_pembayaran='$status_pembayaran'");

if ($insert == true){
    header('location: ../admin/welcome.php')
} else {
    echo "<script>alert('Gagal input data pembayaran')</script>";
}