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
  <title>AganTravel.com - Pesawat</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />

  <link rel="stylesheet" href="../assets/css/style.css" />

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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

        <span class="navbar-text mr-2">
          <a href="profil.php" class="login">Profil</a></span>
        <a class="btn btn-light action-button" role="button" href="../process/logoutProcess.php">Log Out</a>
      </div>
    </nav>
  </div>


  <div class="container-fluid pt-4 mb-5">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card border-0">
          <p class="card-title text-center shadow rounded p-2" style="background-color: #2f7fad; color: white;">
            AganTravel Booking Form <br><strong>Travel Anti PHP</strong></p>
          <div class="card-body">
            <div class="icons text-center">
              <i class="fa fa-plane fa-2x" aria-hidden="true"></i>
            </div>
            <p class="text-center mt-2"><strong>Informasi Booking</strong></p>
            <hr>
            <?php
                if (isset($_GET['id'])) {

                  $id = $_GET['id'];

                  $query = mysqli_query($con, "SELECT * FROM booking WHERE id = '$id'") or die(mysqli_error($con));

                  if (mysqli_num_rows($query) == 0) {
                    echo '
                      <div class="d-flex justify-content-center p-1">
                        <div>
                          <h2><i class="fa fa-plane"></i><strong> Error </strong> </h2>
                        </div>
                      </div>
                    ';
                  } else {
                    while ($data = mysqli_fetch_assoc($query)) {
                      echo '
                        <div class="d-flex justify-content-between p-1">
                          <div>
                            <h5><i class="fa fa-plane"></i><strong> ' . $data['kode'] . ' | ' . $data['asal'] . ' - '. $data['tujuan'] .' </strong> </h5>
            
                            <h6>Rp ' . $data['harga'] . ' / person</h6>
                            <p>' . $data['tanggal'] . ' | ' . $data['waktu'] . '</p>
                          </div>
                        </div>
                      ';
                    }
                  }
                }
              ?>

            <form action="../process/updateBookingProcess.php?id=<?php echo (isset($id)) ? $id : '' ?>" method="post">
              <div class="row">
                <div class="col"> <input placeholder="Jumlah Penumpang" type="text" class="form-control" style="font-family:Arial, FontAwesome" name="jumlah"> </div>
              </div>
              <button type="submit" class="btn btn-primary d-flex justify-content-center mt-4 form-control" name="updateBooking">Update Booking</a>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="mastfoot mt-auto d-flex justify-content-center">
    <div class="inner">
      <p>Tubes PAW <b>@2021</b></p>
    </div>
  </footer>
</body>

</html>