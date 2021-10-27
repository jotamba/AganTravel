<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
if (isset($_POST['updateBooking']) and isset($_GET['id'])) {

    // untuk mengoneksikan dengan database dengan memanggil file db.php
    include('db.php');
    $id = $_GET['id'];
    $jumlah = $_POST['jumlah'];

    $query = mysqli_query($con, "SELECT * FROM booking WHERE id = '$id'") or die(mysqli_error($con));
    $data = mysqli_fetch_assoc($query);
    $harga = $data['harga'];
    $total_harga = $jumlah * $harga;

    $query = mysqli_query(
        $con,
        "UPDATE booking SET jumlah = '$jumlah', total_harga = '$total_harga' WHERE id='$id'"
    )
        or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

    if ($query) {
        echo
        '<script>
            alert("Edit Data Success"); window.location = "../page/bookingList.php"
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
 window.history.back()
 </script>';
}
