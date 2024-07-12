<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "db_nea_bill";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO customer_info_nea (Sc_no, Customer_id, Customer_fname, address, phone_no, branch_id, demand_id,status)
VALUES ('$Scnm', '$Cust_id', '$name','$addres','$phone_no','$branch','$Demand_type','$status')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>