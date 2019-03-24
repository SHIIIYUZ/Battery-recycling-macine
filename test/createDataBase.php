<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename="User";

// 创建连接
$conn = mysqli_connect($servername, $username, $password);
// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
 $sql = "CREATE DATABASE ".$databasename;
 if (mysqli_query($conn, $sql)) {
 echo "Database created successfully";
 } else {
 echo "Error creating database: " . mysqli_error($conn);
 }

?>