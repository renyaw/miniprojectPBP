<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bookroom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="daftar.css">
  </head>
  <body style="background-color: #F1A661;">
    <?php

      //session_start();
      require_once('db_login.php');
      if(isset($_GET['pesan'])){
        if($_GET['pesan']=="berhasil"){
          echo "<div class='alert alert-success text-center'>Data Berhasil tersimpan</div>";
        }
      }
    ?>
    <section>
    <div class="container mt-5">
      <div class="row d-flex justify-content-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5  d-none d-md-block">
                <img class="img-fluid mt-5"src="img\icon.png"
                  alt="icon" class="justify-content-center" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                    <div class="d-flex align-items-center pb-1">
                      <i class="fas fa-cubes fa-2x" style="color:#FDEEDC;"></i>
                      <span class="h1 fw-bold mb-0">Bebek Voice</span>
                    </div>
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Buat Akun</h5>
                    <div class="row justify-content-center">
          <div class="">
            <div class="card bg-light">
                <div class="card-body">
                  <form method="POST" autocomplete="on" name="form" onsubmit="return cekDaftar()" action="cek_daftar.php">
                    <!-- ges ini nanti yang room dibikin dropdown ya? -->
                      <div class="form-group">
                          <label for="nama">Nama Lengkap</label>
                          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" >
                          <small class="form-text text-danger" id="nama_error"></small>
                      </div>
                      <br>

                      <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                          <small class="form-text text-danger" id="email_error"></small>
                          <small class="form-text text-success" id="email_success" style="display: none">Email tersedia</small>
                      </div>
                      <br>

                      <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
                          <small class="form-text text-danger" id="username_error"></small>
                          <small class="form-text text-success" id="username_success" style="display: none">Username tersedia</small>
                      </div>
                      <br>

                      <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" id="password" name="password"  placeholder="Masukkan Password">
                          <small class="form-text text-danger" id="password_error"></small>
                      </div>
                      <br>  

                      <div class="form-group">
                          <label for="tipe">Confirm Password</label>
                          <input type="password" class="form-control" id="conpass" name="conpass" placeholder="Masukkan Ulang Password" >
                          <small class="form-text text-danger" id="conpass_error"></small>
                      </div>

                      <br>
                      <div class="col-auto justify-content-md-end d-md-flex">
                        <button type="submit" name="submit" value="submit" class="btn btn-outline-success">Daftar</button>
                      </div>
                  </form>
                    
                </div>
                </div>
          </div>
        </div>
        <p class=" pb-lg-2" style="color: #393f81;">Punya Akun? <a href="login.php"style="color: #393f81;">Login Di Sini</a></p>
    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div></section>
    <script src="script.js"></script>  
  </body>
</html>
