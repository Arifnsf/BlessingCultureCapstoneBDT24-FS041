<?php
include "../koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$desk = $_POST['desk'];
$harga = $_POST['harga'];
$email = $_POST['email'];
$keterangan = $_POST['ket'];

if ($_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
    $gambar = $_FILES['gambar']['tmp_name'];
    $gambar_blob = addslashes(file_get_contents($gambar));
    $query_update = "UPDATE tb_kesenian SET nama = '$nama', deskripsi = '$desk', harga = '$harga', email = '$email', keterangan = '$keterangan', image = '$gambar_blob' WHERE id = $id";
} else {
    $query_update = "UPDATE tb_kesenian SET nama = '$nama', deskripsi = '$desk', harga = '$harga', email = '$email', keterangan = '$keterangan' WHERE id = $id";
}

$result_update = mysqli_query($konek, $query_update);

if ($result_update) {
    header("Location: tempat_wisata.php");
    exit();
} else {
    echo "Gagal melakukan update.";
}
?>
