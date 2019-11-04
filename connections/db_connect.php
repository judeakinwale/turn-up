<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db_turn_up = "CREATE DATABASE IF NOT EXISTS `turn_up`";
$table_users_profile =  "CREATE TABLE IF NOT EXISTS `turn_up`.`users_profile` 
( `ID` INT(10) NOT NULL AUTO_INCREMENT , 
`first_name` VARCHAR(20) NOT NULL , 
`last_name` VARCHAR(20) NOT NULL , 
`username` VARCHAR(15) NOT NULL , 
`e_mail` VARCHAR(30) NOT NULL , 
`password` VARCHAR(20) NOT NULL , 
`date_of_birth` DATE NOT NULL , 
`country` VARCHAR(20) NULL , 
`state` VARCHAR(20) NOT  NULL , 
`zip` INT(10) NOT NULL , 
`login_token` VARCHAR(30) NULL , 
PRIMARY KEY (`ID`), 
UNIQUE (`username`)) 
ENGINE = InnoDB;";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('unable to connect now retry later' . mysqli_error_list($conn));
//Create the database
$conn->query($db_turn_up) or die('can not create database'.mysqli_error($conn));
//select database
$conn->select_db("turn_up") or die('can not select database '. mysqli_error($conn));
//create tableF
$conn->query($table_users_profile) or die('can not create table '.mysqli_error($conn));
echo 'created';
    //require_once 'dataconn.php';
