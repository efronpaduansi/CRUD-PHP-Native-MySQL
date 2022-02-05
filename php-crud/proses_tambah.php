<!-- Tangkap data yang dikirimkan dari file tambah.php -->
<?php
include "koneksi.php";
$judul = htmlspecialchars($_POST['judul']);
$pengarang = htmlspecialchars($_POST['pengarang']);
$harga = htmlspecialchars($_POST['harga']);
$stok = htmlspecialchars($_POST['stok']);
$sql = "INSERT INTO books(judul, pengarang, harga, stok) VALUES 
        ('$judul', '$pengarang', '$harga', '$stok')"; 
$simpan = mysqli_query($koneksi, $sql );
if($simpan){
    header("location:index.php?simpan=sukses");
}else{
    header("location:index.php?simpan=gagal");
}

?>