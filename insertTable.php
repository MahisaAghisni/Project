<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "dbwisata";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    $id=$_POST['id'];
    $nama=$_POST['name'];
    $harga=$_POST['price'];
    $diskon=$_POST['diskon'];
    $gambar_wahana=$_FILES['gambar_wahana']['name'];
    $source=$_FILES['gambar_wahana']['tmp_name'];

    if($connect) {
        echo "Koneksi ke MySQL berhasil <br>";
    } else {
        echo "Koneksi ke MySQL gagal <br>" . mysqli_connect_error();
    }

    $sql = "INSERT INTO wahana(id, wahana_name, harga, diskon)
            VALUES ('$id','$nama','$harga','$harga','$diskon')";
            // -- (1, 'Family coaster', 15000,),
            // -- (2, 'Sky Bike', 20000),
            // -- (3, 'Flying Fox', 25000),
            // -- (4, 'Sepeda Air', 20000),
            // -- (5, 'Cinema 4D', 10000),
            // -- (6, 'Mandi Air Panas', 5000),
            // -- (7, 'Photo Digital', 15000)";

    if (mysqli_query($connect, $sql)) {
        echo "Data berhasil ditambahkan";
    } 
    else {
        echo "Data gagal ditambahkan <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>