<?php

//aktif session
session_start();

require_once('db_login.php');

$username = $_POST['username'];
$password = $_POST['password'];

//menyeleksi data user
$login = mysqli_query($db,"select from akun where username='$username' and password='$password'");

//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login)

?>