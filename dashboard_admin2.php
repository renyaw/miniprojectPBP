<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />
    <link rel="mask-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
  </head>

  <body>
    <?php
    //mengecek apakah user sebgai admin
    session_start();
    if($_SESSION['username']!='admin'){
      header('Location:login.php?pesan=bukanadmin');
    }

    ?>
    <!-- Navbar ye -->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color:#F1A661;">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img\icon.png" alt="Logo" width="30" class="d-inline-block align-text-top">
          Bebek Voice
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        </div>
      </div>
    </nav>
    <!-- Udah navbarnya -->

    <!-- Table View -->
    <section id="reservasi">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2>Reservasi</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                <table class="table table-hover table-striped">
                    <tr>
                        <th>Nomor Pesanan</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Room Type</th>
                        <th>Room Number</th>
                        <th>Bukti</th>
                        <th>Status Pembayaran</th>
                        <th>Action</th>
                    </tr>

                    <?php
                        // include our login information
                        //session_start(); //menginisialilasi session lalu akan diteruskan ke get dan post
                        require_once('db_login.php'); // memanggil halaman
                        
                        // execute the query
                        //Klausa ORDER BY digunakan untuk mengurutkan hasil-set dalam urutan menaik atau menurun
                        $query = "SELECT * FROM pesanan INNER JOIN tipe ON pesanan.id_tipe=tipe.id_tipe ORDER BY id_pesanan "; 
                        
                        $result = $db->query($query);
                        if (!$result){
                            die ("Could not the query the database: <br />" . $db->error ."<br>Query: " . $query);
                        }

                        // fetch and display the results
                        $query1 =  
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
                </div>
            </div>
        </div>
    </section>
    <!-- Udah Table View -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
