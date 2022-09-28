<?php
    include "../koneksi.php";
    $jenis_lapangan = $_POST['jenis_lapangan'];
    $jam_mulai = $_POST['jam_mulai'];
    $jam_selesai = $_POST['jam_selesai'];

    $update = mysqli_query($koneksi, "UPDATE data_pendaftar SET jenis_lapangan='$jenis_lapangan', jam_mulai='$jam_mulai', jam_selesai='$jam_selesai'");
    if($update){
        header('location: data_lapangan.php');
    } else {
        echo "<script>alert('Gagal input data pendaftar')</script>";
    }
