

<!doctype html>
<html lang="en">
<!-- php sql INSERT INTO `login_admin` (`admin_id`, `user_id`, `password`, `current_time`) VALUES ('1', 'admin', 'admin', current_timestamp()); -->

<head>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/admin_data.css?v=<?php echo time(); ?>">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="">
    <meta http-equiv="refresh" content="180">
    <!-- Bootstrap CSS -->
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

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="http://localhost/hospital/contac.php" text-light>Contac
                                Us</a>
                        </li>

                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark my-2 my-sm-0 text-light" type="submit">Search</button>
                    </form>
                </div>
            </nav>



    </header>