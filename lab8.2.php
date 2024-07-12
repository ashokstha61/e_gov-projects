<html>
<body>
<?php
    $server="localhost";
    $username="root";
    $password="root";
    $dbname="webtech";
    $conn=mysqli_connect($server, $username, $password, $dbname);
    if(!$conn){
        die("connection failed: ". mysqli_connect_error());
    }
    $sql="CREATE TABLE Student(
        id INT(10) AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(50) NOT NULL,
        lastname VARCHAR(50) NOT NULL,
        email VARCHAR(50),
        address VARCHAR(50)
         )";
    IF(mysqli_query($conn, $sql)){
        echo "Database created successfully";
    }else{
        echo"Error".mysqli_error($conn);
    }
    ?>
</body>
</html>