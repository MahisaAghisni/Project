<?php
    include "cek_koneksi.php";
   if(isset($_POST['edit'])) {
    $id=$_POST['id'];
    $nama=$_POST['name'];
    $harga=$_POST['price'];
    $diskon=$_POST['diskon'];
    $gambar_wahana=$_FILES['gambar_wahana']['name'];
    $source=$_FILES['gambar_wahana']['tmp_name'];
    $folder='img/';
    if($gambar_wahana != ''){
        move_uploaded_file($source,$folder.$gambar_wahana);
        $query="UPDATE wahana SET wahana_name='$nama', harga='$harga', diskon='$diskon', gambar='$gambar_wahana' WHERE id='$id'";
        $result = mysqli_query($connect,$query);
        if($result){
            echo "<script>
            alert('Data Berhasil sdiperbarui !');
            document.location = 'homeCRUD.php';</script>";
    ?>
<a href="homeCRUD.php">Lihat Data</a>
<?php
        }
        else{
            echo "<script>alert('Gagal diperbarui !');
            document.location = 'editForm.php';</script>".mysqli_error($connect);
        }
    }
    else{
        move_uploaded_file($source,$folder.$gambar_wahana);
        $query="UPDATE wahana SET wahana_name='$nama', harga='$harga', gambar='$gambar_wahana' WHERE id='$id'";
        $result = mysqli_query($connect,$query);
        if($result){
            echo "<script>
            alert('Data Berhasil diperbarui !');
            document.location = 'homeCRUD.php';</script>";
    ?>
<a href="homeCRUD.php">Lihat Data</a>
<?php
        }
        else{
            echo "Gagal update data".mysqli_error($connect);
        }
    }

    
   }
    
?>