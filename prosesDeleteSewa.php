<?php
include_once('koneksi.php');

$id = $_GET['id'];

$query = "DELETE FROM sewa WHERE id = '$id'";
mysqli_query($koneksi,$query);

header("Location: index.php?v1=Berhasil Delete");