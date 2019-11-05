<?php
session_start();
require('./db_connect.php');

$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$username = $_REQUEST['username'];
$e_mail = $_REQUEST['e_mail'];
$mobile_number = $_REQUEST['mobile_number'];
$date_of_birth = $_REQUEST['date_of_birth'];
$password = password_hash(strval($_REQUEST['password']), PASSWORD_DEFAULT);
$country = $_REQUEST['country'];
$state = $_REQUEST['state'];
$address = $_REQUEST['address'];
$city = $_REQUEST['city'];
$login_token = bin2hex(random_bytes(30));

//check if username exsits
$select_all_SQL = "SELECT * FROM `users_profile` 
WHERE `username` = '$username' or `e_mail` = '$e_mail' or `mobile_number` = '$mobile_number' LIMIT 1";

$result = $conn->query($select_all_SQL);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($row['username'] == $username) {
        $_SESSION['db_create_profile_error'] = 'Username Already Exist';
    } else if ($row['e_mail'] == $e_mail) {
        $_SESSION['db_create_profile_error'] = 'E-mail Already Exist';
    } else {
        $_SESSION['db_create_profile_error'] = 'Phone Number Already Exist';
    }
    header('Location: ../sign_up.php');
}
$create_profile_SQL = "INSERT INTO users_profile
    (`first_name`, `last_name`, `username`, `e_mail`, `mobile_number`, `date_of_birth`,`password`,`country`, `state`, `address`,`city`, `login_token`) 
    VALUES
    ('$first_name', '$last_name', '$username', '$e_mail', '$mobile_number', '$date_of_birth', '$password', '$country', '$state', '$address', '$city', '$login_token')";

if ($conn->query($create_profile_SQL)) {
    setcookie('login_token', $login_token, time() + (60 * 60), '/');
    $_SESSION['db_username'] = $username;
    header('Location: ../index.php');
} else {
    echo "<p><b>User can not be created:</b> " . mysqli_error($conn);
}
