<?php
session_start();
	require_once("../config/db.php");
	require_once("register.inc.php");

if(isset($_POST['login'])){
    $username = $con->real_escape_string($_POST['username']);
    $email = $con->real_escape_string($_POST['email']);
    $password = $con->real_escape_string($_POST['password']);

    $sql = $con->query("SELECT id, password FROM user WHERE email= '$email' AND username ='$username' ");
        if($sql->num_rows > 0){
            $_SESSION['username']= $username;
            $data  = $sql->fetch_array();           
            
            if(password_verify($password, $data['password'])){
                header("location:index.php");
            }else{
            $msg =  "username and password do not match";
        }
        }else{
            $msg =  "Please check your inputs";
        }
    }
?>
