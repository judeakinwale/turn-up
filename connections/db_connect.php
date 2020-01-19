<?php
// session_start();

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db_turn_up = "CREATE DATABASE IF NOT EXISTS `turn_up`";
$table_users_profile =  "CREATE TABLE IF NOT EXISTS `users_profile` 
( `ID` INT(10) NOT NULL AUTO_INCREMENT , 
`first_name` VARCHAR(20) NOT NULL , 
`last_name` VARCHAR(20) NOT NULL , 
`username` VARCHAR(15) NOT NULL , 
`e_mail` VARCHAR(30) NOT NULL , 
`mobile_number` VARCHAR(15) NOT NULL,
`date_of_birth` DATE NOT NULL , 
`password` VARCHAR(100) NOT NULL , 
`country` VARCHAR(20) NOT NULL , 
`state` VARCHAR(20) NOT NULL ,  
`address` TEXT(100) NULL , 
`city` VARCHAR(10) NOT NULL , 
`login_token` VARCHAR(100) NULL , 
PRIMARY KEY (`ID`), 
UNIQUE (`username`),
UNIQUE (`mobile_number`),
UNIQUE (`e_mail`)) 
ENGINE = InnoDB;";
$table_events =  "CREATE TABLE IF NOT EXISTS `events` 
( `ID` INT(10) NOT NULL AUTO_INCREMENT , 
`event_name` VARCHAR(20) NOT NULL , 
`event_description` TEXT(200) NOT NULL , 
`event_image` VARCHAR(15) NULL , 
`event_country` VARCHAR(20) NOT NULL ,    
`event_state` VARCHAR(20) NOT NULL ,  
`event_location` TEXT(100) NULL , 
`event_city` VARCHAR(10) NOT NULL ,
`ticket_price` INT(10) NOT NULL ,  
`ticket_limit` INT(10) NOT NULL , 
`event_category` VARCHAR(20) NOT NULL ,  
`event_package` VARCHAR(20) NOT NULL , 
PRIMARY KEY (`ID`), 
UNIQUE (`event_name`)) 
ENGINE = InnoDB;";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('unable to connect now retry later' . mysqli_error_list($conn));
//Create the database
$conn->query($db_turn_up) or die('can not create database' . mysqli_error($conn));
//select database
$conn->select_db("turn_up") or die('can not select database ' . mysqli_error($conn));
//create tableF
$conn->query($table_users_profile) or die('can not create table ' . mysqli_error($conn));
$conn->query($table_events) or die('can not create table ' . mysqli_error($conn));
// echo 'created';
    //require_once 'dataconn.php';
