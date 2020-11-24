<?php





include_once('koneksi.php');


$judul = $_POST['input-judul'];
$penyewa = $_POST['input-penyewa'];
$durasi = $_POST['input-durasi'];

$tanggal_sewa = date('Y-m-d');

$id = $_GET['id'];

$query = "UPDATE sewa  SET  judul = '$judul',
                            penyewa = '$penyewa',
                            durasi = '$durasi'
                            WHERE id = '$id'";
mysqli_query($koneksi,$query);

header("Location: index.php?v1=Berhasil Update");