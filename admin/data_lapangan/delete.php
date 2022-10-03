<?php
    include "../../koneksi.php"; 
    $id=$_GET["id"];

    $delete = mysqli_query($koneksi, "DELETE FROM data_lapangan WHERE id_lapangan = $id");
    if($delete){
        header('location: data_lapangan.php');
    } else {
        echo "<script>alert('Gagal input data pendaftar')</script>";
    }
?>