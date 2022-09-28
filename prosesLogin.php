<?php
if(isset($_POST['login'])){
include "cek_koneksi.php";
$user = $_POST['username'];
$pass = $_POST['password'];
$query = mysqli_query($connect, "SELECT * FROM login WHERE username='$user' and password='$pass'");
$cek = mysqli_num_rows($query);
if($cek == 0){
    echo "<script> alert('Username dan Password tidak terdaftar'); document.location = 'formLogin.html';</script>";
}else{
    echo "<script> alert('Berhasil Login'); document.location = 'homeCRUD.php';</script>";
}
}
?>