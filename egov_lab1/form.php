<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
    *{
      font-family: 'Courier New', Courier, monospace;
      font-weight: bold;
    }
    a{
      text-decoration: none;
      background-color: skyblue;
      color:black;
      margin:5px;
    }
    legend{
      background: lightblue;
      padding:20px;
    }
    .a1{
      padding:10px;
    }
    </style>
  </head>
  <body>
  <form class="bg-light" action="process_cust.php" method="POST">
    <legend class="ml-3"><a class="a1" href="form.php">Customer Entry</a>  
    <a class="a1" href="cus_bill.php">Bill Entry</a>
    <a class="a1" href="bill_payment.php">Payment Entry</a>
    <a class="a1" href="view_customer.php">Cutomer Details</a>
    <a class="a1" href="view_bill.php">Bill Details</a>
    <a class="a1" href="pay.php">Payment Details</a>
  </legend>
  <div class="mx-5 my-2">
    <label for="cid" class="form-label">Customer ID</label>
    <input type="number" class="form-control" name="cid" required>
  </div>
  <div class="mx-5 my-2">
    <label for="scnum" class="form-label">SC Number</label>
    <input type="text" class="form-control" name="scnum" required>
  </div>
  <div class="mx-5 my-2">
    <label for="fn" class="form-label">Full Name</label>
    <input type="text" class="form-control" name="fn" required>
  </div>
  <div class="mx-5 my-2">
    <label for="adr" class="form-label">Address</label>
    <input type="text" class="form-control" name="adr" required>
  </div>
  <div class="mx-5 my-2">
    <label for="ph" class="form-label">Phone</label>
    <input type="number" class="form-control" name="ph" required>
  </div>
  <div class="mx-5 my-2">
    <label for="bid" class="form-label">Branch Name</label>
    <select class="form-control" name="bid">
        <option>Choose Branch</option>
        <option value="201">Kirtipur</option>
        <option value="202">Gwarko</option>
        <option value="203">Hetauda</option>
        <option value="204">Arghakhachi</option>
        <option value="205">panchthar</option>
        <option value="206">Nawalparashi</option>
        <option value="207">Baneshwar</option>
        <option value="208">Chabahil</option>
        <option value="209">Humla</option>
        <option value="2010">Lagankhel</option> 
    </select>
  </div>
  <div class="mx-5 my-2">
    <label for="did" class="form-label">Demand Type</label>
    <select class="form-control" name="did">
        <option>Choose Demand type</option>
        <option value="101">5A</option>
        <option value="102">15A</option>
        <option value="203">30A</option>
    </select>
  </div>
  <div class="mx-5 my-2">
    <label for="sts" class="form-label">Status</label>
    <input type="number" class="form-control" name="sts" required>
  </div>
  <button type="submit" class="btn btn-danger mx-5 my-2">Submit</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>