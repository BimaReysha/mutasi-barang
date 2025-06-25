<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mutasi Barang - Islamic Hospital Foundation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Mutasi Barang</h1>
        <h2 class="text-center">Islamic Hospital Foundation Sumatera Barat</h2>
        <div class="mt-4">
            <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
            <form class="d-flex mt-3" action="search.php" method="GET">
                <input class="form-control me-2" type="search" name="keyword" placeholder="Cari barang...">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
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
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM barang";
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
                            <td>
                                <a href='edit.php?id={$row['id']}' class='btn btn-warning'>Edit</a>
                                <a href='hapus.php?id={$row['id']}' class='btn btn-danger'>Hapus</a>
                            </td>
                          </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>