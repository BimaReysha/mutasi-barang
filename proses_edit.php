<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $no_transaksi = $_POST['no_transaksi'];
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $merk = $_POST['merk'];
    $type = $_POST['type'];
    $harga_perolehan = $_POST['harga_perolehan'];
    $asal = $_POST['asal'];
    $tujuan = $_POST['tujuan'];
    $keterangan = $_POST['keterangan'];
    $tanggal_mutasi = $_POST['tanggal_mutasi'];

    $query = "UPDATE barang SET 
              no_transaksi = '$no_transaksi',
              kode_barang = '$kode_barang',
              nama_barang = '$nama_barang',
              merk = '$merk',
              type = '$type',
              harga_perolehan = '$harga_perolehan',
              asal = '$asal',
              tujuan = '$tujuan',
              keterangan = '$keterangan',
              tanggal_mutasi = '$tanggal_mutasi'
              WHERE id = $id";

    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
