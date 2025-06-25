<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no_transaksi = $_POST['no_transaksi'];
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $merk = $_POST['merk'];
    $type = $_POST['type'];
    $harga_perolehan = $_POST['harga_perolehan'];
    $asal = $_POST['asal'];
    $query = "INSERT INTO barang (..., asal, ...) VALUES (..., '$asal', ...)";
    $tujuan = $_POST['tujuan'];
    $tgl_pindah = $_POST['tgl_pindah'];
    $query = "INSERT INTO barang (..., tgl_pindah) VALUES (..., '$tgl_pindah')";
    $keterangan = $_POST['keterangan'];
    $tanggal_mutasi = $_POST['tanggal_mutasi'];

    $query = "INSERT INTO barang (no_transaksi, kode_barang, nama_barang, merk, type, harga_perolehan, tujuan, keterangan, tanggal_mutasi)
          VALUES ('$no_transaksi', '$kode_barang', '$nama_barang', '$merk', '$type', '$harga_perolehan', '$tujuan', '$keterangan', '$tanggal_mutasi')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
