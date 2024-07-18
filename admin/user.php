<?php
session_start();
include "../koneksi.php";

// Pastikan session username ada
if (isset($_SESSION['username'])) {
    $username_logged_in = $_SESSION['username'];

    // Query untuk mengambil data user yang sedang login
    $query = "SELECT * FROM tb_user WHERE username = '$username_logged_in'";
    $result = mysqli_query($konek, $query);
    $no = 1; // Inisialisasi nomor baris
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="shortcut icon" href="../front/assets/images/logoBC.png" type="image/svg" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="bootstrap/css/dataTables.bootstrap5.min.css">
    
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand fw-bold" href="#">Blessing Culture</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-md-4 mb-2 mb-lg-0">
                    <li class="nav-item dropdown d-flex text-light">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-regular fa-user"></i> User
                        </a>
                        <ul class="dropdown-menu border-0 bg-light ms-auto">
                            <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- sidebar -->
    <div class="offcanvas offcanvas-start bg-purple text-white sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header shadow-sm d-block text-center">
            <div class="offcanvas-title" id="offcanvasExampleLabel">
                <a class="navbar-brand fw-bold" href="#">Blessing Culture</a>
            </div>
        </div>
        <div class="offcanvas-body pt-3 p-0">
            <nav class="navbar-dark">
                <ul class="navbar-nav sidenav">
                    <li class="nav-link bordered px-3">
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <span class="me-2">
                                <i class="bi bi-intersect"></i>
                            </span>
                            <span>Edit Profile</span>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <div>
                                <ul class="navbar-nav ps-3">
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
                <div style="font-weight: 500;" class="fs-3">Edit</div>
            </div>
            <div class="col-md-12">
                <div class="all-student mt-5">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="page-title fs-5 fw-bold mb-4">
                                Edit User
                            </div>
                          
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Nomor HP</th>
                                        <th>Level</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($result)) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td>" . $no++ . "</td>";
                                            echo "<td>" . $row['nama'] . "</td>";
                                            echo "<td>" . $row['username'] . "</td>";
                                            echo "<td>" . $row['email'] . "</td>";
                                            echo "<td>" . $row['no_hp'] . "</td>";
                                            echo "<td>" . $row['level'] . "</td>";
                                            echo "<td>
                                                    <a href='edit_user.php?id=$row[id]' class='btn btn-sm btn-warning'>
                                                        <i class='bi bi-pencil-square'></i>
                                                    </a>
                                                    <a href='proses_deleteuser.php?id=$row[id]' class='btn btn-sm btn-danger'>
                                                        <i class='bi bi-trash-fill'></i>
                                                    </a>
                                                </td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='7'>User tidak ditemukan atau belum login.</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
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

    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
</body>

</html>
