<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Data</title>
</head>

<body>
    <?php
        include "cek_koneksi.php";
        $id=$_GET['id'];
        $query="SELECT * FROM wahana WHERE id='$id'";
        $result= mysqli_query($connect,$query);
    ?>
    <table>
        <form method="POST" action="prosesEdit.php" enctype="multipart/form-data">
            <?php
                while($row=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td> Id </td>
                <td><input type="number" name="id" value="<?php echo $row['id'];?>" readonly></td>
            </tr>
            <tr>
                <td> Nama Wahana </td>
                <td><input type="text" name="name" value="<?php echo $row['wahana_name'];?>"></td>
            </tr>
            <tr>
                <td> Harga </td>
                <td><input type="number" name="price" value="<?php echo $row['harga'];?>"></td>
            </tr>
            <tr>
                <td> Diskon </td>
                <td><input type="number" name="diskon" value="<?php echo $row['diskon'];?>"></td>
            </tr>
            <tr>
                <td> Gambar Wahana </td>
                <td><input type="file" name="gambar_wahana" value="<?php echo $row['gambar'];?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="edit" value="Edit Data"></td>
            </tr>
            <?php
                }
            ?>
        </form>
    </table>
</body>

</html>