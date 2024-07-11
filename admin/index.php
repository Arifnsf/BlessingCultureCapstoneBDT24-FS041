<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blessing Culture - Admin Dashboard</title>
  <link rel="shortcut icon" href="../front/assets/images/logoBC.png" type="image/svg" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap/css/style.css">
  <link rel="stylesheet" href="bootstrap/css/dataTables.bootstrap5.min.css">
</head>
<?php 
include "../koneksi.php";

?>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
        aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand fw-bold" href="index.php">Wisata</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto me-md-4 mb-2 mb-lg-0">
          <li class="nav-item dropdown d-flex text-light">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-regular fa-user"></i> Admin
            </a>
            <ul class="dropdown-menu border-0 bg-light ms-auto">
              <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
            </ul>
        </ul>
        </li>
      </div>
    </div>
  </nav>
  <div class="offcanvas offcanvas-start bg-purple text-white sidebar-nav" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header shadow-sm d-block text-center">
      <div class="offcanvas-title" id="offcanvasExampleLabel">
        <a class="navbar-brand fw-bold" href="index.php">Blessing Culture</a>
      </div>
    </div>
    <div class="offcanvas-body pt-3 p-0">
      <nav class="navbar-dark">
        <ul class="navbar-nav sidenav">
          <li class="nav-link bordered px-3 active">
            <a href="index.php" class="nav-link px-3 active">
              <span class="me-2"><i class="bi bi-speedometer2"></i></span>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="nav-link bordered px-3">
            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button"
              aria-expanded="false" aria-controls="collapseExample">
              <span class="me-2">
                <i class="bi bi-intersect"></i>
              </span>
              <span>Kesenian</span>
              <span class="right-icon ms-auto">
                <i class="bi bi-chevron-down"></i>
              </span>
            </a>
            <div class="collapse" id="collapseExample">
              <div>
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="tambah-kesenian.php" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-1-circle"></i></span>
                      <span>Tambah Kesenian</span>
                    </a>
                  </li>
                  <li>
                    <a href="kesenian-daerah.php" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-2-circle"></i></span>
                      <span>Daftar Kesenian</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="nav-link bordered px-3">
            <a href="adminuser.php" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-people-fill"></i></span>
              <span>User</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <main class="mt-3 p-2">
    <div class="container">
      <div class="page-title">
        <div style="font-weight: 500;" class="fs-3">Dashboard</div>
      </div>
      <nav class="mt-2 mb-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
      </nav>

      <div class="dashboard">
        <div class="row">
          <div class="col-md-4">
            <div class="card px-4 border-0 shadow-sm">
              <div class="card-body">
                <div class="fs-5 text-end">
                <?php 
                   $query = mysqli_query($konek, "SELECT COUNT(*) AS jumlah FROM tb_booking");
                   if ($query) {
                     $row = mysqli_fetch_assoc($query);
                     $total = $row['jumlah'];
                     echo $total;
                   }
                  ?>
                </div>
                <div style="margin-top: -10px;" class="fs-3 text-start text-info">
                  <i class="bi bi-people-fill"></i>
                </div>
                <div style="margin-top: -40px;" class="fs-5 pt-4 text-end">
                  Jumlah Pesanan Booking  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card px-4 border-0 shadow-sm">
              <div class="card-body">
                <div class="fs-5 text-end">

                  <?php 
                   $query = mysqli_query($konek, "SELECT COUNT(*) AS jumlah FROM tb_kesenian");
                   if ($query) {
                     $row = mysqli_fetch_assoc($query);
                     $total = $row['jumlah'];
                     echo $total;
                   }
                  ?>
                  
                </div>
                <div style="margin-top: -10px;" class="fs-3 text-start text-warning">
                  <i class="bi bi-intersect"></i>
                </div>
                <div style="margin-top: -40px;" class="fs-5 pt-4 text-end">
                  Jumlah Daftar Kesenian
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="latest-added mt-5">
        <div class="card border-0 shadow-sm">
            <div class="col-md-7">
                    <div class="all-student mt-5">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <div class="page-title fs-5 fw-bold mb-4">
                                    Semua Transaksi
                                </div>
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>No Telepon</th>
            <th>Tanggal Pesan</th>
            <th>Jam</th>
            <th>Destinasi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "../koneksi.php";

        $query = "SELECT * FROM tb_booking";
        $result = mysqli_query($konek, $query);
        $no = 1; // Inisialisasi nomor baris
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['nohp'] . "</td>";
            echo "<td>" . $row['tgl_pesan'] . "</td>";
            echo "<td>" . $row['jam'] . "</td>";
            echo "<td>" . $row['wisata'] . "</td>";
            echo "<td>
                <a href='edit_booking.php?id=$row[id]' class='btn btn-sm btn-warning'>
                    <i class='bi bi-pencil-square'></i>
                </a>
                <a href='proses_deletebooking.php?id=$row[id]' class='btn btn-sm btn-danger'>
                    <i class='bi bi-trash-fill'></i>
                </a>
            </td>";
            echo "</tr>";
        }
        ?>
    

        </div>
  </main>
  <script src="bootstrap/js/jquery-3.5.1.js"></script>
  <script src="bootstrap/js/jquery.dataTables.min.js"></script>
  <script src="bootstrap/js/dataTables.bootstrap5.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>
    $(document).ready(function () {
      $('#datatable').DataTable({
        paging: false,
        info: true,
        dom: 'Bfrtip',
        select: true,
        pageLength: 5,
        recordsTotal: 10,
      });
    });
  </script>
</body>

</html>