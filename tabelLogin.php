<?php
    include('cek_koneksi.php');

    $sql = "CREATE TABLE login(
        id INT PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(255),
        password VARCHAR(255)
    )";

    if(mysqli_query($connect, $sql)){
        echo "Table logi berhasil dibuat";
    }else{
        echo "Table login gagal dibuat <br>".mysqli_error($connect);
    }
    mysqli_close($connect);
?>