<?php
include "../koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Mengambil data berdasarkan ID
    $query = "SELECT * FROM tb_booking WHERE id = '$id'";
    $result = mysqli_query($konek, $query);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        echo "Data tidak ditemukan!";
        exit;
    }
} else {
    echo "ID tidak ditemukan!";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $tgl_pesan = $_POST['tgl_pesan'];
    $jam = $_POST['jam'];
    $wisata = $_POST['wisata'];

    // Update data ke database
    $query = "UPDATE tb_booking SET nama = '$nama', email = '$email', nohp = '$nohp', tgl_pesan = '$tgl_pesan', jam = '$jam', wisata = '$wisata' WHERE id = '$id'";
    if (mysqli_query($konek, $query)) {
        echo "Data berhasil diupdate!";
        header("Location: index.php"); // Ganti dengan halaman daftar booking Anda
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($konek);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        :root {
          --offcanvas-width: 270px;
          --topNavbarHeight: 56px;
        }

        * {
          font-family: 'Poppins', sans-serif;
          color: #000000;
        }

        body {
          background-color: #F6F9FF;
          margin: 0;
          padding: 0;
        }

        a {
          text-decoration: none;
        }

        .sidebar-nav {
          width: var(--offcanvas-width) !important;
        }

        .sidebar-link {
          display: flex;
          align-items: center;
        }

        .sidebar-link .right-icon {
          display: inline-flex;
          transition: all ease 0.25s;
        }

        .sidebar-link[aria-expanded="true"] .right-icon {
          transform: rotate(180deg) !important;
        }

        .bg-purple {
          background-color: #ffffff;
        }

        .offcanvas-header {
          background-color: #ffffff;
          font-size: 25px;
          padding: 10px;
        }

        .breadcrumb-item {
          font-size: 18px;
        }

        .text-center {
          text-align: center !important;
        }

        .navbar-brand {
          text-transform: uppercase;
          color: #000000;
        }

        @media (min-width:992px) {
          body {
            overflow: auto !important;
          }

          .offcanvas-backdrop::before {
            display: none;
          }

          main {
            margin-left: var(--offcanvas-width);
          }

          .sidebar-nav {
            transform: none !important;
            visibility: visible !important;
            /* top: var(--topNavbarHeight) !important;
            height: calc(100%- var(--topNavbarHeight)) !important; */
          }
        }

        .profile-details li {
          display: inline-block;
          list-style: none;
          font-size: 17px;
        }

        .profile-details>.text-muted {
          width: 120px;
          text-align: end;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            background-color: #fff;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }

        input[type="text"], input[type="email"], input[type="date"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Edit Booking</h2>
    <form action="edit_booking.php?id=<?php echo $id; ?>" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>"><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
        
        <label for="nohp">No HP:</label><br>
        <input type="text" id="nohp" name="nohp" value="<?php echo $row['nohp']; ?>"><br><br>
        
        <label for="tgl_pesan">Tanggal Pesan:</label><br>
        <input type="date" id="tgl_pesan" name="tgl_pesan" value="<?php echo $row['tgl_pesan']; ?>"><br><br>
        
        <label for="jam">Jam:</label><br>
        <input type="time" id="jam" name="jam" value="<?php echo $row['jam']; ?>"><br><br>
        
        <label for="wisata">Wisata:</label><br>
        <input type="text" id="wisata" name="wisata" value="<?php echo $row['wisata']; ?>"><br><br>
        
        <input type="submit" value="Update">
    </form>
</body>
</html>
