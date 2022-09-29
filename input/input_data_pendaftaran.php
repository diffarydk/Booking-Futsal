<?php
    include "../koneksi.php";

    $id_pendaftar = $_POST['id_pendaftar'];
    $nama_pendaftar = $_POST['nama_pendaftar'];
    $nomor_hp = $_POST['nomor_hp'];
    $alamat = $_POST['alamat'];
    $jenis_lapangan = $_POST['jenis_lapangan'];
    $jam_mulai = $_POST['jam_mulai'];
    $jam_selesai = $_POST['jam_selesai'];
    $jenis_pembayaran = $_POST['jenis_pembayaran'];

    $insert = mysqli_query($koneksi, "INSERT INTO data_pendaftar SET id_pendaftar='$id_pendaftar', nama_pendaftar='$nama_pendaftar', nomor_hp='$nomor_hp', alamat='$alamat', jenis_lapangan='$jenis_lapangan', jam_mulai='$jam_mulai', jam_selesai='$jam_selesai', jenis_pembayaran='$jenis_pembayaran'");
    if($insert == true){
    echo $message = 'data sudah masuk';
        echo "<SCRIPT> //not showing me this
            alert('$message')
            window.location.replace('../welcome.php');
        </SCRIPT>";
    } else {
        echo "<script>alert('Gagal input data pendaftar')</script>";
    }
