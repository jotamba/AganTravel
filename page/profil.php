<?php
session_start();
if (!$_SESSION['isLogin']) {
  header("location: login.php");
} else {
  include('../process/db.php');
  $user = $_SESSION['user'];
  $nama = $user['nama'];
  $email = $user['email'];
  $noTelepon = $user['noTelepon'];
  $password = $user['password'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Profil</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../assets/css/styleprofil.css" />
  <script type="text/javascript" src="..\scripts\script.js"></script>
</head>

<body>
  <div class="container-fluid">
    <div class="row mr-3">
      <div class="col-3 overflow-hidden">
        <nav class="sidebar">
          <div class="
              vh-100
              flex-shrink-0
              p-3
              text-white
              bg-dark
            " style="width: 250px">
            <a href="/" class="
                d-flex
                align-items-center
                mb-3 mb-md-0
                me-md-auto
                text-white text-decoration-none
              ">
              <svg class="bi me-2" width="40" height="32"></svg>
            </a>

            <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item mb-3">
                  <h5 class="nav-link text-warning"><strong> AganTravel.com </strong></h5>
              </li>
              <li class="nav-item">
                <a href="profil.php" class="nav-link text-primary" aria-current="page">
                  <i class="fa fa-user-circle-o"></i><span class="ms-2">Profile</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="bookingList.php" class="nav-link text-white">
                  <i class="fa fa-first-order"></i><span class="ms-2">My Orders</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="home.php" class="nav-link text-white" aria-current="page">
                <i class="fa fa-arrow-left"></i><span class="ms-2">Back</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="col-7">
        <div class="mt-5 me-2">
          <!-- <div class="wrapper bg-white mt-sm-5"> -->
          <h4 class="pb-4 border-bottom">Account settings</h4>
          <form action="../process/editProfilProcess.php" method="post">
            <div class="py-2">
              <div class="row py-2">
                <div class="col-md-6">
                  <label for="namae">Nama</label>
                  <input type="text" class="bg-light form-control" placeholder="Nama" name="nama" value="<?php echo (isset($nama)) ? $nama : '' ?>" />
                </div>
                <div class="col-md-6 pt-md-0 pt-3">
                  <label for="email">Email</label>
                  <input type="email" class="bg-light form-control" placeholder="Email" name="email" value="<?php echo (isset($email)) ? $email : '' ?>" />
                </div>
              </div>
              <div class="row py-2">
                <div class="col-md-6">
                  <label for="noTelepon">Nomor Telepon</label>
                  <input type="text" class="bg-light form-control" placeholder="Nomor Telepon" name="noTelepon" value="<?php echo (isset($noTelepon)) ? $noTelepon : '' ?>" />
                </div>
                <div class="col-md-6 pt-md-0 pt-3">
                  <label for="password">Password</label>
                  <div class="input-group">
                    <input type="password" class="bg-light form-control" placeholder="Password" name="password" id="password" />
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="bi bi-eye-slash" id="togglePassword" onclick="myFunction()"></i></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="py-3 pb-4 border-bottom">
                <button class="btn btn-primary me-2" type="submit" name="saveChanges">Save Changes</button>
                <a href="../process/deleteProfilProcess.php" onclick="return confirm ( 'Yakin?')">
                  <button class="btn btn-danger" type="button">Delete Account</button>
                </a>
              </div>
            </div>
          </form>

          <!-- </div> -->
        </div>

      </div>
    </div>
  </div>

</body>

</html>