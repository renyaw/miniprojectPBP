<?php
    require_once('db_login.php');
    $nama = test_input($_POST['nama']);
    $email = test_input($_POST['email']);
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);


    $result = "INSERT INTO akun (username, password) VALUES('$username', '$password');";
    $result .= "INSERT INTO pelanggan VALUES(NULL, '$nama', '$email')";

    if ($db->multi_query($result)== TRUE){
        header("location:daftar.php?pesan=berhasil");
    }

?>