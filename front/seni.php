<?php
session_start();

include "../koneksi.php";
$result = mysqli_query($konek, "SELECT * FROM tb_user");

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
    exit(); // Terminate script execution after the redirect
}

?>

<style>
    .gambar {
        max-width: 100%;
        height: auto;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Blessing Culture</title>
    <link rel="shortcut icon" href="assets/images/logoBC.png" type="image/svg" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/style.css" />
</head>

<body>
    <section class="navbar-area navbar-nine">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/images/logoBC.png" alt="Logo" width="120px" />
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine" aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="main.php" tabindex="1">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="seni.php" tabindex="2">Daftar Kesenian</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pesan.php" tabindex="3">Pesan Sekarang!</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../logout.php" tabindex="4">Keluar?</a>
                                </li>
                            </ul>
                            <style>
                                .fa-regular.fa-user {
                                    margin-left: 5px;
                                }

                                .dropdown-menu .dropdown-item {
                                    color: black;
                                }

                                .dropdown-menu {
                                    background-color: #333;
                                }
                            </style>

                            <ul class="navbar-nav ms-auto me-md-4 mb-2 mb-lg-0">
                                <li class="nav-item dropdown d-flex text-light">
                                    <div class="dropdown">
                                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" tabindex="5">
                                            Hi <?php echo $_SESSION['username']; ?>!
                                            <i class="fa-regular fa-user"></i>
                                        </button>
                                        <ul class="dropdown-menu border-0 bg-gradient-dark text-black" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="admin\user.php" tabindex="6">Edit Profile</a></li>
                                            <li><a class="dropdown-item" href="../logout.php" tabindex="7">Logout</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>


                </div>
                </nav>
            </div>
        </div>
        </div>
    </section>
    <br><br>
    <br><br>


    <section class="about-area about-five">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="about-image-five">
                        <img src="assets/images/wonderfull.jpg" alt="about" />
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-five-content">
                        <h2 class="main-title fw-bold">"Temukan Kekayaan Seni dan Budaya Indonesia yang Memukau!"</h2>
                        <div class="about-five-tab">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-who" role="tabpanel" aria-labelledby="nav-who-tab" style="text-align:justify;">
                                    Kesenian Indonesia merupakan cerminan kekayaan budaya dan warisan sejarah yang sangat beragam, mencerminkan keragaman etnis, bahasa, dan tradisi di seluruh kepulauan. Setiap daerah memiliki tarian tradisionalnya sendiri, seperti Tari Pendet dari Bali, Tari Saman dari Aceh, dan Tari Jaipong dari Jawa Barat, yang menggambarkan cerita rakyat, adat istiadat, atau ritus keagamaan. Musik tradisional juga kaya dengan instrumen khas seperti gamelan dari Jawa dan Bali, angklung dari Jawa Barat, dan sasando dari Nusa Tenggara Timur.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="services" class="services-area services-eight">
        <div class="section-title-five">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content">
                            <h2 class="fw-bold">Daftar Kesenian</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <?php
                $sql = "SELECT nama, deskripsi, image FROM tb_kesenian";
                $result = mysqli_query($konek, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-services">
                                <a href="index.php">
                                    <img class='gambar' src='data:image/jpeg;base64,<?php echo base64_encode($row['image']) ?>' alt='image'>
                                </a>
                                <div class="service-content"><br>
                                    <h4><?php echo $row["nama"] ?></h4>
                                    <p><?php echo $row["deskripsi"]; ?></p>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "<div class='col-12'>Tidak ada data dalam tabel.</div>";
                }
                ?>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="footer-area footer-eleven">
        <div class="footer-top">
            <div class="container">
                <div class="inner-content">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-12 text-center">
                            <div class="footer-widget f-about">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="assets/images/logoBC.png" alt="#" class="img-fluid" />
                                    </a>
                                </div>
                                <p class="copyright-text">
                                    <span>© 2024 Blessing Culture</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>