<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Edit Data Barang</h1>
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "SELECT * FROM barang WHERE id = $id";
            $result = mysqli_query($koneksi, $query);
            $row = mysqli_fetch_assoc($result);
        ?>
            <form action="proses_edit.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="mb-3">
                    <label for="no_transaksi" class="form-label">No Transaksi</label>
                    <input type="text" class="form-control" id="no_transaksi" name="no_transaksi" value="<?php echo $row['no_transaksi']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="kode_barang" class="form-label">Kode Barang</label>
                    <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?php echo $row['kode_barang']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $row['nama_barang']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="merk" name="merk" value="<?php echo $row['merk']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="<?php echo $row['type']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="harga_perolehan" class="form-label">Harga Perolehan</label>
                    <input type="text" class="form-control" id="harga_perolehan" name="harga_perolehan" value="<?php echo $row['harga_perolehan']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="tujuan" class="form-label">Tujuan</label>
                    <input type="text" class="form-control" id="tujuan" name="tujuan" value="<?php echo $row['tujuan']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $row['keterangan']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal_mutasi" class="form-label">Tanggal Mutasi</label>
                    <input type="date" class="form-control" id="tanggal_mutasi" name="tanggal_mutasi" value="<?php echo $row['tanggal_mutasi']; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        <?php
        } else {
            echo "ID tidak ditemukan.";
        }
        ?>
    </div>
</body>

</html>