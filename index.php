<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blessing Culture</title>
  <link rel="shortcut icon" href="front/assets/images/logoBC.png" type="image/svg" />
  <link rel="stylesheet" href="front/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="front/assets/css/lineicons.css" />
  <link rel="stylesheet" href="front/assets/style.css" />
</head>

<script>
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('front/assets/js/service-worker.js')
        .then(registration => {
          console.log('Service Worker registered:', registration);
        })
        .catch(error => {
          console.log('Service Worker registration failed:', error);
        });
    });
  }
</script>

<body>
  <section class="navbar-area navbar-nine">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.php">
              <img src="front/assets/images/logoBC.png" alt="Logo" width="100px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine" aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation" tabindex="0">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php" tabindex="0">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="front/login.php" tabindex="0">Daftar Kesenian</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="front/login.php" tabindex="0">Pesan Sekarang!</a>
                </li>
              </ul>
              <ul>
                <li class="nav-item">
                  <button class="btn btn-light" type="button"><a href="front/login.php" tabindex="0">Login</a></button>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <br> <br>

  <section id="hero-area" class="header-area header-eight">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-12">
          <div class="header-content">
            <h1>Hey Kamu! <br>Mau Kemana?</h1>
            <p>
              Nikmati keindahan kesenian daerah dengan
              <br>pengalaman yang tak terlupakan!
            </p>

            <div class="button">
              <a href="front/login.php" class="btn primary-btn">Pesan Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
          <div class="header-image">
            <img src="front/assets/images/wayang.jpg" alt="#" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <audio autoplay="true">
    <source src="front/assets/wonderland.mp3" type="audio/mpeg">
    Browsermu tidak mendukung tag audio, upgrade donk!
  </audio>

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
  <script src="front/assets/js/bootstrap.bundle.min.js"></script>
  <script src="front/assets/js/main.js"></script>
</body>

</html>