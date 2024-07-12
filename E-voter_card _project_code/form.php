<?php
session_start();
if(!isset($_SESSION['user']))
{
    header('location:mainpage.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'style.php'?>
    <?php include 'links.php'?>
    <title>Document</title>
</head>
<body>
<div class="container-fluid par py-2 pl-5">
        <div class="row">
            <div class="col-3">
                <img src="https://election.gov.np/static/media/logo.fdf1cfa1.png">
            </div>
            <div class="col-5 text-center pr-5"><h1 class="text-danger font-weight-bold">निर्वाचन आयोग नेपाल</h1>
            <h4 class="font-weight-light">कान्तिपथ, काठमाण्डौ</h4></div>
            <div class="col-4  pl-5">
                <img src=https://election.gov.np/static/media/logo-1.56a73d1a.png>
            </div>
        </div>
    </div>
    <div class="nav py-2">
        
        <ul class="line container-fluid par py-2 pl-5">
            <li><a href="infocollecter.php" class="pr-5">गृह पृष्ठ</a></li>
            <li><a href="inquiry.php" class="pr-5">सोधपुछ</a></li>
            <li><a href="form.php" class="pr-5">मतदाता परिचयपत्र फारम </a></li>
            <li><a href="votercard.php" class="pr-5">मतदाता परिचयपत्र</a></li>
            <li><div>
        <a href="logout.php" class="pr-5">लग -आउट  </a>
        </div></li>
        <li><marquee class="text-light">१८ वर्ष उमेर पुरा भएका नेपाली नागरिकहरुले मतदाता परिचय पत्र बनाउन सक्नुहुनेछ ।  </marquee></li>
        </ul>
    </div>
    <from  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
    <div class="container-fluid par py-4 pl-5">
    <legend>व्यक्तिगत विवरण </legend>
        <fieldset class="container-fluid par py-4 pl-5" style="border:5px solid gray; margin-top:20px;">
  <div class="row mb-3">
    <label for="fname" class="col-sm-2 col-form-label">पुरा नाम </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fname" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="gender" class="col-sm-2 col-form-label">लिङ्ग</label>
<div class="col-sm-10">
    <select class="form control" id="gender">
    <option>छनोट गर्नुहोस </option>
        <option>पुरुष </option>
        <option>महिला </option>
        <option>अन्य </option>
    </select>
</div>
  </div>
  <div class="row mb-3">
    <label for="hwn" class="col-sm-2 col-form-label">पति / पत्नीको नाम  </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="hwn" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="fn" class="col-sm-2 col-form-label">बाबुको नाम </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fn" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="mn" class="col-sm-2 col-form-label">आमाको नाम</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="mn" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="gn" class="col-sm-2 col-form-label">बाजेको नाम </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="gn" required>
    </div>
  </div>

        </fieldset>
    </div>
    <div class="container-fluid par py-4 pl-5">
    <legend>नागरिकता प्रमाणपत्रको विवरण  </legend>
        <fieldset class="container-fluid par py-4 pl-5" style="border:5px solid gray; margin-top:20px;">
  <div class="row mb-3">
    <label for="cn" class="col-sm-2 col-form-label">नागरिकता प्र. न.  </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="cn" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="ad" class="col-sm-2 col-form-label">जारि जिल्ला  </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="ad"  required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="add" class="col-sm-2 col-form-label">जारि मिति </label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="add" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="bd" class="col-sm-2 col-form-label">जन्म स्थान जिल्ला </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bd" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="vm" class="col-sm-2 col-form-label">गा.पा/ न.पा </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="vm" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="w" class="col-sm-2 col-form-label">वडा न. </label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="w" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="dob" class="col-sm-2 col-form-label">जन्म मिति </label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="dob" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="ct" class="col-sm-2 col-form-label">नागरिकताको किसिम  </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="ct" required>
    </div>
  </div>
        </fieldset>
        
    </div>
    </div>
    <div class="container-fluid par py-4 pl-5">
    <legend>स्थाई बसोबासको ठेगाना  </legend>
        <fieldset class="container-fluid par py-4 pl-5" style="border:5px solid gray; margin-top:20px;">
  <div class="row mb-3">
    <label for="d" class="col-sm-2 col-form-label">जिल्ला</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="d" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="vm" class="col-sm-2 col-form-label">गा.पा/ न.पा </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="vm"  required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="w" class="col-sm-2 col-form-label">वडा न.</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="w" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="vp" class="col-sm-2 col-form-label">मतदान स्थल </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="vp" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="vt" class="col-sm-2 col-form-label">गाउँ/टोलको नाम </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="vt" required>
    </div>
  </div>
        </fieldset>
    </div>
    <div class="container-fluid par py-4 pl-5">
    <legend>अन्य  </legend>
        <fieldset class="container-fluid par py-4 pl-5" style="border:5px solid gray; margin-top:20px;">
  <div class="row mb-3">
    <label for="aq" class="col-sm-2 col-form-label">शैक्षिक स्थिति</label>
<div class="col-sm-10">
    <select class="form control" id="aq">
    <option>छनोट गर्नुहोस </option>
    <option>निरक्षर </option>
        <option>प्राथमिक तह  </option>
        <option>माध्यमिक तह </option>
        <option>उच्च माध्यमिक तह  </option>
        <option>स्नातक तह </option>
        <option>स्नातकोत्तर तह </option>
        <option>विद्यावारीधि  तह </option>
    </select>
</div>
  </div>
  <div class="row mb-3">
    <label for="ml" class="col-sm-2 col-form-label">मातृभाषा </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="ml"  required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="mn" class="col-sm-2 col-form-label">मोबाईल न.</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="mn" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="email" class="col-sm-2 col-form-label">इमेल ठेगाना</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" required>
    </div>

        </fieldset>
        <button type="submit" class="btn btn-danger my-4">पेश गर्नुहोस </button>
    </div>
    </from>
</body>
</html>