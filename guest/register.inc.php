<?php
	require_once("../config/db.php");
if(isset($_POST['submit'])){
    $name = $con->real_escape_string($_POST['name']);
    $username = $con->real_escape_string($_POST['username']);
    $email = $con->real_escape_string($_POST['email']);
    $password = $con->real_escape_string($_POST['password']);
    $location = $con->real_escape_string($_POST['location']);
    $category = $con->real_escape_string($_POST['category']);

    if($name != "" && $username != "" && $email != "" && $password != "" && $location != "" && $category != "" ){
    $hash = password_hash($password, PASSWORD_BCRYPT);
    $con->query("INSERT INTO user(name,username,email,password,location,category) VALUES('$name', '$username', '$email', '$hash', '$location', '$category')");
                header("location:login.php");
            }else{  
                    $msg = "Please check your password if they correspond"; 
            }

}
  
?>