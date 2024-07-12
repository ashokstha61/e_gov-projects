<?php
$scnum=$_POST["scnum"];
$Cust_id=$_POST["cid"];
$name=$_POST["name"];
$addres=$_POST["address"];
$phone_no=$_POST["phone"];
$branch=$_POST["bid"];
$Demand_type=$_POST["demandid"];
$status=$_POST["status"];
?>

<h2>The information provider is: </h2>
<label for="">
    <?php echo $scnum ?>
    <?php echo $Cust_id ?>
    <?php echo $name ?>
    <?php echo $addres ?>
    <?php echo $phone_no ?>
    <?php echo $branch ?>
    <?php echo $Demand_type ?>
    <?php echo $status ?>
</label>
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
VALUES ('$scnum', '$Cust_id', '$name','$addres','$phone_no','$branch','$Demand_type','$status')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>