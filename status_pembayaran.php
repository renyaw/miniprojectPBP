<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  session_start();
  require_once('db_login.php');
  echo 'Status Pesanan Anda'.'</br>';
  $email=$_SESSION['email'];
  $result=$db->query("select * from pesanan where email='$email'");
  $data=mysqli_fetch_assoc($result);

  echo 'ID Pesanan: '.$data['id_pesanan'].'</br>';
  echo 'Nama Pemesan: '.$data['nama'].'</br>';
  echo 'Email Pemesan: '.$data['email'].'</br>';
  echo 'Tipe Ruangan:'.$data['id_tipe'].'</br>';
  echo 'Nomor Ruangan:'.$data['no_ruang'].'</br>';
  if($data['status']==0){
    echo 'Pesanan Anda Belum dikonfirmasi';
  }
  else if($data['status']==1){
    echo 'Pesanan Anda Sudah dikonfirmasi';
  }
  else if($data['status']==2){
    echo 'Pesanan Anda Dibatalkan';
  }

  ?>
</body>
</html>