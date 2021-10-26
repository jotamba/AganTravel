<?php
  session_start();
  if ($_SESSION['isLogin']) {
    header("location: page/home.php");
  } else {
    include('../process/db.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AganTravel.com</title>
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
    <link rel="stylesheet" href="assets/css/cover.css" />
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
    <div class="header-blue fixed-top">
      <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
        <a class="navbar-brand" href="index.php">AganTravel.com</a
        ><button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navcol-1"
        >
          <span class="sr-only">Toggle navigation</span
          ><span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-1">
          <ul class="nav navbar-nav">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" href="page/pesawat.php">Pesawat</a>
            </li>
          </ul>

          <form class="form-inline mr-auto" target="_self"></form>
          <ul class="nav navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="dropdown-toggle nav-link"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                href="#"
                >Bantuan
              </a>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" role="presentation" href="#"
                  >First Item</a
                >
                <a class="dropdown-item" role="presentation" href="#"
                  >Second Item</a
                >
                <a class="dropdown-item" role="presentation" href="#"
                  >Third Item</a
                >
              </div>
            </li>
          </ul>

          <span class="navbar-text mr-2">
            <a href="page/login.php" class="login">Log In</a></span
          >
          <a
            class="btn btn-light action-button"
            role="button"
            href="page/registrasi.php"
            >Register</a
          >
        </div>
      </nav>
    </div>

    <div class="cover-container d-flex w-100 h-100 pt-5 mx-auto flex-column text-center bg">

      <main role="main" class="inner cover pt-5 mt-5">
        <h1 class="cover-heading pt-5 mt-5">AganTravel.com</h1>
        <p class="lead">Travel Anti-PHP</p>
        <!-- <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
        </p> -->
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Tubes PAW <b>@2021</b></p>
        </div>
      </footer>
    </div>
  </body>
</html>
