<?php include 'headeradmin.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>

  <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Kidzo</title>
    <link rel="icon" href="img/favicon.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css" />
    <!-- elegent icon CSS -->
    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />
    <!-- nice select CSS -->
    <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />
    <!-- magnify popup CSS -->
    <link rel="stylesheet" href="vendors/magnify_popup/magnific-popup.css" />
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />

</head>
<body>

      <!-- Preloader  -->
    <div class='preloder'>
        <div class='loader'>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--text'></div>
        </div>
    </div>
    <!-- End Preloader  -->

  <div class="container">

  <br><br>

<form method="POST" action="createaccstaffprocess.php">
  <fieldset>
    <legend><h1>CREATE STAFF ACCOUNT</h1></legend>

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Full name</label>
      <input type="" name="fname" class="form-control" id="exampleInputPassword1" placeholder="Please Enter Full Name" required>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">IC</label>
      <input type="" name="fic" class="form-control" id="exampleInputPassword1" placeholder="Please Enter IC" required>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword2" class="form-label mt-4">Create Password</label>
      <input type="Password" name="fpwd" class="form-control" id="fwpd" placeholder="Please Create Strong Password" required>
    </div>

    <br><input class="form-check-input" type="checkbox" onclick="myFunction()">Show Password

<div class="form-group">
  <label for="exampleInputPassword2" class="form-label mt-4">Confirm Password</label>
  <input type="Password" name="frepwd" class="form-control" id="frepwd" onkeyup="validate_password()" placeholder="Please Confirm Password" required>
</div>

 <span id="passalert"></span>  

    
    <div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Address</label>
      <textarea class="form-control" name="fadd" id="exampleTextarea" rows="3" placeholder="Enter Your Address"></textarea>
    </div>

    <div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Street</label>
      <textarea class="form-control" name="fstreet" id="exampleTextarea" rows="3" placeholder="Enter Your Street"></textarea>
    </div>

    <div class="form-group">
  <label for="state" class="form-label mt-4">City</label>
  <select name="fcity" class="form-control" id="state" placeholder="Enter Your City" required>
    <option value="">Select State</option>
    <option value="Johor">Johor</option>
    <option value="Kedah">Kedah</option>
    <option value="Kelantan">Kelantan</option>
    <option value="Melaka">Melaka</option>
    <option value="Negeri Sembilan">Negeri Sembilan</option>
    <option value="Pahang">Pahang</option>
    <option value="Penang">Penang</option>
    <option value="Perak">Perak</option>
    <option value="Perlis">Perlis</option>
    <option value="Sabah">Sabah</option>
    <option value="Sarawak">Sarawak</option>
    <option value="Selangor">Selangor</option>
    <option value="Terengganu">Terengganu</option>
    <option value="W.P. Kuala Lumpur">W.P. Kuala Lumpur</option>
    <option value="W.P. Labuan">W.P. Labuan</option>
    <option value="W.P. Putrajaya">W.P. Putrajaya</option>
  </select>
</div>

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Postcode</label>
      <input type="" class="form-control" name="fpostcode" id="exampleTextarea" placeholder="Enter Your Postcode Number">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Contact Number</label>
      <input type="" class="form-control" name="fphone" id="exampleInputPassword1" placeholder="Your Mobile Phone Number" required>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Email</label>
      <input type="" class="form-control" name="femail" id="exampleInputPassword1" placeholder="Enter Your Email" required>
    </div>

    <br><br>




    <button type="submit" class="cu_btn btn_2">Create</button>
    <button type="reset" class="cu_btn btn_3">Clear</button>

  </fieldset>
</form>

<br><br><br>


</div>

</body>
</html>

<script>
function myFunction() {
  var x = document.getElementById("fpwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function validate_password() {
 
    var fpwd = document.getElementById('fpwd').value;
    var frepwd = document.getElementById('frepwd').value;
    if (fpwd != frepwd) {
        document.getElementById('passalert').style.color = 'red';
        document.getElementById('passalert').innerHTML
          = '☒ Password not match';
        document.getElementById('create').disabled = true;
        document.getElementById('create').style.opacity = (0.4);
    } else {
        document.getElementById('passalert').style.color = 'green';
        document.getElementById('passalert').innerHTML =
            '🗹 Password Matched';
        document.getElementById('create').disabled = false;
        document.getElementById('create').style.opacity = (1);
    }
}

function passalert() {
    if (document.getElementById('fpwd').value != "" &&
        document.getElementById('frepwd').value != "") {
        alert("Your response is submitted");
    } else {
        alert("Please fill all the fields");
    }
}
</script>

<?php include 'footer.php'; ?>

<br>