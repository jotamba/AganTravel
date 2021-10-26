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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/style.css" />
  <title>Home</title>
</head>

<body>
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

  <selection class="jumbotron-bg">
    <div class="jumbotron warna-bg text-white">
      <div class="container">
        <h1 class="display-4">Selamat Datang di AganTravel!</h1>
        <p class="lead">Website Booking Pesawat yang terpercaya.</p>
        <hr class=my-4>
        <p>Silahkan melakukan pemesanan pesawat di Website ini.</p>
      </div>
    </div>
  </selection>

  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-2">
        <div class="card border-secondary">
          <div class="card-body">
            <h5 class="card-title">Lihat Profil</h5>
            <p class="card-text">Cek Profil anda di sini</p>
            <a href="profil.php" class="btn btn-secondary">Here</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-2">
        <div class="card border-secondary">
          <div class="card-body">
            <h5 class="card-title">Booking List</h5>
            <p class="card-text">Cek Booking anda di sini</p>
            <a href="bookingList.php" class="btn btn-secondary">Here</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>