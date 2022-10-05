<?php

require_once('db_login.php');

if (!isset($_GET['username'])) {
    echo false;
} else {
    $username = test_input($_GET['username']);
    $result = $db->query("SELECT * FROM akun WHERE username='$username");

    echo $result->num_rows == 0;
}
