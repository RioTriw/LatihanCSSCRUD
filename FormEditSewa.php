<?php
    include_once("koneksi.php");

    $id = $_GET['id'];

    $query= mysqli_query($koneksi, "SELECT * FROM sewa WHERE id = '$id' ");
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Sewa</title>
</head>
<body>
    <form action="prosesEditSewa.php?id=<?php echo $id;?>" method="post">
        <label> Judul Buku</label>
        <div><input type="text" name="input-judul" value="<?php echo $row['judul']?>"></div>

        <label>Nama Penyewa</label>
        <div><input type="text" name="input-penyewa" value="<?php echo $row['penyewa']?>"></div>

        <label>Durasi Sewa</label>
        <div><input type="text" name="input-durasi" value="<?php echo $row['durasi']?>"></div><br>
        <div><input type="submit" value="Edit Buku" name="tombol-edit"></div>
    </form>

</body>
</html>