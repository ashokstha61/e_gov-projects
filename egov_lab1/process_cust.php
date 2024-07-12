<?php
$customer_id=$_POST["cid"];
$sc_number=$_POST["scnum"];
$name=$_POST["fn"];
$address=$_POST["adr"];
$phone=$_POST["ph"];
$branch_id=$_POST["bid"];
$demand_id=$_POST["did"];
$status=$_POST["sts"];
?>
<?php
$server="localhost";
$user="root";
$password="root";
$db="db_nea_bill"; 
$con=mysqli_connect($server,$user,$password,$db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "INSERT INTO `customer_info_nea` (`customer_id`, `Sc_No`, `name`, `address`, `phone`, `branch_id`, `deamand_id`, `status`) VALUES ('$customer_id', '$sc_number', '$name', '$address', '$phone', '$branch_id', '$demand_id', '$status')";
  
  if (mysqli_query($con, $sql)) {
    echo "New record inserted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
 
?>
