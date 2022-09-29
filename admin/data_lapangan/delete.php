<?php
    include "../../koneksi.php"; 
    $id=$_GET["id"];

    $delete = mysqli_query($koneksi, "DELETE FROM data_pendaftar WHERE id_pendaftar = $id");
    if($delete){
        header('location: data_lapangan.php');
    } else {
        echo "<script>alert('Gagal input data pendaftar')</script>";
    }
?>