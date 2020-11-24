<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formm Sewa</title>
</head>
<body>




    <form action="prosesSewa.php" method="post">

        <label> Judul Buku</label>
        <div><input type="text" name="input-judul"></div>

        <label>Nama Penyewa</label>
        <div><input type="text" name="input-penyewa"></div>

        <label>Durasi Sewa</label>
        <div><input type="text" name="input-durasi"></div>
        
        <div><input type="submit" value="Sewa Buku" name="tombol-sewa"></div>
    </form>

</body>
</html>