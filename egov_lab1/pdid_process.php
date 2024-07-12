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
            background:white;
        }
        table,th,td{
            border:1px solid black;
        }
        td{
  text-align: left;
        }
        .d1{
            width:120px;
            background: lightblue;
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
$customer_id=$_POST["cid"];
$server="localhost";
$user="root";
$password="root";
$db="db_nea_bill"; 
$con=mysqli_connect($server,$user,$password,$db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "SELECT bill_id,bill_amount,discount_amount,penalty,payment_amount,payment_m_name from bill_payment b,payment_method p where b.payment_method_id=p.payment_method_id and customer_id=$customer_id ";
  $result=mysqli_query($con, $sql) ;
  echo "<h1>Bill Details:</h1>\n";
  echo"<table>
  <tr>
    <td><div class='d1'>Bill ID</div></td>
    <td><div class='d1'>Bill Amount</div></td>
    <td><div class='d1'>Discount</div></td>
    <td><div class='d1'>Penalty</div></td>
    <td><div class='d1'>Amount</div></td>
    <td><div class='d1'>Payment Method</div></td>
    </tr>
    </table>";
  while($row=mysqli_fetch_assoc($result))
  {
    echo"<table>
    <tr>
    <td> <div class='d1'>$row[bill_id] </div></td>
    <td><div class='d1'>$row[bill_amount]</div></td>
    <td><div class='d1'>$row[discount]</div></td>
    <td><div class='d1'>$row[penalty]</div></td>
    <td><div class='d1'>$row[payment_amount]</div></td>
    <td><div class='d1'>$row[payment_m_name]</div></td>
    </tr>
    </table>";
  }
?>