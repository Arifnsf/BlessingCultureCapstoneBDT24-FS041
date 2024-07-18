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
  <link rel="stylesheet" href="assets/css/tiny-slider.css" />
  <link rel="stylesheet" href="assets/css/glightbox.min.css" />
  <link rel="stylesheet" href="assets/style.css" />
</head>

<body>
  <section class="navbar-area navbar-nine">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.php">
              <img src="assets/images/logoBC.png" alt="Logo" width="100px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine"
              aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
              <ul class="navbar-nav me-auto">
              <li class="nav-item">
                  <a class="nav-link" href="../index.php" tabindex="0">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php" tabindex="0">Daftar Kesenian</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="login.php" tabindex="0">Pesan Sekarang!</a>
                </li>
              </ul>
              <ul>
              <li class="nav-item">
                  <button class="btn btn-light" type="button"><a href="register.php" tabindex="0">Daftar</a></button>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section id="contact" class="contact-section">
    <div class="container">
        <div class="col-md-6 pt-5 mx-auto">
          <div class="contact-form-wrapper">
            <div class="row">
              <div class="col-xl-10 col-lg-8 mx-auto">
                <div class="section-title text-center">
                  <h2>Login </h2>
                </div>
              </div>
            </div>
            <form action="../proses_login.php" method="POST" class="contact-form">
              <div class="row">
                <div class="col-md-12">
                  <input type="text" name="usn" id="usn" placeholder="Username" required />
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <input type="password" name="pw" id="pw" placeholder="Password" required />
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="button text-center rounded-buttons">
                    <button type="submit" class="btn primary-btn rounded-full">
                      Login
                    </button>
                  </div>
                </div>
                <span> Belum punya akun? </span>
                  <p>
                    Silahkan Daftar <a href="register.php" tabindex="0"> Disini!</a> 
                  </p>
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
  <a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
  </a>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>