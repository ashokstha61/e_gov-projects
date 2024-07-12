<?php
$bill_id=$_POST["bill_id"];
$b_month=$_POST["B_month"];
$b_year=$_POST["B_year"];
$current_reading=$_POST["current_read"];
$previous_reading=$_POST["previous_read"];
$unit_consumed=$_POST["unit_consumed"];
$rate=$_POST["rate"];
$subtotal=$_POST["sub-total"];
$previous_due=$_POST["previous_due"];
$total=$_POST["total"];
$ispaid=$_POST["is_paid"];
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
  $sql = "INSERT INTO `Bill` (`bill_id`, `B_month`, `B_year`, `current_read`, `previous_read`, `unit_consumed`, `rate`, `subtotal`,`previous_due`,`total`,`is_paid`) VALUES ('$bill_id', '$b_month', '$b_year', '$current_reading', '$previous_reading', '$unit_consumed', '$rate', '$subtotal','$previous_due','$total','$ispaid')";
  
  if (mysqli_query($con, $sql)) {
    echo "New record inserted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
 
?>
