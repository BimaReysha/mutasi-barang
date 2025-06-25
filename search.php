<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Hasil Pencarian</h1>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Transaksi</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Merk</th>
                    <th>Type</th>
                    <th>Harga Perolehan</th>
                    <th>Tujuan</th>
                    <th>Keterangan</th>
                    <th>Tanggal Mutasi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_GET['keyword'])) {
                    $keyword = $_GET['keyword'];
                    $query = "SELECT * FROM barang WHERE nama_barang LIKE '%$keyword%' OR kode_barang LIKE '%$keyword%'";
                    $result = mysqli_query($koneksi, $query);
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>{$no}</td>
                                <td>{$row['no_transaksi']}</td>
                                <td>{$row['kode_barang']}</td>
                                <td>{$row['nama_barang']}</td>
                                <td>{$row['merk']}</td>
                                <td>{$row['type']}</td>
                                <td>{$row['harga_perolehan']}</td>
                                <td>{$row['tujuan']}</td>
                                <td>{$row['keterangan']}</td>
                                <td>{$row['tanggal_mutasi']}</td>
                              </tr>";
                        $no++;
                    }
                }
                ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-primary">Kembali</a>
    </div>
</body>

</html>