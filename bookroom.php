<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bookroom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body id="home">
    <?php
    //Cek apakah sudah login atau belum
    session_start();
    if(empty($_SESSION['username'])){
      header('Location:login.php?pesan=belumlogin');
    }
    echo "logindengan" .$_SESSION['username'];
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
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#room">Room</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#rsvp">RSVP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- Udah navbarnya -->
  
  <!-- Home -->
  <section class="home text-center">
    <img src="img\icon.png" alt="icon" width="150"></img>
      <h1 class="mt-3">Bebek Voice</h1>
      <p class="lead">Pancarkan Suara Emasmu Anjay</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,32L34.3,32C68.6,32,137,32,206,58.7C274.3,85,343,139,411,176C480,213,549,235,617,245.3C685.7,256,754,256,823,234.7C891.4,213,960,171,1029,138.7C1097.1,107,1166,85,1234,74.7C1302.9,64,1371,64,1406,64L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
  </section>
  <!-- Udah homenye -->
  
  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col">
          <h2>About Us</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5 text-center">
        <div class="col-md-10">
        <p>Bebek Voice berdiri sejak 2020 walo pegel berdirinya sampe sekarang gpp lah ya, intinya kita berdiri ges. Kami merupakan tempat karaoke yang aman nyaman sentosa.
        <br>
        <br>
        <br>
        Bebek Voice memiliki berbagai macam penghargaan, salah satunya adalah rekor muri anjay kek burung. Iya ges kenapa burung karena kita gachor anjay skud gasin kali brek karoke di Bebek Voice.</p>
        <br>
        <br>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FDEEDC" fill-opacity="1" d="M0,128L48,144C96,160,192,192,288,170.7C384,149,480,75,576,48C672,21,768,43,864,85.3C960,128,1056,192,1152,192C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  </section>
  <!-- Udah Aboutnya -->

  <!-- Room -->
  <section id="room">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col">
          <h2>Our Rooms</h2>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-3 mb-3">
          <div class="card">
            <img src="img\melati.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Melati</h5>
              <p class="card-text">Ruangan Maksimal 4 Orang</p>
              <a href="#rsvp" class="btn btn-outline-success">Pesan</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card">
            <img src="img\mawar.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Mawar</h5>
              <p class="card-text">Ruangan Maksimal 6 Orang</p>
              <a href="#rsvp" class="btn btn-outline-success">Pesan</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card">
            <img src="img\flamboyan.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Flamboyan</h5>
              <p class="card-text">Ruangan Maksimal 8 Orang</p>
              <a href="#rsvp" class="btn btn-outline-success">Pesan</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card">
            <img src="img\bangkai.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Bangkai</h5>
              <p class="card-text">Ruangan Maksimal 10 Orang</p>
              <a href="#rsvp" class="btn btn-outline-success">Pesan</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,128L48,112C96,96,192,64,288,69.3C384,75,480,117,576,160C672,203,768,245,864,245.3C960,245,1056,203,1152,160C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  </section>
  <!-- Udah Roomnya -->

  <!-- RSVP -->
  <section id="rsvp">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col">
          <h2>RSVP</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 mb-5">
          <div class="card">
                  <div class="card-header">Booking Room</div>
                  <div class="card-body">
                      <form method="POST" name="form" autocomplete="on" action="pembayaran.php">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email" value="">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" value="">
                        </div>
                          <div class="form-group">
                              <label for="tipe">Room Type</label>
                              <select class="form-control" name="tipe" id="tipe">
                                <option value="0">-- Select Type --</option>
                                <?php
                                require_once('db_login.php');
                                    $result = $db->query('select * from tipe');

                                    while ($data = $result->fetch_object()):
                                  ?>
                                    <option value="<?php echo $data->id_tipe ?>"><?php echo $data->nama_tipe ?></option>
                                <?php endwhile ?>
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="tipe">Room Number</label>
                              <select class="form-control" name="ruang" id="ruang">              
                                <option value="0">-- Select Room Number --</option>
                              </select>
                          </div>
                          
                          <br>
                          <button type="submit" class="btn btn-outline-success" onclick="" class="button">Submit</button><br><br>
                      </form>
                      <div id="add_response"></div>
                  </div>
              </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#F1A661" fill-opacity="1" d="M0,96L48,101.3C96,107,192,117,288,138.7C384,160,480,192,576,192C672,192,768,160,864,144C960,128,1056,128,1152,133.3C1248,139,1344,149,1392,154.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  </section>
  <!-- End RSVP -->

  <!-- Puter -->
  <footer  class="text-center text-white p-3" style="background-color:#F1A661;">
    <p>Dibikin sama kelompok patan geming</p>
  </footer>
  <!-- Puternya dah selese -->
    <script src="ajax.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
