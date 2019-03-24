<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename="user";

// 创建连接
$conn = mysqli_connect($servername, $username, $password,$databasename);
// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO userinfo (name, pwd,credit, throwin, exchange)
 VALUES ('helena','123456','0','null','null')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
?>