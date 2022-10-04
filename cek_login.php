<?php

//aktif session
session_start();

require_once('db_login.php');

$username = $_POST['username'];
$password = $_POST['password'];

//menyeleksi data user
$login = $db->query("select * from akun where username='$username' and password='$password'");

//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

//cek apakah username dan password ditemukan pada database
if($cek>0){

    //memasukkan data dari login ke $data dalam bentuk array
    $data=mysqli_fetch_assoc($login);

    //cek jika user login sebagai admin
    if($data['username']=="admin"){

        //buat session login dan username
        $_SESSION['username'] = $username;
        //alihkan ke halaman dashboard admin
        header("location:dashboard_admin.php");
    }
    else if($data['username']!="admin"){

        //buat session login dan username
        $_SESSION['username'] = $username;
        //alihkan ke home customer
        header("location:bookroom.php");
    }
    else{
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
    }
}
?>