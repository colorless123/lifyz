<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
};
mysqli_query($link,"CREATE DATABASE IF NOT EXISTS users");
mysqli_select_db($link,'users');
mysqli_query($link,"CREATE TABLE IF NOT EXISTS users(
  id int(11) AUTO_INCREMENT PRIMARY KEY,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
");
mysqli_query($link,"CREATE TABLE IF NOT EXISTS posts (
    id int(11) AUTO_INCREMENT PRIMARY KEY,
    postname varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    date date NOT NULL,
    text text(1000) NOT NULL,
    status varchar(255) NOT NULL
    )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;")
?>