<?php
include "../koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$deskripsi = $_POST['desk'];
$harga = $_POST['harga'];
$keterangan = $_POST['ket'];

if(isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
    $gambar = $_FILES['gambar']['tmp_name'];
    $gambar_blob = addslashes(file_get_contents($gambar));
} else {
    $uploadErrors = [
        UPLOAD_ERR_INI_SIZE => 'Ukuran file terlalu besar.',
        UPLOAD_ERR_FORM_SIZE => 'Ukuran file terlalu besar.',
        UPLOAD_ERR_PARTIAL => 'File hanya diunggah sebagian.',
        UPLOAD_ERR_NO_FILE => 'Tidak ada file yang diunggah.',
        UPLOAD_ERR_NO_TMP_DIR => 'Direktori penyimpanan sementara tidak ditemukan.',
        UPLOAD_ERR_CANT_WRITE => 'Gagal menyimpan file ke disk.',
        UPLOAD_ERR_EXTENSION => 'File dihentikan oleh ekstensi PHP.'
    ];

    $errorCode = $_FILES['gambar']['error'];

    $errorMessage = isset($uploadErrors[$errorCode]) ? $uploadErrors[$errorCode] : 'Error tidak diketahui saat mengunggah gambar.';
    
    echo "<script> 
           alert('Error saat mengunggah gambar: $errorMessage');
           window.location='tambah-wisata.php';
           </script>";
    exit; // Keluar dari skrip jika terdapat masalah pada unggahan gambar
}

$query = "INSERT INTO tb_kesenian (nama, email, deskripsi, harga, keterangan, image) 
VALUES ('$nama', '$email', '$deskripsi', '$harga', '$keterangan', '$gambar_blob')";
$sql = mysqli_query($konek, $query);

if ($sql) {
    echo "<script> 
           alert('Anda Berhasil ditambahkan!');
           window.location='tempat_wisata.php';
           </script>";
} else {
    echo "<script> 
           alert('Data Gagal ditambahkan!');
           window.location='tambah-wisata.php';
           </script>";
}
?>
