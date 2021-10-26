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
    <title>Profil</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <link rel="stylesheet" href="../assets/css/styleprofilenav.css" />
  </head>

  <body>
    <div class="row">
      <div class="col-3 overflow-hidden">
        <nav class="sidebar">
          <div
            class="
              vh-100
              flex-shrink-0
              p-3
              text-white
              bg-dark
            "
            style="width: 250px"
          >
            <a
              href="/"
              class="
                d-flex
                align-items-center
                mb-3 mb-md-0
                me-md-auto
                text-white text-decoration-none
              "
            >
              <svg class="bi me-2" width="40" height="32"></svg>
            </a>

            <ul class="nav nav-pills flex-column mb-auto">
              <a href="#" class="d-flex align-items-center text-white">
                <img
                  src="http://logo.uajy.ac.id/file/uploads/2021/08/UAJY-LOGOGRAM_-01.png"
                  alt=""
                  width="32"
                  height="32"
                  class="rounded-circle me-2"
                />
                <strong> Kelompok B </strong>
              </a>
              <br />
              <li class="nav-item">
                <a
                  href="home.php"
                  class="nav-link text-white"
                  aria-current="page"
                >
                  <i class="bx bx-grid-alt"></i
                  ><span class="ms-2">Home</span>
                </a>
              </li>
              <li class="nav-item">
                <a
                  href="profil.php"
                  class="nav-link active text-white"
                  aria-current="page"
                >
                  <i class="fa fa-user-circle-o"></i
                  ><span class="ms-2">Profile</span>
                </a>
              </li>
              <li>
                <a href="bookingList.php" class="nav-link text-white">
                  <i class="fa fa-first-order"></i
                  ><span class="ms-2">My Orders</span>
                </a>
              </li>
            </ul>
            <hr />
            <div></div>
            <a href="#">
              <i class="bx bx-log-out nav_icon"></i><span> SignOut</span>
            </a>
          </div>
        </nav>
      </div>
      <div class="col-9 overflow-hidden">
        <div class="mt-5 me-5">
          <!-- <div class="wrapper bg-white mt-sm-5"> -->
          <h4 class="pb-4 border-bottom">Account settings</h4>
          <div class="py-2">
            <div class="row py-2">
              <div class="col-md-6">
                <label for="firstname">First Name</label>
                <input
                  type="text"
                  class="bg-light form-control"
                  placeholder="Kelompok"
                />
              </div>
              <div class="col-md-6 pt-md-0 pt-3">
                <label for="lastname">Last Name</label>
                <input
                  type="text"
                  class="bg-light form-control"
                  placeholder="PAW"
                />
              </div>
            </div>
            <div class="row py-2">
              <div class="col-md-6">
                <label for="email">Email Address</label>
                <input
                  type="text"
                  class="bg-light form-control"
                  placeholder="PAW@email.com"
                />
              </div>
              <div class="col-md-6 pt-md-0 pt-3">
                <label for="phone">Phone Number</label>
                <input
                  type="tel"
                  class="bg-light form-control"
                  placeholder="08xxxxxxxxxx"
                />
              </div>
            </div>
            <div class="row py-2">
              <div class="col-md-6">
                <label for="country">Country</label>
                <select name="country" id="country" class="bg-light">
                  <option value="ind" selected>Indonesia</option>
                  <option value="usa">USA</option>
                  <option value="kra">Korea</option>
                  <option value="jpn">Japan</option>
                </select>
              </div>
            </div>
            <div class="py-3 pb-4 border-bottom">
              <button class="btn btn-primary mr-3">Save Changes</button>
              <button class="btn border button">Cancel</button>
            </div>
          </div>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </body>
</html>