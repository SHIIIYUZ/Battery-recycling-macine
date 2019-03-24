<?php
$servername = "localhost";
$username = "root";
$password = "";

// 创建连接
$conn = mysqli_connect($servername, $username, $password,"machineRecord");
// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/*// Create database
$sql = "CREATE DATABASE machineRecord";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}*/


/*// sql to create table
 $sql = "CREATE TABLE machineRecord (
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 machineNo VARCHAR(30) NOT NULL,
 5battery INT(6) NOT NULL,
 7battery INT(6) NOT NULL
 )";
 
 if (mysqli_query($conn, $sql)) {
 echo "Table machineRecord created successfully";
 } else {
 echo "Error creating table: " . mysqli_error($conn);
 }*/

 $sql = "INSERT INTO machineRecord (machineNo, 5battery,7battery)
 VALUES ('海淀4号','9','3')";
 
 if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 } 

/*// prepare and bind
 $stmt = $conn->prepare("INSERT INTO logIn (username,code) VALUES(?, ?)");
 $stmt->bind_param("ss", $username, $code);
 $username=$_GET["ADnumber"];
 $code=$_GET["ADcode"];
 $stmt->execute();
 echo "New records created successfully";
 $stmt->close();
 
 $sql = "SELECT id, username, code FROM logIn";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
 // 输出每行数据
 while($row = $result->fetch_assoc()) {
 echo "<br> id: ". $row["id"]. " - Name: ". $row["username"]. "- Code: " .$row["code"];
 }
 } else {
 echo "0 results";
 }*/

//$conn->close();

mysqli_close($conn);
?>
