<?php
session_start();
require('./db_connect.php');

$first_name = ucfirst($_REQUEST['first_name']);
$last_name = ucfirst($_REQUEST['last_name']);
$username = strtolower($_REQUEST['username']);
$e_mail = strtolower($_REQUEST['e_mail']);
$mobile_number = $_REQUEST['mobile_number'];
$date_of_birth = $_REQUEST['date_of_birth'];
$password = password_hash(strtolower($_REQUEST['password']), PASSWORD_DEFAULT);
$country = ucfirst($_REQUEST['country']);
$state = ucfirst($_REQUEST['state']);
$address = ucfirst($_REQUEST['address']);
$city = ucfirst($_REQUEST['city']);
$login_token = bin2hex(random_bytes(30));


$create_profile_SQL = "INSERT INTO users_profile
    (`first_name`, `last_name`, `username`, `e_mail`, `mobile_number`, `date_of_birth`,`password`,`country`, `state`, `address`,`city`, `login_token`) 
    VALUES
    ('$first_name', '$last_name', '$username', '$e_mail', '$mobile_number', '$date_of_birth', '$password', '$country', '$state', '$address', '$city', '$login_token')";

if ($conn->query($create_profile_SQL)) {
    setcookie('login_token', $login_token, time() + (60 * 60), '/');
    $_SESSION['db_username'] = $username;
    header('Location: ../index.php');
} else {
    if (strpos(mysqli_error($conn), $username) > 0) {
        $_SESSION['db_create_profile_error'] = 'Username Already Exist';
    } else if (strpos(mysqli_error($conn), $e_mail) > 0) {
        $_SESSION['db_create_profile_error'] = 'E-mail Already Exist';
    } else {
        $_SESSION['db_create_profile_error'] = 'Phone Number Already Exist';
    }
    header('Location: ../sign_up.php');
}
