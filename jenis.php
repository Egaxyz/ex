<?php
session_start();

if(
    !isset($_SESSION["login"])){
    header("Location: admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <style>
    <?php include "style.css"?>
    </style>
</head>

<body>

    <header class="header1">
        <nav class="responsive">
            <div class="nav__toggle" onclick="toggleNav()">
                <img src="assets/b6b5d7eede819d73a00f9f6bcf14dc06.jpg" style="margin-right: 10px; border-radius:30px"
                    width="60" height="60" alt="">
            </div>
            <ul class="nav__links" id="nav-links">
                <li class="link"><a href="index.php">Home</a></li>
                <li class="link"><a href="jenis.php">Jenis</a></li>
                <li class="link"><a href="about.php">About</a></li>
            </ul>
            <div class="nav__actions">
                <span><a href="logout.php">Logout</a></span>
            </div>
        </nav>

        <div class="px-4 my-5 text-center bottom">
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Kucing adalah binatang yang badan, keringat, bekas sisa makanan, serta air liurnya
                    adalah suci. Air liurnya bahkan bersifat membersihkan. Hidupnya lebih bersih dari manusia.” (HR.
                    Malik)
                </p>
            </div>
        </div>
    </header>

    <main class="container">
        <h1 class="center">Jenis Kucing</h1>'
        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row circle pad">
                <div class="col-lg-4" id="kj">
                    <img src="assets/kucing1.jpg" style="border-radius: 70px" width="140" height="140">
                    <h2 class="fw-normal">Kucing Jinak</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, impedit praesentium porro dolor
                        numquam illo, inventore exercitationem excepturi libero pariatur reprehenderit aut, labore
                        similique perferendis a tempore. Labore, necessitatibus blanditiis!.</p>

                </div><!-- /.col-lg-4 -->
                <div class="row circle">
                    <div class="col-lg-6" id="kj">
                        <img src="assets/download.jpg" style="border-radius: 70px" width="140" height="140">
                        <h2 class="fw-normal">Kucing Liar</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, impedit praesentium porro dolor
                            numquam illo, inventore exercitationem excepturi libero pariatur reprehenderit aut, labore
                            similique perferendis a tempore. Labore, necessitatibus blanditiis!.</p>

                    </div><!-- /.col-lg-4 -->
                </div>
            </div>
            <hr>
            <h1>Contoh Kucing Terkenal</h1>
            <div class="album py-5 bg-body-tertiary">
                <div class="container">

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="assets/3777059872.jpg">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius,
                                        voluptates laudantium inventore quisquam ea possimus animi? Voluptas, quidem
                                        iste. Porro eius deserunt modi, quo nemo sit molestiae laboriosam dolorem
                                        facilis.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="assets/download.jpg">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius,
                                        voluptates laudantium inventore quisquam ea possimus animi? Voluptas, quidem
                                        iste. Porro eius deserunt modi, quo nemo sit molestiae laboriosam dolorem
                                        facilis.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="assets/kucing1.jpg">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius,
                                        voluptates laudantium inventore quisquam ea possimus animi? Voluptas, quidem
                                        iste. Porro eius deserunt modi, quo nemo sit molestiae laboriosam dolorem
                                        facilis.</p>

                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="assets/car2.jpg">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius,
                                        voluptates laudantium inventore quisquam ea possimus animi? Voluptas, quidem
                                        iste. Porro eius deserunt modi, quo nemo sit molestiae laboriosam dolorem
                                        facilis.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="assets/car3.jpg">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius,
                                        voluptates laudantium inventore quisquam ea possimus animi? Voluptas, quidem
                                        iste. Porro eius deserunt modi, quo nemo sit molestiae laboriosam dolorem
                                        facilis.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="assets/car4.jpg">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius,
                                        voluptates laudantium inventore quisquam ea possimus animi? Voluptas, quidem
                                        iste. Porro eius deserunt modi, quo nemo sit molestiae laboriosam dolorem
                                        facilis.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="index.php" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="jenis.php" class="nav-link px-2 text-body-secondary">Jenis</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link px-2 text-body-secondary">About</a></li>
        </ul>
        <p class="text-center text-body-secondary">&copy; 2024 Company, Inc</p>
    </footer>
    <script>
    let isResponsiveMode = false; // Variable untuk menyimpan status mode responsif

    // Fungsi untuk menentukan apakah layar dalam mode responsif
    function checkResponsiveMode() {
        if (window.innerWidth <= 1200) { // Ubah 1200 sesuai dengan batasan mode responsif Anda
            isResponsiveMode = true;
        } else {
            isResponsiveMode = false;
        }
    }

    // Panggil fungsi checkResponsiveMode() saat halaman dimuat dan saat ukuran layar berubah
    window.addEventListener('load', checkResponsiveMode);
    window.addEventListener('resize', checkResponsiveMode);

    // Fungsi toggleNav hanya akan dijalankan saat mode responsif
    function toggleNav() {
        if (isResponsiveMode) { // Hanya jalankan jika mode responsif aktif
            var navLinks = document.getElementById("nav-links");
            navLinks.classList.toggle("block");
        }
    }
    </script>
</body>

</html>