<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
if (isset($_POST['placeBooking']) and isset($_GET['id'])) {

    // untuk mengoneksikan dengan database dengan memanggil file db.php
    include('db.php');
    session_start();
    $user = $_SESSION['user'];
    $id_user = $user['id'];

    $id = $_GET['id'];
    $query = mysqli_query($con, "SELECT * FROM penerbangan WHERE id = '$id'") or die(mysqli_error($con));
    $data = mysqli_fetch_assoc($query); // fetch data

    $kode = $data['kode'];
    $asal = $data['asal'];
    $tujuan = $data['tujuan'];
    $tanggal = $data['tanggal'];
    $waktu = $data['waktu'];
    $jumlah = $_POST['jumlah'];
    $harga = $data['harga'];
    $total_harga = $jumlah * $harga;
    // Melakukan insert ke databse dengan query dibawah ini
    $query = mysqli_query(
        $con,
        "INSERT INTO booking(id_user, kode, asal, tujuan, tanggal, waktu, jumlah, harga, total_harga)
 VALUES
 ('$id_user', '$kode', '$asal', '$tujuan', '$tanggal', '$waktu', '$jumlah', '$harga', '$total_harga')"
    )
        or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

    if ($query) {
        echo
        '<script>
 alert("Booking Success"); window.location = "../page/bookingList.php"
 </script>';
    } else {
        echo
        '<script>
 alert("Booking Failed");
 </script>';
    }
} else {
    echo
    '<script>
 window.history.back()
 </script>';
}
