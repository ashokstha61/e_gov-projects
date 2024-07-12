<?php
$server="localhost";
$user="root";
$password="root";
$db="db_nea_bill"; 
$con=mysqli_connect($server,$user,$password,$db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  if(isset($_GET['customer_id']))
  {
    $cid=$_GET['customer_id'];
    $sql="SELECT *FROM CUSTOMER WHERE customer_id=$cid ";
    $result=mysqli_query($con, $sql) ;
    $data=$result->fetch_assoc();
    if(!isset($data))
    {
        echo "No user";
    }
  }
    
if(isset($_POST['update']))
{
$Customer_id=$_POST["Customer_id"];
$Sc_No=$_POST["Sc_No"];
$Customer_fname=$_POST["Customer_fname"];
$address=$_POST["address"];
$phone_no=$_POST["phnone_no"];
$branch_id=$_POST["branch_id"];
$demand_id=$_POST["demand_id"];
$status=$_POST["status"];
$sql="UPDATE customer SET customer_id=$customer_id, sc_number='$Sc_No',Customer_fname='$Customer_fname',address='$address',phone=$phone_no,branch_id=$branch_id,deamand_id=$demand_id,status=$status WHERE Customer_id=$customer_id";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
    a{
      text-decoration: none;
      background-color: skyblue;
      color:black;
      margin:5px;
      font-family:Georgia, 'Times New Roman', Times, serif
    }
    legend{
      background: lightblue;
      padding:35px;
    }
    .a1{
      padding:10px;
    }
    </style>
  </head>
  <body>
  <form class="bg-light" action="update_cust.php" method="POST">
    <legend class="ml-3"><a class="a1" href="form.php">Customer Entry</a>  
    <a class="a1" href="cus_bill.php">Bill Entry</a>
    <a class="a1" href="bill_payment.php">Payment Entry</a>
    <a class="a1" href="view_customer.php">Cutomer Details</a>
    <a class="a1" href="view_bill.php">Bill Details</a>
    <a class="a1" href="pay.php">Payment Details</a>
  </legend>
  <div class="mx-5 my-2">
    <label for="Customer_id" class="form-label">Customer ID</label>
    <input type="number" class="form-control" name="Customer_id" value="<?php echo $data['Customer_id']; ?>" required >
  </div>
  <div class="mx-5 my-2">
    <label for="Sc_No" class="form-label">SC Number</label>
    <input type="text" class="form-control" name="Sc_No" value="<?php echo $data['Sc_No']; ?>">
  </div>
  <div class="mx-5 my-2">
    <label for="Customer_fname" class="form-label">Full Name</label>
    <input type="text" class="form-control" name="Customer_fname" value="<?php echo $data['Customer_fname']; ?>">
  </div>
  <div class="mx-5 my-2">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" name="address" value="<?php echo $data['address']; ?>">
  </div>
  <div class="mx-5 my-2">
    <label for="phone_no" class="form-label">Phone</label>
    <input type="number" class="form-control" name="phone_no" value="<?php echo $data['phone_no']; ?>" required>
  </div>
  <div class="mx-5 my-2">
    <label for="branch_id" class="form-label">Branch Name</label>
    <select class="form-control" name="branch_id" value="<?php echo $data['branch_id']; ?>">
        <option>Choose Branch</option>
        <option value="201">Achham</option>
        <option value="202">Amuwa</option>
        <option value="203">Anarmani</option>
        <option value="204">Arghakhachi</option>
        <option value="205">Baglung</option>
        <option value="206">Baitadi</option>
        <option value="207">Baneshwar</option>
        <option value="208">Chabahil</option>
        <option value="209">Damak</option>
        <option value="2010">Lagankhel</option> 
    </select>
  </div>
  <div class="mx-5 my-2">
    <label for="did" class="form-label">Demand Type</label>
    <select class="form-control" name="did" value="<?php echo $data['demand_id']; ?>">
        <option>Choose Demand type</option>
        <option value="101">5A</option>
        <option value="102">15A</option>
        <option value="203">30A</option>
    </select>
  </div>
  <div class="mx-5 my-2">
    <label for="sts" class="form-label">Status</label>
    <input type="number" class="form-control" name="sts" value="<?php echo $data['status']; ?>" required>
  </div>
  <input type="hidden" name="customer_id" value="<?php echo $data['customer_id'];?>">
  <button type="submit" name="update" class="btn btn-danger mx-5 my-2">Update</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>