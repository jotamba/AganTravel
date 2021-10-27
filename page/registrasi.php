<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Register Page</title>
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
    <link rel="stylesheet" href="../assets/css/style.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>

  <body>
    <!-- navbar -->
    <div class="header-blue">
      <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
        <a class="navbar-brand" href="../index.php">AganTravel.com</a
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
              <a class="nav-link active" href="pesawat.php">Pesawat</a>
            </li>
          </ul>

          <form class="form-inline mr-auto" target="_self"></form>

          <span class="navbar-text mr-2">
            <a href="login.php" class="login">Log In</a></span
          >
          <a
            class="btn btn-light action-button"
            role="button"
            href="registrasi.php"
            >Register</a
          >
        </div>
      </nav>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div
            class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden"
          >
            <div class="card-img-left-register d-none d-md-flex"></div>
            <div class="card-body p-4 p-sm-5">
              <h3 class="card-title text-center mb-5 fw-light fs-5">
                <strong>Register</strong>
              </h3>
              <form action="../process/registerProcess.php" method="post">
                <div class="form-floating mb-3">
                  <label for="floatingInputUsername">Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="floatingInputUsername"
                    placeholder="username"
                    required
                    autofocus
                    name="username"
                  />
                </div>
  
                <div class="form-floating mb-3">
                  <label for="floatingInputNama">Nama</label>
                  <input
                    type="text"
                    class="form-control"
                    id="floatingInputName"
                    placeholder="Nama"
                    required
                    autofocus
                    name="nama"
                  />
                </div>
  
                <div class="form-floating mb-3">
                  <label for="floatingInputEmail">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="floatingInputEmail"
                    placeholder="name@email.com"
                    name="email"
                  />
                </div>
  
                <div class="form-floating mb-3">
                  <label for="floatingPhoneNumber">No Telepon</label>
  
                  <input
                    type="text"
                    class="form-control"
                    id="floatingInputPhoneNumber"
                    placeholder="08XXXXXXXXXX"
                    name="noTelepon"
                  />
                </div>
  
                <div class="form-floating mb-3">
                  <label for="floatingPassword">Password</label>
                  <input
                    type="password"
                    class="form-control"
                    id="floatingPassword"
                    placeholder="Password"
                    name="password"
                  />
                </div>
  
                <button
                  class="
                    btn btn-primary
                    fw-bold
                    text-uppercase
                    mt-2
                    form-control
                  "
                  type="submit"

                  name="register"
                >
                  Register Now
                </button>
  
                <p class="d-block text-center mt-2 small">
                  Have an account?<a href="login.php"> Login</a>
                </p>
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
