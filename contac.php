<?php
$insert = false;
if (isset($_POST['full_name'])) {
  $server = "localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($server, $username,$password);

  if (!$con) {
    die("connection not sucesss" . mysqli_connect_error());
  }
  // echo "sucessful connection";

  $full_name = $_POST['full_name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];

   $sql = "INSERT INTO `hospital`.`contact_us` ( `first_name`, `last_name`, `mobile_no`, `current_time`) VALUES ('$full_name', '$email', '$mobile', current_timestamp());";
  if ($con->query($sql) == true) {
    //echo "Sucessful";
    $insert = true;
  } else {
    "ERROR: $sql <br> $con->error";
  }
  $con->close();
}
?>

<html>
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
              <a class="nav-link dropdown-toggle text-light dropdown-container" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <a href="psychiartist.html" class="dropdown-item text-dark">psychiatrist </a>

              </div>
            </li>
            <li class="nav-item dropdown drop-2">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Medical & Professions
              </a>
              <div class="dropdown-menu drop-menu-2 text-light text-light" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-dark" href="doctor.html">Doctor's Profile</a>
                <a class="dropdown-item text-dark" href="award.html">Awards </a>

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
    <div class="reg">
      <form method="post" action="contac.php">
        <label for="full_name">Full Name : </label>
        <input type="text" id="full_name" name="full_name" placeholder="Full Name">

        <label for="email">Email-Id: </label>
        <input type="email" id="email" name="email" placeholder="Email-ID">

        <label for="mobile">Phone : </label>
        <input type="text" placeholder="Phone" id="mobile" name="mobile">
        <button class="submit">Submit</button>

      </form>



      <div class="info">
        <h1>VVC HOSPITAL</h1>
        <P>Ghulewadi Sangmner</P>

      </div>


    </div>

    <!-- php for data save to sever -->
    <?php

    if ($insert == true) {
      echo "<div class=\"contacyou\"><div class =\"thx\"><h1>Thank You</h1></div><div class=\"contac_y\"><h2>We Will Contac You Soon....</h2></div></div>";     
    }
    ?>


    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d883.3680302150201!2d74.19449632919186!3d19.601785099174286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdd0015282caeb3%3A0x5381ca748d56bc60!2sSathe%20Nagar%2C%20Ghulewadi%2C%20Maharashtra%20422608!5e1!3m2!1sen!2sin!4v1600337396748!5m2!1sen!2sin" width="1325" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" title="address">
      </iframe>

    </div>
  </main>

  <footer>
    <div class="foot nav_foot text-light">
      <div class="foot-item-department text-light">
        <h3 class="text-light">Department</h3>
        <ul>
          <li>
            <a class="dep_foot" href="covid.html>Covid-19</a>
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
        </ul>
      </div>
      <div class="foot-item-medical">
        <h3>Medical & Profession</h3>
        <ul>
          <li>
          </li>
          <li> <a class="medical_foot" href="#">Doctor's Profile</a>
          </li>
         
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