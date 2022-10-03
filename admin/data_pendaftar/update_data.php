<?php
    include "../../koneksi.php";
    $id_pendaftar = $_POST['id_pendaftar'];
    $jenis_lapangan = $_POST['jenis_lapangan'];
    $jam_mulai = $_POST['jam_mulai'];
    $jam_selesai = $_POST['jam_selesai'];

    $update = mysqli_query($koneksi, "UPDATE data_pendaftar SET jenis_lapangan='$jenis_lapangan', jam_mulai='$jam_mulai', jam_selesai='$jam_selesai' WHERE id_pendaftar = '$id_pendaftar'");
    if($update){
        header('location: data_pendaftar.php');
    } else {
        echo "<script>alert('Gagal input data pendaftar')</script>";
    }
