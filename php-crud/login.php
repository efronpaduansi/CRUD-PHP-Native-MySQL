<?php
//Cek apakah user sudah login
session_start();
// Jika tombol login di pencet
if(isset($_POST['login'])){
    include "koneksi.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_num_rows($query);
    if($row === 1){
        //cek password
        $fetch_pass = mysqli_fetch_assoc($query);
        $cek_pass = $fetch_pass['password'];
        if($cek_pass <> $password){
            echo "Gagal login! Password salah";
        }else{
            $_SESSION['login'] = true;
            echo "<script>
              alert('Login berhasil!');
              document.location.href='index.php';
            </script>";
        }
    }else{
        echo "Gagal login! Username tidak ditemukan";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Library System</h1> <hr>
    <p>Please login to continue</p>
    <br> <br>
    <form action="" method="POST">
        <label for="username">Username :</label>
        <input type="text" name="username" placeholder="Username" require> <br>
        <label for="password">Password :</label>
        <input type="password" name="password" require> <br> <br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>