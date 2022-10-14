<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />
    <link rel="mask-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
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
                <div class="text  fs-5 lh-lg">
                    <!-- ini buat masukin dari post -->
                    <div class="card-header">
                      <p class="fw-bold fs-5 ">Detail Pemesanan</p>
                    </div>
                    <div class="card-body">
                    <?php
                    $scnama=$_POST['nama'];
                    $scnama=ucwords(strtolower($scnama));
                    $email=$_SESSION['email'];
                    $nama=test_input($scnama);
                    $tipe=test_input($_POST['tipe']);
                    $ruang=test_input($_POST['ruang']);

                    //insert into db
                    $input=$db->query("insert into pesanan(nama,email,no_ruang,id_tipe) values('$nama','$email','$ruang','$tipe')");
                    //mengupdate status ruang yang sudah dipesan menjadi 1
                    $update=$db->query("update ruang set status=1 where no_ruang='$ruang'");
                    //mengambil semua data pada tabel tibe yang id_tipe sama dengan tipe
                    $result=$db->query("select * from tipe where id_tipe='$tipe'");
                    //update status ruang
                    
                    //memasukkan data dari login ke $data dalam bentuk array
                    $data=mysqli_fetch_assoc($result);

                    echo 'Email&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;: '.$email.'</br>';
                    echo 'Nama&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&nbsp;: '.$nama.'</br>';
                    echo 'Tipe Ruangan&emsp;&ensp;: '.$data['nama_tipe'].'</br>';
                    echo 'Nomor Ruangan&nbsp;: '.$ruang.'</br>';
                    echo 'Harga&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&nbsp;: Rp'.$data['harga'].'</br>';
                    ?>
                    </div>
                </div>
              </div>
                <p>Upload Bukti Pembayaran</p>
                <div class="">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>

        </div>
        <div class="d-md-flex justify-content-md-end mb-2">
          <a href="bookroom.php"><button type="button" class="btn btn-success"> Submit</button></a>
        </div>
        <div class="row mx-auto">
        
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>