<?php
    include "cek_koneksi.php";
    if(isset($_POST['tambah'])) {
    $id=$_POST['id'];
    $nama=$_POST['name'];
    $harga=$_POST['price'];
    $diskon=$_POST['diskon'];
    $gambar_wahana=$_FILES['gambar']['name'];
    $source=$_FILES['gambar']['tmp_name'];
    $folder='img/';
    if($gambar_wahana != ''){
        move_uploaded_file($source,$folder.$gambar_wahana);
        $query="INSERT INTO wahana (id,wahana_name,harga,diskon,gambar) VALUES ('$id', '$nama', '$harga','$diskon', '$gambar_wahana')";
        $result = mysqli_query($connect,$query);
        if($result){
            echo "<script> alert('Data berhasil di Update'); document.location = 'homeCRUD.php';</script>";
        
    }
    else{
        echo "<script> alert('Data Gagal fi Update'); document.location = 'homeCRUD.php';</script>".mysqli_error($connect);
    }
}    else{
        move_uploaded_file($source,$folder.$gambar_wahana);
        $query="INSERT INTO wahana (id,wahana_name,harga,gambar) VALUES ('$id', '$nama', '$harga', '$gambar_wahana')";
        $result = mysqli_query($connect,$query);
    if($result){
        echo "Berhasil update data";
    
    }
    else{
        echo "Gagal update data".mysqli_error($connect);
    }
}

}
?>