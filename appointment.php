<?php
$insert = false;
if (isset($_POST['first_name'])) {
  $server = "localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($server, $username, $password);

  if (!$con) {
    die("connection not sucesss" . mysqli_connect_error());
  }
  // echo "sucessful connection";

  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $city = $_POST['city'];
  $speciailty = $_POST['speciailty'];
  $time = $_POST['time'];
  $zip = $_POST['zip'];
  $appo_date = $_POST['appo_date'];


  $sql = "INSERT INTO `hospital`.`appointment` (`first_name`, `last_name`, `city`, `speciailty`, `perfect-time`, `zip_code`, `appo_date`, `current_time`) VALUES
  ('$first_name','$last_name','$city','$speciailty','$time','$zip','$appo_date',current_timestamp())";

  if ($con->query($sql) == true) {
    //echo "Sucessful";
    $insert = true;
  } else {
    "ERROR: $sql <br> $con->error";
  }
  $con->close();


}
?>

<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" type="text/css">
  <script type="text/javascript" src="css/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <title>VVC HOSPITAL</title>

</head>

<body class="body">


<header id="navi">
    <div class="logo">
      <div> <a class="" href="#"> <img id="logo-img" class=" w-20 mx-auto" src="image/logo.jpg" alt="">
        </a>

      </div>
      <div class="call">
        <div class="calling">
       <ul class="call-1">
         <li>
          <a href="">Help</a>
         </li>
         <li>
          <a href="http://localhost/hospital/appointment.php"> Appointment</a>
         </li>
         <li>
          <a href="">Call 108</a>
         </li>
       </ul>
      </div>
      
    </div>
    <nav class="navbar navbar-expand-lg fixed-top nav_foot">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link text-light" href="index.html">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="about.html">About</a>
          </li>
          <li class="nav-item dropdown drop-1">
            <a class="nav-link dropdown-toggle text-light dropdown-container" href="#" id="navbarDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Department & Services
            </a>
            <div class="dropdown-menu drop drop-menu-1" aria-labelledby="navbarDropdown">
              <a class="dropdown-item drop textdarkt" href="covid.html">Covid-19</a>
              <a class="dropdown-item drop text-dark" href="acc.html">Accident and emergency </a>
              <a class="dropdown-item drop text-dark" href="children.html">Childrens </a>
              <a class="dropdown-item drop text-dark" href="daibetes.html">Diabetes </a>
              <a class="dropdown-item drop text-dark" href="opd.html">OPD</a>
              <a class="dropdown-item drop text-dark" href="bones-join.html">Bones and joints</a>
              <a class="dropdown-item drop text-dark" href="children.html">Mother & Child </a>
            
            </div>
          </li>
          <li class="nav-item dropdown drop-2">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Medical & Professions
            </a>
            <div class="dropdown-menu drop-menu-2 text-light text-light" aria-labelledby="navbarDropdown">
              <a class="dropdown-item text-dark" href="doctor.html">Doctor's Profile</a>
           

            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="http://localhost/hospital/contac.php" text-light>Contac Us</a>
          </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark my-2 my-sm-0 text-light" type="submit">Search</button>
        </form>
      </div>
    </nav>



  </header>

  <main>
  
    <div class="apot">

      <div class="apo">
      
        <form class="needs-validation" name="appo-form" method="post" action="appointment.php" novalidate onsubmit="validateform()">
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom01">FIRST NAME</label>
              <input type="text" class="form-control" name="first_name" id="validationCustom01" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationCustom02">LAST NAME</label>
              <input type="text" class="form-control" name="last_name" id="validationCustom02" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom03" name="city">City</label>
              <input type="text" class="form-control" name="city" id="validationCustom03" required>
              <div class="invalid-feedback">
                Please provide a valid city.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationCustom04" name="speciailty">Speciailty</label>
              <select class="custom-select" id="validationCustom04" required name="speciailty">
                <option selected disabled value="">Select Speciailty</option>
                <option>Accident & Emergency</option>
                <option>Childrens</option>
                <option>Diabetes</option>
                <option>OPD</option>
                <option value="">Bones & Joints</option>
                <option value="">Mother & Child</option>
                <option value="">Psychiatrist</option>
                <option value="">Transplant</option>

              </select>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <label for="validationCustom04">Perfect-time</label>
              <select class="custom-select" id="validationCustom04" required name="time">
                <option selected disabled value="">Select Perfect time </option>
                <option>Morning</option>
                <option>Afternoon</option>
                <option>Evening</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid Time.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationCustom05">Zip</label>
              <input type="text" class="form-control" id="validationCustom05" required name="zip">
              <div class="invalid-feedback">
                Please provide a valid zip.
              </div>
            </div>
          </div>

          <div class="form-group">
            <form method="post" action="appointment.php">
              <label for="appo-date">Appointment Date:</label>
              <br>
              <input type="date" id="appo-date" name="appo_date">
            </form>
            <br>
            <br>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required name="terms_cond">
              <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
              </label>
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
            <br>
            <button class="btn btn-primary" type="submit">Request A Doctor’s Appointment</button>
          </div>

        </form>

        <?php
          if ($insert = true) {
            echo '<!-- Flexbox container for aligning the toasts -->
            <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center" style="min-height: 200px;">
            
              <!-- Then put toasts within -->
              <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                  <img src="..." class="rounded mr-2" alt="...">
                  <strong class="mr-auto">Bootstrap</strong>
                  <small>11 mins ago</small>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="toast-body">
                  Hello, world! This is a toast message.
                </div>
              </div>
            </div>';
                 
          }
          ?>

        <script>
          // Example starter JavaScript for disabling form submissions if there are invalid fields
          (function() {
            'use strict';
            window.addEventListener('load', function() {
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.getElementsByClassName('needs-validation');
              // Loop over them and prevent submission
              var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add('was-validated');
                }, false);
              });
            }, false);
          })();
        </script>
        <script>

        </script>
      </div>
    </div>
  </main>


  <footer>
    <div class="foot nav_foot text-light">
      <div class="foot-item-department text-light">
        <h3 class="text-light">Department</h3>
        <ul>
          <li>
            <a class="dep_foot" href="covid.html">Covid-19</a>
          </li>
          <li><a class=" dep_foot" href="acc.html">Accident and emergency </a>
          </li>
          <li><a class="dep_foot" href="children.html">Childrens </a>
          </li>
          <li> <a class="dep_foot" href="daibetes.html">Diabetes </a>
          </li>
          <li><a class="dep_foot" href="opd.html">OPD</a>
          </li>
          <li> <a class="dep_foot" href="bones-join.html">Bones and joints</a>
          </li>
          <li> <a class="dep_foot" href="children.html">Mother & Child </a>
          </li>
          <li><a href="psychiartist.html" class="dep_foot">psychiatrist </a>
          </li>
          <li><a href="transplant.html" class="dep_foot">Transplant</a>
          </li>
        </ul>
      </div>
      <div class="foot-item-medical">
        <h3>Medical & Profession</h3>
        <ul>
          <li>
          </li>
          <li> <a class="medical_foot" href="#">Doctor's Profile</a>
          </li>
          <li><a class="medical_foot" href="#">Awards</a></li>
        </ul>
      </div>
      <div class="foot-item-help">
        <h3>Help</h3>

      </div>
      <div class="foot-item">
        <h3>Contac Us</h3>
        <div class="social">
          <ul>
            <li><a href="https://www.facebook.com/vvc.hospital.7"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/HospitalVvc"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/vvchospital/"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/in/vvc-hospital-9493211b7/"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>

    </div>

    <hr id="hrow">
    <p id="copy">
      © 2020 VVC Hospital. All Rights Reserved.
    </p>
  </footer>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>