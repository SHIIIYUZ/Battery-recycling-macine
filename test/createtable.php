<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename="User";

// 创建连接
$conn = mysqli_connect($servername, $username, $password,$databasename);
// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
 $sql = "CREATE TABLE userinfo (
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(30) NOT NULL,
 pwd INT(6) NOT NULL,
 credit INT(6) NOT NULL,
 throwin VARCHAR(40) NOT NULL,
 exchange VARCHAR(40) NOT NULL
 )";
 
 if (mysqli_query($conn, $sql)) {
 echo "Table machineRecord created successfully";
 } else {
 echo "Error creating table: " . mysqli_error($conn);
 }
 
?>