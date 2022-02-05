<?php
include "koneksi.php";
$no = $_GET['no'];
$sql = "SELECT * FROM books WHERE no = '$no'";
$query = mysqli_query($koneksi, $sql);

while($buku = mysqli_fetch_assoc($query)){


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
    <style>
        label{
            display:block;
        }
    </style>
</head>
<body>
    <h1>Edit data buku</h1> <hr>
    <form action="proses_edit.php" method="POST">
        <!-- Tangkap no dengan input type hidden -->
        <input type="hidden" name="no" value="<?=$buku['no']; ?>">
        <label for="judul">Judul :</label>
        <input type="text" name="judul" value="<?=$buku['judul']; ?>"> <br>
        <label for="pengarang">Pengarang :</label>
        <input type="text" name="pengarang" value="<?=$buku['pengarang']; ?>"> <br>
        <label for="harga">Harga :</label>
        <input type="number" name="harga" value="<?=$buku['harga']; ?>"> <br>
        <label for="stok">Stok :</label>
        <input type="number" name="stok" value="<?=$buku['stok']; ?>"> <br> <br>
        <button type="submit" name="simpan" value="simpan">Update</button>
    </form>
</body>
</html>
<?php
}
?>
