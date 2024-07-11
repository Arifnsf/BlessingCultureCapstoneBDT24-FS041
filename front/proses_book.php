<?php 
include "../koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$date = $_POST['tgl'];
$org = $_POST['jam'];
$wisata = $_POST['wisata'];

$query = "INSERT INTO tb_booking (nama, email, nohp, tgl_pesan, jam, wisata) VALUES 
('$nama', '$email', '$nohp', '$date', '$org', '$wisata')";
$go = mysqli_query($konek, $query);

if ($go) {
	 echo "<script> 
     alert('Data Berhasil ditambahkan!');
     window.location='main.php';

</script>";
}else{
	 echo "<script> 
            alert('Data Gagal ditambahkan!');
            window.location='main.php';
    
    </script>";
  
}
 ?>