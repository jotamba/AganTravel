<?php
  session_start();
  if (!$_SESSION['isLogin']) {
    header("location: login.php");
  } else {
    include('../process/db.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AganTravel.com - Hotel</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
    />

    <link rel="stylesheet" href="../assets/css/style.css" />

    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript" src="scripts\script.js"></script>
  </head>

  <body>
    <!-- navbar -->
    <div class="header-blue">
    <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
      <a class="navbar-brand" href="home.php">AganTravel.com</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
        <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="nav navbar-nav">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" href="pesawat.php">Pesawat</a>
          </li>
        </ul>

        <form class="form-inline mr-auto" target="_self"></form>
        <ul class="nav navbar-nav">
          <li class="nav-item dropdown">
            <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Bantuan
            </a>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" role="presentation" href="#">First Item</a>
              <a class="dropdown-item" role="presentation" href="#">Second Item</a>
              <a class="dropdown-item" role="presentation" href="#">Third Item</a>
            </div>
          </li>
        </ul>

        <span class="navbar-text mr-2">
          <a href="profil.php" class="login">Profil</a></span>
        <a class="btn btn-light action-button" role="button" href="../process/logoutProcess.php">Log Out</a>
      </div>
    </nav>
  </div>

    <div class="container-fluid pt-4 mb-5">
      <div class="row">
        <div class="col-sm-10">
          <p
            class="card-title text-center shadow rounded p-2"
            style="background-color: white; color: black"
          >
            <strong> Pekanbaru to Yogyakarta </strong> <br />
            Rabu, 20 Oktober 2021
          </p>
        </div>
        <div class="col-sm-1 text-center">
          <br />
          <a href="pesawat.html" class="btn btn-primary">
              <i class="fa fa-search"></i>
              Change Search
            </a>
        </div>
      </div>
    </div>

    <div class="container-fluid pt-4 mb-5">
      <div class="row">
        <div class="col-sm-10">
          <p
            class="card-body text-left shadow rounded p-2"
            style="background-color: white; color: black"
          >
            <img
              src="https://ik.imagekit.io/tvlk/image/imageResource/2019/12/12/1576140134467-906ded3638e9045d664adc40caa8ec47.png?tr=q-75,w-28"
              alt=""
            />
            <strong> Garuda Indonesia </strong> Rp 1.800.000<br />
            Rabu, 20 Oktober 2021 | 07:20
            <img
              src="https://d1785e74lyxkqq.cloudfront.net/godwit/lib/_/_/node_modules/@traveloka/web-components/svg/16/ic_flight_route_16px-2a29aa4dcda893738069caa1c12beaad.svg"
              alt=""
            />
            9:20
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-10">
          <p
            class="card-body text-left shadow rounded p-2"
            style="background-color: white; color: black"
          >
            <img
              src="https://ik.imagekit.io/tvlk/image/imageResource/2015/12/17/1450350561012-6584b693edd67d75cfc25ecff41c5704.png?tr=q-75,w-28"
              alt=""
            />
            <strong> Citilink </strong> Rp 1.300.000<br />
            Rabu, 20 Oktober 2021 | 08:40
            <img
              src="https://d1785e74lyxkqq.cloudfront.net/godwit/lib/_/_/node_modules/@traveloka/web-components/svg/16/ic_flight_route_16px-2a29aa4dcda893738069caa1c12beaad.svg"
              alt=""
            />
            10:55
          </p>
        </div>
      </div>
    </div>
  </body>

  <footer class="mastfoot mt-auto d-flex justify-content-center">
    <div class="inner">
      <p>Tubes PAW <b>@2021</b></p>
    </div>
  </footer>
</html>
