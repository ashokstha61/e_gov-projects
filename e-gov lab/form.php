<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>customer info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
</head>

<body>
    <form action="process_cust.php" method="POST">
        <fieldset>
            <legend class="mx-5 text-primary text-uppercase">Customer Information</legend>
            <div class="mx-5">
                <label for="cid" class="form-label">Customer ID</label>
                <input type="text" id="cid" name="cid"class="form-control" required>
            </div>
            <div class="mx-5">
                <label for="scnum" class="form-label">Sc_number</label>
                <input type="text" id="scnum" name="scnum" class="form-control" required>
            </div>
            <div class="mx-5">
                <label for="name" class="form-label">Full name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="mx-5">
                <label for="address" class="form-label">Address</label>
                <input type="text" id="address" name="address" class="form-control" required>
            </div>
            <div class="mx-5">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" id="phone" name="phone" class="form-control" required>
            </div>
            <div class="mx-5">
                <label for="bid" class="form-label">Branch</label>
                <select id="bid" name="bid" class="form-control" required>
                    <option >choose the branch</option>
                    <option value="201">Laltipur</option>
                    <option value="202">Kathmandu</option>
                    <option value="203">Bhaktapur</option>
                    <option value="304">Makwanpur</option>
                    <option value="205">Chitawan</option>
                </select>
            </div>
            <div class="mx-5">
                <label for="demandid" class="form-label">Demand type</label>
                <select id="demandid" name="demandid" class="form-control" required>
                    <option >choose the Demand type</option>
                    <option value="101">5A</option>
                    <option value="102">15A</option>
                    <option value="103">30A</option>
                </select>
            </div>
            <div class="mx-5">
                <label for="status" class="form-label">Status</label>
                <select id="status" name="status" class="form-control" required>
                    <option >Active</option>
                    <option >Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-info mx-5 my-3 text-primary">Submit</button>
        </fieldset>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>