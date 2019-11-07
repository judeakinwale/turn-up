<?php
session_start();
require('./db_connect.php');
$e_mail = $_REQUEST['e_mail'];
$password = strtolower($_REQUEST['password']);
$login_token = bin2hex(random_bytes(30));

if (isset($_REQUEST['remember_me'])) {
    $remember_me = $_REQUEST['remember_me'];
} else {
    $remember_me = 'off';
}
//check if user exist
$db_select_all_SQL = "SELECT * FROM `users_profile` WHERE `e_mail` = '$e_mail'";
$db_upadte_login_token_SQL = "UPDATE `users_profile` SET `login_token` = '$login_token' WHERE `e_mail` = '$e_mail'";
$results = $conn->query($db_select_all_SQL);
if ($results->num_rows > 0) {
    $row = $results->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        //log in
        $conn->query($db_upadte_login_token_SQL);
        if ($remember_me == 'on') {
            setcookie('login_token', $login_token, time() + (86400 * 30), '/');
        } else {
            setcookie('login_token', $login_token, 0, '/');
        }
        header('Location: ../index.php');
    } else {
        //wrong password
        // echo password_verify($password, $row['password']);
        $_SESSION['login_error'] = '<p class="text-danger">invalid credencitals</p>';
        // header('Location: ../sign_in.php');
    }
} else {
    //user do not exsist
    $_SESSION['login_error'] = '<p class="text-danger">invalid credencitals</p>';
    header('Location: ../sign_in.php');
}
// echo '<p>'.$e_mail;
// echo '<p>'.$password;
// echo '<p>'.$remember_me;
