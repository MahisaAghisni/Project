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

    $sql = "CREATE TABLE wahana (
            id INT PRIMARY KEY,
            wahana_name VARCHAR(255) NOT NULL,
            harga INT NOT NULL,
            gambar VARCHAR(255) NOT NULL)";
            

    if (mysqli_query($connect, $sql)) {
        echo "Tabel Wahana berhasil dibuat";
    } else {
        echo "Tabel Wahana gagal dibuat <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>