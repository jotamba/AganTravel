<?php
session_start();
if (!$_SESSION['isLogin']) {
  header("location: login.php");
} else {
  include('../process/db.php');
  $user = $_SESSION['user'];
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
  <link rel="stylesheet" href="../assets/css/styleprofil.css" />
</head>

<body>
  <div class="container-fluid">
    <div class="row">
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
                <a href="profil.php" class="nav-link text-white" aria-current="page">
                  <i class="fa fa-user-circle-o"></i><span class="ms-2">Profile</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="bookingList.php" class="nav-link text-primary">
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
      
      <div class="col-9 p-0">
        <div class="mt-5 me-5">
          <br>
          <h2 class="text-center">My Order</h2>
          <br><br>

          <table class="table table-bordered">
            <tr>
              <th>No Penerbangan</th>
              <th>Kota Asal</th>
              <th>Kota Tujuan</th>
              <th>Tanggal Penerbangan</th>
              <th>Waktu Penerbangan</th>
              <th>Jumlah</th>
              <th>Harga</th>
              <th>Total Harga</th>
              <th>Action</th>
            </tr>

            <!-- <tr>
              <td>GA1456</td>
              <td>Yogyakarta</td>
              <td>Jakarta</td>
              <td>27 Oktober 2021</td>
              <td>09:00 - 12:00 WIB</td>
              <td>2</td>
              <td>400.000</td>
              <td class="text-center">
                <a href="#"><i style="color: green" class="fa fa-edit"></i></a>
                <a href="#" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i style="color: red" class="fa fa-trash"></i></a>
              </td>
            </tr> -->

            <?php
              $id_user = $user['id'];

              $query = mysqli_query($con, "SELECT * FROM booking WHERE id_user = '$id_user'") or die(mysqli_error($con));

              if (mysqli_num_rows($query) == 0) {
                echo '
                  <tr>
                    <td align="center" colspan="9">Anda belum booking gan</td>
                  </tr>
                ';
              } else {
                while ($data = mysqli_fetch_assoc($query)) {
                  echo '
                    <tr>
                      <td>'. $data['kode'] .'</td>
                      <td>'. $data['asal'] .'</td>
                      <td>'. $data['tujuan'] .'</td>
                      <td>'. $data['tanggal'] .'</td>
                      <td>'. $data['waktu'] .'</td>
                      <td>'. $data['jumlah'] .'</td>
                      <td>'. $data['harga'] .'</td>
                      <td>'. $data['total_harga'] .'</td>
                      <td class="text-center">
                        <a href="#"><i style="color: green" class="fa fa-edit"></i></a>
                        <a href="#" onclick="return confirm(\'Apakah anda yakin ingin menghapus data ini?\')"><i style="color: red" class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  ';
                }
              }
            ?>
          </table>
        </div>

      </div>
    </div>
  </div>
</body>

</html>