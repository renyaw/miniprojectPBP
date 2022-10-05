<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bookroom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="daftar.css">
  </head>
  <body>
    <section style="background-color: #F1A661;">
    <div class="container">
      <div class="row d-flex justify-content-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="img\icon.png"
                  alt="icon" class="justify-content-center" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                  <form>
                    <div class="d-flex align-items-center pb-1">
                      <i class="fas fa-cubes fa-2x" style="color:#FDEEDC;"></i>
                      <span class="h1 fw-bold mb-0">Bebek Voice</span>
                    </div>
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Buat Akun</h5>
                    <div class="row justify-content-center">
          <div class="">
            <div class="card">
                    <div class="card-body">
                      <?php
                        if (isset($_POST['submit'])) {
                          $nama = test_input($_POST['nama']);
                          $email = test_input($_POST['email']);
                          $username = test_input($_POST['username']);
                          $password = test_input($_POST['password']);


                          $result = "INSERT INTO akun (username, password) VALUES('$username', '$password');";
                          $result .= "INSERT INTO pelanggan VALUES(NULL, '$nama', '$email');";

                          if ($db->multi_query($result)== true):
                          ?>
                              <div class="alert alert-success">Data berhasil disimpan</div>
                          <?php else: ?>
                              <div class="alert alert-error">Data gagal disimpan <?php echo $db->error ?></div>
                          }
                          <?php
                          endif;
                        }
                      ?>
                        <form method="POST" name="form" onsubmit="return cekdaftar()">
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
                                <input type="text" class="form-control" id="password" name="password"  placeholder="Masukkan Password">
                                <small class="form-text text-danger" id="password_error"></small>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="tipe">Confirm Password</label>
                                <input type="text" class="form-control" id="conpass" name="conpass" placeholder="Masukkan Ulang Password" >
                                <small class="form-text text-danger" id="conpass_error"></small>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-outline-success" name="submit" value="submit">Submit</button><br><br>
                        </form>
                        <script src="script.js"></script>
                        
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
    </div>
  </section>
    
    <script src="ajax.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
