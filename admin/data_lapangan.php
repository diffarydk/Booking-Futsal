<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="index.php">Back to Home</a>
    <h1>isi di bawah ini</h1>
    <form action="input_data_lapangan.php" method="post">

        <label for="">Id Lapangan</label><br>
        <input type="text" name="id_lapangan" id="" value="<?= rand(0000,9999)?>" readonly>
        <br><br>
        <label for="">Jenis Lapangan</label><br>
        <select name="jenis_lapangan" id="">
            <option value="a">Lapangan A (MATRAS)</option>
            <option value="b">Lapangan B (SINTETIS)</option>
            <option value="b">Lapangan C (VINYL)</option>
        </select>
        <br><br>
        <br><br>
        <label for="">Type Lapangan</label><br>
        <input name="type_lapangan" id="">
        <br><br>
        <label for="">Status Pembayaran</label><br>
        <select name="status_pembayaran" id="">
        <option value="matras">MATRAS</option>
        <option value="sintetis">SINTETIS</option>
        <option value="vinyl">Vinyl</option>
        </select>
        <br><br>
        <button type="sumbit">Kirim Data</button>
</body>
</html>