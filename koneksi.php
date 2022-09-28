<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "dbwisata";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    if($connect) {
        echo "Koneksi ke MySQL berhasil <br>";
    } else {
        echo "Koneksi ke MySQL gagal <br>" . mysqli_connect_error();
    }

    $sql = "CREATE DATABASE dbwisata";
    if (mysqli_query($connect, $sql)) {
        echo "Database berhasil dibuat";
    } else {
        echo "Database gagal dibuat <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>