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

    <header class="header">
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
                <p class="lead mb-4">“Kucing termasuk perhiasan rumah tangga, ia tidak dikotori sesuatu”. (HR Muslim).
                </p>
            </div>
        </div>
    </header>

    <main class="container">

        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary ">
            <div class="col-lg-6 px-0">
                <h1 class="display-4 ">Kucing</h1>
                <p class="lead my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui quasi necessitatibus
                    facilis! Sint quas dolore, dolorum sapiente consequatur doloremque dignissimos sit fugiat, est atque
                    similique reiciendis. Delectus similique dolores perferendis?</p>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative card">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-0"><a href="jenis.php">Kucing Jinak</a></h3>
                        <p class="card-text mb-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius iusto
                            perspiciatis repellat alias eum est deserunt voluptatibus adipisci aliquam culpa amet libero
                            officia ducimus, nisi, cum doloribus perferendis. Aliquid, maxime.</p>

                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="assets/kucing1.jpg" width="250" height="250" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative card">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-0">Kucing Liar</h3>
                        <p class="card-text mb-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius iusto
                            perspiciatis repellat alias eum est deserunt voluptatibus adipisci aliquam culpa amet libero
                            officia ducimus, nisi, cum doloribus perferendis. Aliquid, maxime.</p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="assets/download.jpg" width="250" height="250" alt="">
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="row g-5">
            <div class="col-md-8">
                <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1">Sejarah Kucing</h2>

                    <p>Felidae adalah familia mamalia yang berevolusi dengan cepat yang berbagai nenek moyang yang sama
                        hanya 10–15 juta tahun yang lalu dan mencakup singa, harimau, cougar, dan banyak lainnya.
                        Dalam familia ini, kucing (Felis catus) merupakan bagian dari genus Felis, yang
                        merupakan kelompok kucing kecil yang berisi sekitar tujuh spesies (tergantung pada skema
                        klasifikasi). Anggota dari genus ini ditemukan di seluruh dunia dan termasuk kucing hutan
                        (Felis chaus) dari tenggara Asia, kucing liar Eropa (F. silvestris silvestris), kucing liar
                        Afrika (F. s. lybica), kucing gunung Cina (F. bieti), dan kucing pasir Arab (F. margarita).

                    </p>
                    <img src="assets/3777059872.jpg" width="250" height="250" title="Ilustrasi kucing" alt="">
                    <p class="italic">Ilustrasi kucing purba</p>
                    <hr>
                    <p>Semua kucing dalam genus ini berbagi nenek moyang yang sama yang mungkin hidup sekitar 6–7 juta
                        tahun yang lalu di Asia. Hubungan yang tepat dalam Felidae dekat, tetapi masih belum
                        pasti, misalnya kucing gunung Cina (Felis silvestris bieti) kadang-kadang
                        diklasifikasikan sebagai upaspesies kucing liar, seperti varietas Afrika Utara F. s.
                        lybica.
                        Dibandingkan dengan anjing, kucing tidak mengalami perubahan besar selama proses
                        domestikasi/penjinakan
                        karena bentuk dan perilaku kucing domestik tidak secara radikal berbeda dari kucing liar dan
                        kucing domestik sangat mampu bertahan di alam liar.
                    </p>

                    <hr>
                    <b>Alasan harus memelihara kucing</b>
                    <ul>
                        <li>Lucu</li>
                        <li>Mudah dijinakkan</li>
                        <li>Tidak repot</li>
                        <li>Obat stress</li>
                    </ul>

                    <a class="cat" href="https://www.idausa.org ">
                        <h1>Get Some Cat →</h1>
                    </a>



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