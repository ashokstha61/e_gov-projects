<html>
<body>
<?php
    $server="localhost";
    $username="root";
    $password="root";
    $conn=mysqli_connect($server, $username, $password);
    if(!$conn){
        die("connection failed: ". mysqli_connect_error());
    }
    $sql="CREATE DATABASE WEBTECH";
    IF(mysqli_query($conn, $sql)){
        echo "Database created successfully";
    }else{
        echo"Error";
    }
    ?>
</body>
</html>