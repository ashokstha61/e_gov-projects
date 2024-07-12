<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      *{
        font-family: 'Courier New', Courier, monospace;
        font-weight: bold;
      }
        a{
            color:black;
            background-color: skyblue;
            text-decoration: none;
        }
        body{
            background:whitesmoke;
        }
        table,th,td{
            border:1px solid black;
        }
        td{
  text-align: left;
        }
        .d1{
            width:110px;
            background: whitesmoke;
            color:black;
        }
        .d3{
            width:200px;
            background: white;
            color:black;
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
<legend class="ml-3"><a class="a1" href="form.php">Customer Entry</a>  
    <a class="a1" href="cus_bill.php">Bill Entry</a>
    <a class="a1" href="bill_payment.php">payment Entry</a>
    <a class="a1" href="view_customer.php">Cutomer Details</a>
    <a class="a1" href="view_bill.php">Bill Details</a>
    <a class="a1" href="pay.php">Payment Details</a>
  </legend>
</body>
</html>
<?php
$branch_id=$_POST["bid"];
$server="localhost";
$user="root";
$password="root";
$db="db_nea_bill"; 
$con=mysqli_connect($server,$user,$password,$db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "SELECT Customer_id,Sc_No,Customer_fname,phone_no,demand_name from customer_info_nea c,branch b,demand_type d where c.branch_id=b.branch_id and c.demand_id=d.demand_id ";
  $result=mysqli_query($con, $sql) ;
  echo "<h1>Customers Details:</h1>\n";
  echo"<table>
  <tr>
    <td><div class='d1'>Customer ID</div></td>
    <td><div class='d1'>SC Number</div></td>
    <td><div class='d3'>Name</div></td>
    <td><div class='d1'>Contact</div></td>

    <td><div class='d1'>Demand type</div></td>
    <td><div class='d1'>Action</div></td>
    </tr>
    </table>";
  while($row=mysqli_fetch_assoc($result))
  {
    echo"<table>
    <tr>
    <td> <div class='d1'>$row[Customer_id] </div></td>
    <td><div class='d1'>$row[Sc_No]</div></td>
    <td><div class='d3'>$row[Customer_fname]</div></td>
    <td><div class='d1'>$row[phone_no]</div></td>
        <td><div class='d1'>$row[demand_name]</div></td>
    <td><div class='d1'><a href='view_bill.php'>View Bill</a></div></td>
    </tr>
    </table>";
  }
?>
