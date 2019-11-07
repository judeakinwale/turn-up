<?php
session_start(); 
if(isset($_SESSION['username'])){
echo "<b>Welcome to Turn Up</b>"." ".$_SESSION['username']; 
}
elseif(isset($_SESSION['access_token'])) {
    echo $loginUrl;
}
else{
	header('location:register.php');
}
?>

