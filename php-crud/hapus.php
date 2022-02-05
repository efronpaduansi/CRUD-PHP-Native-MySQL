<!-- Menerima data yang dikirimkan dari file index -->
<?php
include "koneksi.php";
// tangkap no yang dikirimkan dengan method GET
$no = $_GET['no'];
$sql = "DELETE FROM books WHERE no = '$no' ";
$hapus = mysqli_query($koneksi, $sql);
if($hapus){
    header("location:index.php?hapus=sukses");
}else{
     header("location:index.php?hapus=gagal");
}

?>