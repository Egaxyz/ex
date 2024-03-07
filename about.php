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

    <header class="header2">
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
                <p class="lead mb-4">“Kucing itu tidaklah najis. Sesungguhnya kucing merupakan hewan yang sering kita
                    jumpai dan berada di sekeliling kita.” (HR. Bukhari)
                </p>
            </div>
        </div>
    </header>

    <main class="px-3">
        <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="assets/b6b5d7eede819d73a00f9f6bcf14dc06.jpg" alt="" width="200"
                height="200">
            <h1 class="display-5 fw-bold text-body-emphasis">Meow/Nya</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae asperiores magni
                    impedit excepturi sequi commodi tempora, voluptatem enim nesciunt? Suscipit alias obcaecati harum
                    quas illo molestiae magnam aut odio cupiditate!z</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="index.php"><button type="button"
                            class="btn btn-primary btn-lg px-4 gap-3 btn-about">Home→</button></a>
                </div>
            </div>
        </div>
    </main>
    <footer class="py-3 my-4 footer">
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