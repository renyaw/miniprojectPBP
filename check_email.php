<?php

require_once('db_login.php');

if (!isset($_GET['email'])) {
    echo false;
} else {
    $email = test_input($_GET['email']);
    $result = $db->query("SELECT * FROM pelanggan WHERE email='$email'");

    echo $result->num_rows == 0;
}
