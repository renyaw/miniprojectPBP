<?php
  // include our login information
  //session_start(); //menginisialilasi session lalu akan diteruskan ke get dan post
  require_once('db_login.php'); // memanggil halaman

  $id=$_GET['id'];
  // execute the query
  //Klausa ORDER BY digunakan untuk mengurutkan hasil-set dalam urutan menaik atau menurun
  //sesuai status
  $query = "SELECT * FROM pesanan INNER JOIN tipe ON pesanan.id_tipe=tipe.id_tipe WHERE status='$id' ORDER BY id_pesanan "; 
  //default
  $query2 = "SELECT * FROM pesanan INNER JOIN tipe ON pesanan.id_tipe=tipe.id_tipe ORDER BY id_pesanan"; 
  
  //sort
  $sortR = $db->query($query);
  if (!$sortR){
      die ("Could not the query the database: <br />" . $db->error ."<br>Query: " . $query);
  }
  //default
  $defaultR = $db->query($query2);
  if (!$defaultR){
      die ("Could not the query the database: <br />" . $db->error ."<br>Query: " . $query);
  }
  echo '
  <table class="table table-hover table-striped">
    <tr style="width=90px;">
      <th>Nomor Pesanan</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Room Type</th>
      <th>Room Number</th>
      <th>Bukti</th>
      <th>Status Pembayaran</th>
      <th>Action</th>
    </tr>';
  // fetch and display the results

  if($id=="3"){
    $result = $defaultR;
  }
  else{
    $result = $sortR;
  }
  $i = 1;
  while ($row = $result->fetch_object()){ // fetch_object-> mengembalikan baris saat ini dari kumpulan hasil sebagai objek atau keluarasnfungsi mengembalikan baris saat ini 
    echo '<tr>';
    echo '<td>' .$i. '</td>';
    echo '<td>' .$row->nama. '</td>';
    echo '<td>' .$row->email. '</td>';
    echo '<td>' .$row->nama_tipe. '</td>';
    echo '<td>' .$row->no_ruang. '</td>';
    echo '<td>' .$row->bukti. '</td>';
    echo '<td>' .$row->status. '</td>';
    echo '<td><a class="btn btn-warning btn-sm" href="edit_pesanan.php?id='.$row->id_pesanan.'">Edit</a>&nbsp;&nbsp;
            <a class="btn btn-danger btn-sm" href="delete_customer.php?id='.$row->id_pesanan.'">Delete</a>
            </td>';
    echo '</tr>';
    $i++;
  }
  echo '</table>';
  echo '<br />';
  echo 'Total Rows = ' .$result->num_rows;
  $result->free();
  $db->close();
?>