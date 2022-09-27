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
<style>    
    body{
        margin: 0;
        padding: 0;
    }
    .form{
        background-color: green;
        padding: 20px;
        border-radius: 5px;
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
        background-color: black;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        color: white;
    }
    button:hover{
        background-color: white;
    }
    .menu{
            list-style-type: none;
            overflow: hidden;
            background-color: green;
            padding: 0;
            margin: 0;
        }
    .menu-list{
            float: left;
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
            background-color: green;
            color: white;
        }
    </style>
<body>
<ul class="menu">
        <li class="menu-list"><a href="./welcome.php">Home</a></li>
        <li class="menu-list"><a href="../logout.php">Logout</a></li>
    </ul>
    <div class="judul"><h1>isi di bawah ini</h1></div>
    <form class="form" action="../input/input_data_pembayaran.php" method="post">

        <label for="">Id Pembayar</label><br>
        <input type="text" name="id_pembayaran" id="" value="<?= rand(0000,9999)?>" readonly>
        <br><br>
        <label for="">Id Pendaftar</label><br>
        <input type="text" name="id_pendaftar" id="">
        <br><br>
        <label for="">Jenis Lapangan</label><br>
        <select name="jenis_lapangan" id="">
            <option value="a">Lapangan A (MATRAS)</option>
            <option value="b">Lapangan B (SINTETIS)</option>
            <option value="b">Lapangan C (VINYL)</option>
        </select>
        <br><br>
        <label for="">Jenis Pembayaran</label><br>
        <select name="jenis_pembayaran" id="">
            <option value="cash">CASH</option>
            <option value="transfer">Transfer</option>
        </select>
        <br><br>
        <label for="">Nominal Pembayaran</label><br>
        <input type="text" name="nominal_pembayaran" id="">
        <br><br>
        <label for="">Status Pembayaran</label><br>
        <select name="status_pembayaran" id="">
        <option>...</option>
        <option value="Lunas">Lunas</option>
        </select>
        <br><br>
        <button type="sumbit">Kirim Data</button>
</form>
</body>
</html>