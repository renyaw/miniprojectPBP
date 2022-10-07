<?php

require_once('db_login.php');

if (!isset($_POST['email'])) {
    echo false;
} else {
    $email = test_input($_POST['email']);
    $result = $db->query("SELECT * FROM akun WHERE email='$email'");

    echo $result->num_rows == 0;
}
