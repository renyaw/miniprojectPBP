<?php include('header.html')?>

    <?php

    session_start();
    require_once('db_login.php');

    if(isset($_POST["submit"])){

        $username = test_input($_POST['username']);
        if($username == ''){
            $error_username = "Username is required";
        }

       $password = test_input($_POST['password']);
        if($password == ''){
            $error_password = "Password is required";
        }

        // if($valid){
        //     $query = " SELECT * FROM admin WHERE email='".$email."' AND password='".md5($password)."' ";
        //     $result = $db->query($query);
        //     if(!$result){
        //         die("Could not query the database: <br/>".$db->error);
        //     }
        //     else{
        //         if($result->num_rows > 0){
        //             $_SESSION['username'] = $email;
        //             header('Location: admin.php');
        //             exit;
        //         }
        //         else{
        //             echo '<span class="error">Combination of username and password are not correct.</span>';
        //         }
        //     }
        //     $db -> close();
        // }

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

    <form method="POST" autocomplete="on" class="col 10" action=""></form>

    <br>

        <div class="form-group mb-3 col-auto">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php if(isset($username)) {echo $username;}?>">
            <div class="error text-danger"><?php if(isset($error_username)) echo $error_username;?></div>
        </div>

        <div class="col-auto">
        <label for="inputPassword5" class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>

        <br>

        <div class="col-auto justify-content-md-end d-md-flex">
            <button type="submit" class="btn btn-outline-success">Login</button>
        </div>

</div>
</div>
</div>

<?php include('footer.html')?>
