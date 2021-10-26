<?php

    include('db.php');
    session_start();
    $user = $_SESSION['user'];
    $username = $user['username'];
    $query = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'") or die(mysqli_error($con));
    $user = mysqli_fetch_assoc($query);
    $id = $user['id'];
    $queryDelete = mysqli_query($con, "DELETE FROM users WHERE id='$id'") or die(mysqli_error($con));
    if ($queryDelete) {
        $_SESSION['isLogin'] = false;
        echo
        '<script>
 alert("Delete Success"); window.location = "../index.php"
 </script>';
    } else {
        echo
        '<script>
 alert("Delete Failed"); window.location = "../page/profil.php"
 </script>';
    }