<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
    body{
        background: lightblue;
    }
    </style>
</head>
  <body>
  <form class="bg-light" action="cbb_process.php" method="POST">
  <div class="mx-5 my-2">
    <label for="bid" class="form-label">Branch Name</label>
    <select class="form-control" name="bid">
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
  <button type="submit" class="btn btn-danger mx-5 my-2">Submit</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>