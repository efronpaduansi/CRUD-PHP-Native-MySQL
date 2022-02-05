<!-- Koneksi ke file koneksi.php -->
<?php
// cek session dari file login
session_start();
if(!isset($_SESSION['login'])){
    echo "<script>
        alert('maaf anda harus login dulu');
        document.location.href='login.php';
    </script>";
    exit;
}

include "koneksi.php";
$sql = "SELECT * FROM books";
$query = mysqli_query($koneksi, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP crud</title>
    <style>
        body{
            background:whitesmoke;  
        }
        h1{
            background:grey;
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>Library System</h1> <hr>
    <h2>Data Buku</h2> <br>
    <a href="tambah.php"><button>Tambah data</button></a> <br> <br>
    <table border='1 px solid black'>
        <tr>
            <th>NO</th>
            <th>JUDUL</th>
            <th>PENGARANG</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th>AKSI</th>
        </tr>
        <?php
            while( $buku = mysqli_fetch_assoc($query)){
                echo "<tr>";
                    echo "<td>" . $buku['no'] . "</td>";
                    echo "<td>" . $buku['judul'] . "</td>";
                    echo "<td>" . $buku['pengarang'] . "</td>";
                    echo "<td>" . $buku['harga'] . "</td>";
                    echo "<td>" . $buku['stok'] . "</td>";
                    // Membuat link hapus dan edit
                    echo "<td>";
                        echo "<a href='edit.php?no=" . $buku['no']. "'>Edit</a>"; 
                        echo " | ";
                        echo "<a href='hapus.php?no=" . $buku['no']. "'>Hapus</a>";
                    echo "</td>";
                echo "</tr>";
            }
        ?>
    </table> <br> <br>
  <a href="keluar.php" onclick="return confirm('Anda yakin keluar?')">Keluar</a>
    
    
</body>
</html>