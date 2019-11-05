<?php
setcookie('login_token', '', time(), '/');
setcookie('PHPSESSID', '', time(), '/');
// session_abort();
header('Location: ../index.php');
