<?php
    include "../../koneksi.php";
    $id = $_GET['id'];
    $select = mysqli_query($koneksi, "SELECT * FROM data_pembayaran WHERE id_pembayaran='$id'");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>Edit Data</h2>
        <?php
        while ($data = mysqli_fetch_array($select)){
            ?>
    <form action="update_data.php"  method="post">
    <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Id pembayaran</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="id_pembayaran" value="<?php echo $data['id_pembayaran'] ?>" readonly>
            </div>
          </div>
    <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Id Pendaftar</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="id_pendaftar" value="<?php echo $data['id_pendaftar'] ?>" readonly>
            </div>
          </div>
            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Jenis lapangan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="jenis_lapangan" value="<?php echo $data['jenis_lapangan'] ?>">
            </div>
          </div>
            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Jenis pembayaran</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="jenis_pembayaran" value="<?php echo $data['jenis_pembayaran'] ?>">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Nominal</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="nominal_pembayaran" value="<?php echo $data['nominal_pembayaran'] ?>">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Status Pembayaran</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="status_pembayaran" value="<?php echo $data['status_pembayaran'] ?>">
            </div>
          </div>
          <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
            <button type="submit" class="col-sm-3 col-form-label">Kirim</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a class="btn btn-outline-primary" href="data_pembayaran.php" name="proses" role="button">Cancel</a>
            </div>
          </div>
        </form>
    </div>
    <?php break;
    }
    ?>
</body>
</html>