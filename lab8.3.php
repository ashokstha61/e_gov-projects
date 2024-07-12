<html>
<body>

<?php
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$address=$_POST["address"];
    $server="localhost";
    $username="root";
    $password="root";
    $dbname="webtech";
    $conn=mysqli_connect($server, $username, $password, $dbname);
    if(!$conn){
        die("connection failed: ". mysqli_connect_error());
    }
    /*$sql="CREATE TABLE Student(
        id INT(10) AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(50) NOT NULL,
        lastname VARCHAR(50) NOT NULL,
        email VARCHAR(50),
        address VARCHAR(50)
         )";*/
        
    $sql="INSERT INTO Student VALUES('$id','$firstname', '$lastname', '$email', '$address')";    
    IF(mysqli_query($conn, $sql)){
        echo "Data inserted successfully";
    }else{
        echo"Error".mysqli_error($conn);
    }
    ?>
</body>
</html>