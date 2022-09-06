<?php
    include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
</head>
<body>
    <a href="../welcome.php">Back to Home</a>
    <h1>isi di bawah ini</h1>
    <form action="../input/input_data_pendaftaran.php" method="post">

        <label for="">Id Pendaftar</label><br>
        <input type="text" name="id_pendaftar" id=""  value="<?= rand(0000,9999)?>" readonly>
        <br><br>
        <label for="">Nama Pendaftar</label><br>
        <input type="text" name="nama_pendaftar" id="">
        <br><br>
        <label for="">Nomor HP</label><br>
        <input type="tel" name="nomor_hp" id="">
        <br><br>
        <label for="">Alamat</label><br>
        <input type="text" name="alamat" id="">
        <br><br>
        <label for="">Jenis Lapangan</label><br>
        <select name="jenis_lapangan" id="">
            <option value="a">Lapangan A (MATRAS)</option>
            <option value="b">Lapangan B (SINTETIS)</option>
            <option value="b">Lapangan C (VINYL)</option>
        </select>
        <br><br>
        <label for="">Jam Mulai</label><br>
        <input type="time" name="jam_mulai" id="">
        <br><br>
        <label for="">Jam Selesai</label><br>
        <input type="time" name="jam_selesai" id="">
        <br><br>
        <label for="">Jenis Pembayaran</label><br>
        <select name="jenis_pembayaran" id="">
            <option value="cash">CASH</option>
            <option value="transfer">Transfer</option>
        </select>
        <br><br>
        <button href="../welcome.php" type="sumbit">Kirim Data</button>
</form>
</body>
</html>