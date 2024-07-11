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
    <title>Wisata</title>
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
                                    <a class="nav-link" href="main.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="seni.php">Daftar Kesenian</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="pesan.php">Pesan Sekarang!</a>
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
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <li class="nav-item dropdown d-flex text-light">
                                        <div class="dropdown">
                                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                Hi <?php echo $_SESSION['username']; ?>!
                                                <i class="fa-regular fa-user"></i>
                                            </button>
                                            <ul class="dropdown-menu border-0 bg-gradient-dark text-black" aria-labelledby="dropdownMenuButton">
                                                <li><a class="nav-link" href="../admin/user.php">Edit Profile</a></li>
                                                <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </div>


                </div>
                </nav>
            </div>
        </div>
        </div>
    </section>
    <br><br>



    <section id="pricing" class="pricing-area pricing-fourteen">
        <div class="section-title-five">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content">
                            <br><br>
                            <h2 class="fw-bold">Harga Tiket Masuk</h2>
                            <p>Silahkan Memilih Tiket Yang Tersedia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php
                $sql = "SELECT nama, harga, keterangan, image FROM tb_kesenian";
                $result = mysqli_query($konek, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="pricing-style-fourteen">
                                <a href="index.php">
                                    <img class='gambar' src='data:image/jpeg;base64,<?php echo base64_encode($row['image']) ?>' alt='image'>
                                </a>
                                <div class="table-head"><br>
                                    <h2><?php echo $row["nama"] ?></h2>
                                </div>
                                <div class="table-content">
                                    <ul class="table-list">
                                        <li> <i class="lni lni-checkmark-circle"></i> <?php echo $row["harga"] ?></li>
                                        <li> <i class="lni lni-checkmark-circle"></i> <?php echo $row["keterangan"] ?></li>
                                    </ul>
                                </div>
                                <div class="light-rounded-buttons">
                                    <a href="#hub" class="btn primary-btn-outline">Pesan Sekarang</a>
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


    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="contact-item-wrapper">
                        <div class="row">
                            <div class="col-12 col-md-6 col-xl-12">
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="lni lni-phone"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h4>Kontak</h4>
                                        <p>0889-0163-2551</p>
                                        <p>grogba1@moakt.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-12">
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="lni lni-map-marker"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h4>Alamat</h4>
                                        <p>Bandung, Jawa Barat, Indonesia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-12">
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="lni lni-alarm-clock"></i>
                                    </div>
                                    <div id="hub" class="contact-content">
                                        <h4>Jam Operasional</h4>
                                        <p>Senin - Minggu</p>
                                        <p>Buka: 9:00 Pagi - 20:30 Malam</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-8">
                    <div class="contact-form-wrapper">
                        <div class="row">
                            <div class="col-xl-10 col-lg-8 mx-auto">
                                <div id="hub" class="section-title text-center">
                                    <span> Hubungi Kami </span>
                                    <h2>
                                        Booking Hiburanmu Sekarang!
                                    </h2>
                                    <p>
                                    Jangan Lewatkan Pengalaman Memukau Kesenian Indonesia Ini!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <form action="proses_book.php" method="POST" class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="nama" id="name" placeholder="Nama" required />
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" id="email" placeholder="Email" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="nohp" id="phone" placeholder="No Telepon" required />
                                </div>
                                <div class="col-md-6">
                                    <input type="date" name="tgl" id="data" placeholder="Date" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="time" name="jam" id="phone" placeholder="Jam?" required />
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select" name="wisata" id="st_dept">
                                        <option class="text-muted" selected disabled>Pilih Kesenian</option>
                                        <?php

                                        $query = "SELECT id, nama FROM tb_kesenian";
                                        $result = mysqli_query($konek, $query);

                                        if ($result && mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option value='" . $row['nama'] . "'>" . $row['nama'] . "</option>";
                                            }
                                        } else {
                                            echo "<option>Tidak ada destinasi tersedia</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <div class="button text-center rounded-buttons">
                                        <button type="submit" class="btn primary-btn rounded-full">
                                            Pesan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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