<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
if (isset($_POST['register'])) {

    // untuk mengoneksikan dengan database dengan memanggil file db.php
    include('db.php');
    // tampung nilai yang ada di from ke variabel
    // sesuaikan variabel name yang ada di registerPage.php disetiap input
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $noTelepon = $_POST['noTelepon'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $isVerified = false;


    // Melakukan insert ke databse dengan query dibawah ini
    $query = mysqli_query(
        $con,
        "INSERT INTO users(username, nama, email, noTelepon, password, isVerified)
 VALUES
 ('$username', '$nama', '$email', '$noTelepon', '$password', '$isVerified')"
    )
        or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

    if ($query) {
        echo
        '<script>
 alert("Register Success"); window.location = "../index.php"
 </script>';
    } else {
        echo
        '<script>
 alert("Register Failed");
 </script>';
    }
} else {
    echo
    '<script>
 window.history.back()
 </script>';
}
