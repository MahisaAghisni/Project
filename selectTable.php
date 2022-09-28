<html>
    <head>
        <title>Data Wahana</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <table>
            <tr>
                <th>Id</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Gambar</th>
            </tr>
            <?php 
                include "cek_koneksi.php";

                $query = "SELECT * FROM Wahana";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?= $row["id"] ?></td>
                        <td><?= $row["wahana_name"] ?></td>
                        <td><?= $row["harga"] ?></td>
                        <td><?= $row["diskon"]?></td>
                        <td><?= $row["gambar"]?></td>
                    </tr>
                    <?php
                    }
                } else {
                    echo "0 result";
                }
            ?>
        </table>
    </body>
</html>