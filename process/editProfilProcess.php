<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
if (isset($_POST['saveChanges'])) {

    // untuk mengoneksikan dengan database dengan memanggil file db.php
    include('db.php');
    session_start();
    $user = $_SESSION['user'];
    $username = $user['username'];
    $query = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'") or die(mysqli_error($con));
    $user = mysqli_fetch_assoc($query);
    $id = $user['id'];
    $username = $user['username'];
    // tampung nilai yang ada di from ke variabel
    // sesuaikan variabel name yang ada di registerPage.php disetiap input
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $noTelepon = $_POST['noTelepon'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // Melakukan insert ke databse dengan query dibawah ini
    $query = mysqli_query(
        $con,
        "UPDATE users SET nama = '$nama', email = '$email', 
        noTelepon = '$noTelepon', password = '$password' WHERE id='$id'"
    )
        or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

    if ($query) {
        $query = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'") or die(mysqli_error($con));
        $user = mysqli_fetch_assoc($query);
            //isLogin ini temp variable yang gunanya buat ngecek nanti apakah sdh login ato belum
        $_SESSION['user'] = $user;
        echo
        '<script>
            alert("Edit Data Success"); window.location = "../page/profil.php"
            </script>';
    } else {
        echo
        '<script>
            alert("Edit Data Failed");
            </script>';
    }
} else {
    echo
    '<script>
    alert("Ada field kosong!");
 window.history.back()
 </script>';
}
