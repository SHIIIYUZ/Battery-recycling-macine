<?php
    
    $machine = $_POST['machine'];
    $conn = new mysqli("localhost","root","","machineRecord");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = 'SELECT machineNo, 5battery,
               7battery
            FROM machinerecord
            WHERE machineNo='.$machine;
  
    $result = mysqli_query($conn,$sql);//Ö´ÐÐsql
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    
   
    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    echo "<table><tr>";
    echo "<td>machineNo : </td>";
    echo "<td>{$row['machineNo']} </td></tr> ".
        "<tr><td>5battery:</td> <td> {$row['5battery'] } </td> </tr> ".
        "<tr><td>7battery:</td> <td> {$row['7battery'] } </td> </tr></table>";
    }
    
    mysqli_close($conn);
?>