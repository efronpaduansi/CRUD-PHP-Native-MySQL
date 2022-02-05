<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
    <style>
        label{
            display:block;
        }
    </style>
</head>
<body>
    <h1>Tambah data buku</h1> <hr>
    <form action="proses_tambah.php" method="POST">
        <label for="judul">Judul :</label>
        <input type="text" name="judul"> <br>
        <label for="pengarang">Pengarang :</label>
        <input type="text" name="pengarang"> <br>
        <label for="harga">Harga :</label>
        <input type="number" name="harga"> <br>
        <label for="stok">Stok :</label>
        <input type="number" name="stok"> <br> <br>
        <button type="submit" name="simpan" value="simpan">Simpan</button>
    </form>
</body>
</html>