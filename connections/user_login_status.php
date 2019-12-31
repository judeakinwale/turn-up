<?php
echo 'okau';
session_start();
require 'db_connect.php';
if (isset($_COOKIE['login_token'])) {
    $login_token = $_COOKIE['login_token'];
    $db_select_all_SQL = "SELECT * FROM `users_profile` WHERE `login_token` = '$login_token' LIMIT 1";
    $result = $conn->query($db_select_all_SQL);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['db_username'] = $row['username'];
    }
} else {
    if (!($_SERVER['REQUEST_URI'] == '/turn-up/' || $_SERVER['REQUEST_URI'] == '/turn-up/index.php')) {
        // header('Location: ./index.php');
        header('Location: ./sign_in.php');
    }
}
