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
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/lineicons.css" />
  <link rel="stylesheet" href="assets/style.css" />
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
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

              <ul class="navbar-nav ms-auto me-md-4 mb-2 mb-lg-0 navbar-nav-mobile">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <li class="nav-item dropdown d-flex text-light">
                    <div class="dropdown">
                      <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" tabindex="7">
                        Hi <?php echo $_SESSION['username']; ?>!
                        <i class="fa-regular fa-user"></i>
                      </button>
                      <ul class="dropdown-menu border-0 bg-gradient-dark text-black" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="../admin/user.php" tabindex="5">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="../logout.php" tabindex="6">Logout</a></li>
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

  <section id="hero-area" class="header-area header-eight">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-12">
          <div class="header-content">
            <h1>Selamat datang, <?php echo $_SESSION['username']; ?>! <br>Ada perlu apa?</h1>
            <p>
              Anda sedang mencari kesenian daerah?
              <br>Ayo pesan sekarang
            </p>

            <div class="button">
              <a href="pesan.php" class="btn primary-btn">Pesan Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
          <div class="header-image">
            <img src="assets/images/wayang.jpg" alt="#" />
          </div>
        </div>
      </div>
    </div>
  </section>

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
                <div class="tab-pane fade show active" id="nav-who" role="tabpanel" aria-labelledby="nav-who-tab" style="text-align: justify;">
                  Kesenian Indonesia merupakan cerminan kekayaan budaya dan warisan sejarah yang sangat beragam, mencerminkan keragaman etnis, bahasa, dan tradisi di seluruh kepulauan. Setiap daerah memiliki tarian tradisionalnya sendiri, seperti Tari Pendet dari Bali, Tari Saman dari Aceh, dan Tari Jaipong dari Jawa Barat, yang menggambarkan cerita rakyat, adat istiadat, atau ritus keagamaan. Musik tradisional juga kaya dengan instrumen khas seperti gamelan dari Jawa dan Bali, angklung dari Jawa Barat, dan sasando dari Nusa Tenggara Timur.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div id="map-container">
    <h2>Daftar Lokasi Kesenian</h2>
  </div>
  <div id="map" style="width: 550px; height: 450px"></div>
  <script>
    // Inisialisasi peta dengan opsi pusat dan zoom
    var mapOptions = {
      center: [-6.921893, 107.606955],
      zoom: 10
    };

    var map = new L.map('map', mapOptions);

    // Menambahkan lapisan ubin dari OpenStreetMap
    var layer = new L.TileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
    map.addLayer(layer);

    // Daftar koordinat lokasi dan nama tempat
    var locations = [{
        latlng: [-6.895847, 107.729116],
        name: "L.S BENJANG PUSAKA PADJADJARAN"
      },
      {
        latlng: [-6.941513, 107.639472],
        name: "MD Studio Tari Jaipong"
      },
      {
        latlng: [-6.808663, 107.606778],
        name: "Padepokan Kuda Lumping DANGHIYANG SUKMA"
      },
      {
        latlng: [-6.893543, 107.661095],
        name: "Padepokan Wayang Golek Gending Pusaka Putra"
      },
      {
        latlng: [-6.872509, 107.582691],
        name: "Sanggar Mekar Asih"
      },
      {
        latlng: [-6.238981, 107.060357],
        name: "Sanggar SENI REYOG PONOROGO"
      },
      {
        latlng: [-6.909886, 107.649769],
        name: "Blessing Culture"
      }
    ];

    // Menambahkan penanda untuk setiap lokasi dengan keterangan nama tempat
    locations.forEach(function(location) {
      var marker = new L.Marker(location.latlng);
      marker.addTo(map).bindPopup(location.name);
    });
  </script>
  <style>
    #map {
      background-color: skyblue;
      width: 100%;
      /* Menggunakan lebar relatif agar responsif */
      max-width: 550px;
      /* Maksimum lebar tetap 550px */
      height: 450px;
      margin: 0 auto;
      border: 2px solid black;
      /* Menambahkan border pada peta */
      z-index: 1;
    }

    #map-container {
      width: 100%;
      /* Menggunakan lebar relatif agar responsif */
      max-width: 600px;
      /* Maksimum lebar tetap 600px */
      margin: 0 auto;
      /* Menyelaraskan div di tengah secara horizontal */
      text-align: center;
      /* Menyelaraskan teks di tengah */
    }

    /* Media query untuk layar dengan lebar kurang dari 600px */
    @media (max-width: 600px) {
      #map {
        width: 100%;
        max-width: 100%;
        /* Lebar maksimum mengikuti lebar parent */
      }

      #map-container {
        width: 100%;
        max-width: 100%;
        /* Lebar maksimum mengikuti lebar parent */
      }
    }
  </style>
  <br><br>

  <!-- Footer -->
  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a>About Us</a></li>
            <li><a>Career</a></li>
            <li><a href="front/login.php">Booking</a></li>
            <li><a>Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a>Terms & Condition</a></li>
            <li><a>Privacy</a></li>
            <li><a>Advertise</a></li>
            <li><a href="front/login.php">Join with us</a></li>
          </ul>
        </div>

        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link">Antapani, Jl. Terusan Sekolah No.1-2, Cicaheum, Kec. Kiaracondong, Kota Bandung, Jawa Barat 40282</p>
          <a class="footer-link">088901632551 cadanallison@gmail.com</a>

        </div>
      </div>
      <hr>
    </div>
  </footer>

  <!-- End Footer -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
</body>

</html>