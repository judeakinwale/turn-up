<?php
require './fb-init.php';
session_destroy();
unset($_SESSION['access_tokem']);
header("location:register.php");
?>