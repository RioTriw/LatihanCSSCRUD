<?php
include_once('koneksi.php');

$judul = $_POST['input-judul'];
$penyewa = $_POST['input-penyewa'];
$durasi = $_POST['input-durasi'];

$tanggal_sewa = date('Y-m-d');

$query = "INSERT INTO sewa (judul,penyewa,tanggal_sewa,durasi)
           VALUES ('$judul','$penyewa','$tanggal_sewa','$durasi')";
mysqli_query($koneksi,$query);

header("Location: FormSewa.php?v1=Berhasil Input data");
