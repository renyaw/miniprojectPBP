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
    if ($_SESSION["username"] != "admin") {
        header("Location:login.php?pesan=bukanadmin");
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
          <li class="nav-item">
            <a class="nav-link" href="login.php">Log Out</a>
          </li>
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
        <br>  
        <div class="row"> 
          <div class="col-3">
            <p>Status:</p>
            <select name="status" id="status" class="" onchange="showPesanan(this.value)">
                    <option value="3">Semuanya</option>
                    <option value="0">Belum dikonfirmasi</option>
                    <option value="1">Sudah dikonfirmasi</option>
                    <option value="2">Dibatalkan</option>
            </select>
          </div>
        </div>
          <br>
          <div class="row text-center">
            <div class="col">
              <div id="detail_pesanan">          
                <script>
            window.onload = function(){
              showPesanan(3);
            }
          </script></div>
            </div>
          </div>
        </div>
    </section>
    <!-- Udah Table View -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="getpesananajax.js"></script>

  </body>
</html>
