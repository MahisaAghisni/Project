<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Wahana</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <a href="insertForm.html"><button class ="btn btn-dark">Tambah Data</button></a>
    <table>
        <tr>
            <th> id </th>
            <th> Nama Wahana </th>
            <th> Harga </th>
            <th> Diskon </th>
            <th> Gambar Wahana </th>
            <th> Aksi </th>
        </tr>
        <?php
            include "cek_koneksi.php";
            $query="SELECT * FROM wahana";
            $result= mysqli_query($connect,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['wahana_name'] ?></td>
            <td><?php echo $row['harga'] ?></td>
            <td><?php echo $row['diskon'] ?>%</td>
            <td><img src="img/<?php echo $row['gambar']; ?>" style="width: 120px;"></td>
            <td>
                <a href="editForm.php?id=<?php echo $row['id']; ?>">
                    Edit &nbsp;</a>
                <a href="hapus.php?id=<?php echo $row['id']; ?>">Hapus </a>
            </td>
        </tr>
        <?php
                }
            }
            else{
                echo "0 result";
            }
        ?>
    </table>
    <a href="index.php"><button class ="btn btn-dark">Kembali ke Halaman Utama</button></a>
</body>

</html>