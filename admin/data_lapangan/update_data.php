<?php
    include "../../koneksi.php";
    $id_lapangan = $_POST['id_lapangan'];
    $jenis_lapangan = $_POST['jenis_lapangan'];
    $type_lapangan = $_POST['type_lapangan'];


    $update = mysqli_query($koneksi, "UPDATE data_lapangan SET jenis_lapangan='$jenis_lapangan', type_lapangan='$type_lapangan' WHERE id_lapangan = '$id_lapangan'");
    if($update){
        header('location: data_lapangan.php');
    } else {
        echo "<script>alert('Gagal input data pendaftar')</script>";
    }
