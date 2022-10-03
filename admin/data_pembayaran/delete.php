<?php
    include "../../koneksi.php"; 
    $id=$_GET["id"];

    $delete = mysqli_query($koneksi, "DELETE FROM data_pembayaran WHERE id_pembayaran = $id");
    if($delete){
        header('location: data_pembayaran.php');
    } else {
        echo "<script>alert('Gagal delet data pembayaran')</script>";
    }
?>