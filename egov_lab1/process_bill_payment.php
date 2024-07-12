<?php
$pay_id=$_POST["pay_id"];
$bill_id=$_POST["bill_id"];
$bill_amount=$_POST["bill_amount"];
$discount=$_POST["discount_amount"];
$penalty=$_POST["penalty"];
$payment_amount=$_POST["payment_amount"];
$payment_method_id=$_POST["payment_id"];
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
  
  $sql = "INSERT INTO `bill_payment` (`pay_id`, `bill_id`, `bill_amount`, `discount`, `penalty`, `payment_amount`, `payment_method_id`) VALUES ('$pay_id', '$bill_id','$bill_amount', '$discount', '$penalty', '$payment_amount', '$payment_method_id')";
  
  if (mysqli_query($con, $sql)) {
    echo "New record inserted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
?>
