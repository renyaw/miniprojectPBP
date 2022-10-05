<?php include('header.html')?>

    <?php

    //session_start();
    require_once('db_login.php');
    ?>

<?php
    //pesan gagal
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert alert-danger text-center'>Kredensial masukmu tak cocok dengan akun<br> dalam sistem kami!</div>";
		}
	}
    //pesan login tidak sebagai admin
    if(isset($_GET['pesan'])){
		if($_GET['pesan']=="bukanadmin"){
			echo "<div class='alert alert-danger text-center'>Anda Harus Login Sebagai Admin!</div>";
		}
	}

    //pesan belum login
    if(isset($_GET['pesan'])){
		if($_GET['pesan']=="belumlogin"){
			echo "<div class='alert alert-danger text-center'>Mohon Login Terlebih Dahulu!</div>";
		}
	}
?>
<br>

<div class="text-center">
    <img src="img\icon.png" class="col-2" alt="logo">
</div>

<br>

<div class="container col-6">
<div class="card">
<div class="card-body">

    <form name="form" method="POST" autocomplete="on" class="col 10" onsubmit="return submitLogin()" action="cek_login.php">

    <br>
    
        <div class="form-group mb-3 col-auto">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukan username..." value="">
            <small class="form-text text-danger" id="username_error"></small>
        </div>

        <div class="col-auto">
        <label for="inputPassword5" class="form-label">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukan Password..."class="form-control" value="">
            <small class="form-text text-danger" id="password_error"></small>
        </div>
        <div>
            <a class="form-text text muted col-auto" href="daftar.php"> 
                <small> Belum punya akun?</small>
            </a>
        </div>
        <br>

        <div class="col-auto justify-content-md-end d-md-flex">
            <button type="submit" name="submit" value="submit" class="btn btn-outline-success">Login</button>
        </div>
    </form>
    <script src="script.js"></script>
    
</div>
</div>
</div>
<?php include('footer.html')?>
