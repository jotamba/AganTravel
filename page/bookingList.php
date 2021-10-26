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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="../assets/css/styleprofil.css" />
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
              <a href="#" class="d-flex align-items-center text-white">
                <img src="http://logo.uajy.ac.id/file/uploads/2021/08/UAJY-LOGOGRAM_-01.png" alt="" width="32" height="32" class="rounded-circle me-2" />
                <strong> Kelompok B </strong>
              </a>
              <br />
              <li class="nav-item">
                <a href="home.php" class="nav-link text-white" aria-current="page">
                  <i class="bx bx-grid-alt"></i><span class="ms-2">Home</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="profil.php" class="nav-link text-white" aria-current="page">
                  <i class="fa fa-user-circle-o"></i><span class="ms-2">Profile</span>
                </a>
              </li>
              <li>
                <a href="bookingList.php" class="nav-link text-primary">
                  <i class="fa fa-first-order"></i><span class="ms-2">My Orders</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="col-8">
        <div class="mt-5 me-5">
          <br>
          <h2 class="text-center">My Order</h2>
          <br><br>

          <table class="table table-bordered">
            <tr>
              <th>No Order</th>
              <th>No Penerbangan</th>
              <th>Nama Penumpang</th>
              <th>Kota Asal</th>
              <th>Kota Tujuan</th>
              <th>Tanggal Penerbangan</th>
              <th>Waktu Penerbangan</th>
              <th>Harga</th>
            </tr>

            <!-- @if(count($data_order))
              @foreach ($data_order as $dpo) -->

            <!-- <tr>
                  <td>{{ $dpt->nip}}</td>
                  <td>{{ $dpt->nama_pegawai}}</td>
                  <td>{{ $dpt->departemen->nama_departemen}}</td>
                  <td>{{ $dpt->email}}</td>
                  <td>{{ $dpt->telepon}}</td>
              </tr> -->

            <!-- @endforeach  -->
            <!-- @else -->
            <tr>
              <td align="center" colspan="8">Empty Data!! Have a Nice Day</td>
            </tr>
            <!-- @endif -->
          </table>
          <!-- <div class="container">
              <div  class="d-flex justify-content-center">{{ $data_pegawai->links() }}</div>
          </div> -->
          <!-- <div class="container">
            <div class="row">
              <div class="col-md-3 mb-2">
                <div class="card border-secondary">
                  <div class="card-body">
                    <h6 class="card-title text-info">Booking Pesawat</h6>
                    <div class="form-group">
                      <strong>Jenis Penerbangan</strong>
                    </div>
                    <div class="form-group">
                      <strong>Asal</strong>
                    </div>
                    <div class="form-group">
                      <strong>Tujuan</strong>
                    </div>
                    <div class="form-group">
                      <strong>Waktu</strong>
                    </div>
                    <div class="form-group">
                      <strong>Penumpang</strong>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
        </div>

      </div>
    </div>
  </div>
</body>

</html>