<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <?php 
    session_start();
    require_once('db_login.php');
    ?>
  <nav class="navbar" style="background-color:#F1A661;">
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="img\icon.png" alt="Logo" width="30" class="d-inline-block align-text-top">
            Bebek Voice
            </a>
        </div>
    </nav>
    <div class="container">
        <h1 class="text-center my-4 mb-5">Pembayaran</h1>
    </div>
    <div class="container">
        <div class="row mt-2 mx-auto">
            <div class="col-6">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="img\mandiri1.jpeg" width="150" height="150" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-title fs-4">Bank Mandiri</p>
                            <p class="card-text">A.N. Arya Gessangie Sugyanti Nora Faqih</p>
                            <p class="card-text">Nomor Rekening : 24839248382094</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col-6">
              <div class="card mt-3">
                <div class="text fw-bold fs-5 lh-lg">
                    <!-- ini buat masukin dari post -->
                    <?php
                    $email=test_input($_POST['email']);
                    $nama=test_input($_POST['nama']);
                    $tipe=test_input($_POST['tipe']);
                    $ruang=test_input($_POST['ruang']);

                    //insert into db
                    $input=$db->query("insert into pesanan(nama,email,no_ruang,id_tipe) values('$nama','$email','$ruang','$tipe')");
                    $result=$db->query("select * from tipe where id_tipe='$tipe'");
                    //update status ruang
                    $update=$db->query("update ruang set status=1 where no_ruang='$ruang'");
                    //memasukkan data dari login ke $data dalam bentuk array
                    $data=mysqli_fetch_assoc($result);

                    echo '&nbsp;&nbsp;Email: '.$email.'</br>';
                    echo '&nbsp;&nbsp;Nama: '.$nama.'</br>';
                    echo '&nbsp;&nbsp;Tipe Ruangan: '.$data['nama'].'</br>';
                    echo '&nbsp;&nbsp;Nomor Ruangan: '.$ruang.'</br>';
                    echo '&nbsp;&nbsp;Harga: '.$data['harga'].'</br>';
                    ?>
                    
                </div>
              </div>
                <p>Upload Bukti Pembayaran</p>
                <div class="">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
        </div>
            </div>
        </div>
        <div class="row mx-auto">
        
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>