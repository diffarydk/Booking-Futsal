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
    <style>
    body{
        margin: 0;
        padding: 0;
        background-color: #501f3a;
        font-family: arial, helvetica, sans-serif;
    }
    .form{
        background-color: #501f3a;
        padding: 20px;
        border-radius: 5px;
        color: white;
    }
    input, textarea, select{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }
    button{
        width: 100%;
        background-color: steelblue;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        color: white;
    }
    button:hover{
        background-color: black;
    }
    .menu{
            list-style-type: none;
            overflow: hidden;
            background-color: #728fce;
            padding: 0;
            margin: 0;
        }
    .menu-list{
            float: left;
            font-size: 13px;
        } 
    .menu-list a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 24px;
        }
    .menu-list a:hover{
            background-color: black;
        }
        .judul{
            width: 100;
            padding: 1px 20px;
            background-color: #123c69;
            color: white;
            text-align: center;
            text-transform: uppercase;
        }
</style>
</head>
<body>
    <ul class="menu">
        <li class="menu-list"><a href="../welcome.php">Home</a></li>
        <li class="menu-list"><a href="../logout.php">Logout</a></li>
    </ul>
    <div class="judul"><h1>isi di bawah ini</h1></div>
    <form class="form"action="../input/input_data_pendaftaran.php" method="post">

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
            <option value="c">Lapangan C (VINYL)</option>
        </select>
        <br><br>
        <label for="">Jam Mulai</label><br>
        <input type="time" name="jam_mulai" step="3600" id="">
        <br><br>
        <label for="">Jam Selesai</label><br>
        <input type="time" name="jam_selesai" step="3600" id="">
        <br><br>
        <label for="">Jenis Pembayaran</label><br>
        <select name="jenis_pembayaran" id="">
            <option value="cash">CASH</option>
            <option value="transfer">Transfer</option>
        </select>
        <br><br>
        <button type="sumbit">Kirim Data</button>
</form>
</body>
</html>