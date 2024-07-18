<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blessing Culture - Tambah Kesenian</title>
    <link rel="shortcut icon" href="../front/assets/images/wonderful.png" type="image/svg" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="bootstrap/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand fw-bold" href="index.php">Blessing Culture</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-md-4 mb-2 mb-lg-0">
                    <li class="nav-item dropdown d-flex text-light">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-regular fa-user"></i> User
                        </a>
                        <ul class="dropdown-menu border-0 bg-light ms-auto">
                            <li><a class="nav-link" href="../index.php">Logout</a></li>
                        </ul>
                </ul>
                </li>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- sidebar -->
    <div class="offcanvas offcanvas-start bg-purple text-white sidebar-nav" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header shadow-sm d-block text-center">
            <div class="offcanvas-title" id="offcanvasExampleLabel">
                <a class="navbar-brand fw-bold" href="index.php">Blessing Culture</a>
            </div>
        </div>
        <div class="offcanvas-body pt-3 p-0">
          <li class="nav-link bordered px-3">
            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button"
              aria-expanded="false" aria-controls="collapseExample">
            </a>
            <div class="collapse" id="collapseExample">
              <div>
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="tambah-wisata.php" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-1-circle"></i></span>
                      <span>Edit Profile</span>
                    </a>
                  </li>
                  <li>
                    <a href="tempat_wisata.php" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-2-circle"></i></span>
                      <span>Tempat Kesenian</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- sidebar end -->

    <!-- main content -->
    <main class="mt-3 p-2">
        <div class="container">
            <div class="page-title">
                <div style="font-weight: 500;" class="fs-3">Edit User</div>
            </div>
            <nav class="mt-2 mb-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                </ol>
            </nav>

            <div class="latest-added mt-5">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="page-title fs-5 fw-bold mb-4">
                            Edit User
                        </div>

                        <form action="proses_edituser.php" method="post" enctype="multipart/form-data">
                        <?php
				include "../koneksi.php";

				$id=$_GET['id'];

				$query = "SELECT * FROM tb_user WHERE id=$id";

				$go = mysqli_query($konek, $query);

				$row = mysqli_fetch_array($go);
				$id = $row[0];
				$usn = $row[1];
				$pw = $row[2];
				$nama = $row[3];
				$email = $row[4];
				$no_hp = $row[5];
                $level = $row[6];
			?>
            <input type="hidden" value="<?php echo $id?>" name="id">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3 px-2">
                                        <label for="st_name" class="form-label">Username</label>
                                        <input class="form-control" placeholder="Masukkan Nama Wisata" type="text"
                                            id="st_name" name="usn" value="<?php echo $nama?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 px-2">
                                        <label for="st_phone" class="form-label">Nama</label>
                                        <input class="form-control" placeholder="...." type="text" id="st_name"
                                            name="nama"  value="<?php echo $nama?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 px-2">
                                        <label for="st_email" class="form-label">Email</label>
                                        <input class="form-control" placeholder="Rp." type="text"
                                            id="st_email" name="email"  value="<?php echo $email?>">
                                    </div>
                                </div>

                                <div class="col-md-4 mt-md-4">
                                    <div class="mb-3 px-2">
                                        <label for="st_admsn" class="form-label">No Telepon</label>
                                        <input class="form-control" type="text" placeholder="example@email.com" id="st_admsn" name="nohp"  value="<?php echo $no_hp?>">
                                    </div>
                                </div>
                                </div>
                                <div class="col-12 mt-md-4">
                                    <div class="mb-3 px-2">
                                        <button type="submit" class="btn btn-success"> Submit </button>
                                        <button type="reset" class="btn btn-warning"> Reset </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- main content end-->

      <script src="bootstrap/js/jquery-3.5.1.js"></script>
  <script src="bootstrap/js/jquery.dataTables.min.js"></script>
  <script src="bootstrap/js/dataTables.bootstrap5.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>