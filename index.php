<?php 
    include "cek_koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahisa Aghisni Fadhli Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Menyisipkan Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Menyisipkan Javascirpt -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Batu City Tourism</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#facility">Facility</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#wahana">Wahana</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#galery">Galery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
            </ul>
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="formLogin.html">Admin</a> </div>
        </div>
    </nav>

    <div class="wrapper">
        <section id="home">
            <div class="gambar">
                <img src="img/selecta.png" width=1000px height=500px>
            </div>
            <div class="kolom">
                <p class="deskripsi">Selecta</p>
                <p>Kota Wisata Batu merupakan salah satu wilayah yang terkenal akan beragam objek wisata, mulai dari
                    wisata alam, wisata bahari, wisata agro hingga wisata bermain keluarga dan masih banyak lainnya.
                    Salah satu objek terkenal di Kota Wisata Batu adalah daerah Selecta yang terkenal akan taman bunga
                    dan pemandiannya yang sudah beridir sejak tahun 1930.
                    Taman Wisata Selecta ini sendiri berlokasi di Desa Tulungrejo – Kota Batu, Jawa Timur yang didirikan
                    oleh warga negara Belanda bernama Ruyter de Wildt.
                    Dahulunya Taman Rekreasi Selecta menjadi tempat wisata dan persinggahan yang ditujukan untuk warga
                    Belanda ketika berkunjung ke Kota Malang.
                    Namun kini, Taman Rekreasi Selecta sudah menjadi objek wisata yang menarik dan patut Anda coba
                    ketika berada di Kota Wisata Batu dan Kota Malang.
                    Di Taman Wisata Selecta ini Anda akan disajikan kebun bunga dengan beragam warna yang indah dan asri
                    dengan suasana sejuk ala Kota Batu.
                    Karena pemandangan yang disajikan taman bunga ini begitu menakjubkan, tidak salah jika banyak
                    wisatawan yang betah berlama lama duduk santai menikmati keindahan taman bunga dengan hembusan udara
                    sejuk dari pegunungan.
                    Banyak orang berpendapat bahwa Taman Bunga Selecta seperti taman bunga di Negeri Holland sana, tidak
                    salah jika Selecta menjadi objek wisata menarik dan tidak kalah dengan objek wisata lainnya yang
                    pernah Anda kenal.
                    Selain taman bunga, Anda juga bisa singgah ke pemandian / kolam renang Selecta yang terkenal akan
                    kesegaran dan kejernihan airnya.
                    Adapun wahana lain yang dapat dinikmati bersama keluarga maupun pasangan diantaranya Sky Bike, Water
                    Boom, Play Ground Anak, Sepeda Air, Perahu Ayun, Flying Fox, dan Goa Singa.
                </p>
                <script src="jquery-3.6.0.js"></script>
                <script>
                    $(document).ready(function () {
                        $("#flip").click(function () {
                            $("#kotak2").slideToggle("slow")
                        });
                    });
                </script>
                <div id="flip">Klik Informasi Lebih Lanjut</div>
                <div id="kotak2">Tiket Selecta Malang
                    -Tiket Reguler Rp40.000
                    <br>
                    <br>
                    Jam Buka Taman Selecta Malang
                    -Jam 06.00 – 17.00 WIB
                    <br>
                    <br>
                    Informasi syarat dan kunjungan ke Taman Selecta selama masa PPKM:
                    <br>
                    Wisatawan wajib mematuhi protokol kesehatan 5M.<br>
                    Selama masa PPKM, pihak pengelola memperbolehkan pengunjung yang sudah vaksin minimal dosis pertama
                    untuk masuk ke area wisata.<br>
                    Menunjukkan bukti vaksin melalui aplikasi Peduli Lindungi.<br>
                    Tidak ada batasan usia untuk berkunjung ke Taman Selecta.<br>
                    Semua wahana kembali beroperasi.<br>
                    Anak usia 2 tahun ke atas sudah berlaku tiket masuk normal.</div>
            </div>

        </section>

        <section id="facility">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Facility</p>
                </div>
                <div class="facility-list">
                    <div class="facility-all">
                        <img src="img/mushola.png" />
                        <p>Mushola</p>
                    </div>
                    <div class="facility-all">
                        <img src="img/foodcourt.png" />
                        <p>Food Court</p>
                    </div>
                    <div class="facility-all">
                        <img src="img/hotel.png" />
                        <p>Hotel Selecta</p>
                    </div>
                    <div class="facility-all">
                        <img src="img/bunga.png" />
                        <p>Pasar Bunga</p>
                    </div>
                    <div class="facility-all">
                        <img src="img/parkir.png">
                        <p>Tempat Parkir</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="wahana">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Wahana</p>
                </div>
                <div class="row">
                    <?php
                    $query = mysqli_query($connect,"SELECT * From wahana");
                    while($data = mysqli_fetch_array($query)){
                    ?>
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <img src="img/<?php echo $data['gambar']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-title"><?php echo $data['wahana_name']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </section>

        <section id="galery">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Galery</p>
                </div>
                <div class="galery-list">
                    <div class="galery-all">
                        <img src="img/galeri1.png" />
                        <p>seperti ditampilkan pada foto diatas, suasananya sangat nyaman karena setiap mata memandang
                            terdapat warnah hijau dari pohon pohon besar yang ada di taman ini</p>
                    </div>
                    <div class="galery-all">
                        <img src="img/galeri2.png" />
                        <p>Area ini memiliki banyak pilihan wahana yang bisa digunakan wisatawan jika lelah untuk
                            berkeliling atau mencari pengalaman lain dalam liburan,
                            seperti outbond, olahraga, atau bahkan hanya sekedar hangout dan ngobrol bersama.
                    </div>
                    <div class="galery-all">
                        <img src="img/galeri3.png" />
                        <p>Contoh waterpark diatas. wahana tersebut memang berupa kolam renang yang diperuntukkan bagi
                            wisatawan terutama
                            anak-anak.
                            Dikonsep dengan kolam renang yang luas dan juga perosotan dan beberapa tempat bermain
                            lainnya</p>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="about">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">About us</p>
                </div>
                <div class="about-list">
                    <div class="about-all">
                        <a class="icon" href="callto:62341591025"><img src="img/telepon.png"></a>
                        <p>Call</p>
                    </div>
                    <div class="about-all">
                        <a class="icon" href="mailto:itselecta1950@gmail.com"><img src="img/gmail.png"></a>
                        <p>Mail</p>
                    </div>
                    <div class="about-all">
                        <a class="icon" href="location.html"><img src="img/marker.png"></a>
                        <p>Location</p>
                    </div>
                    <div class="about-all">
                        <a class="icon" href="https://instagram.com/tamanrekreasiselecta?utm_medium=copy_link"><img
                                src="img/ig.png"></a>
                        <p>Instagram</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>