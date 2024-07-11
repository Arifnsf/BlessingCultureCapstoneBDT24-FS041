<?php 	
include "../koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['usn'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];

$query = "UPDATE tb_user SET  username = '$username', nama = '$nama', no_hp = '$nohp', email = '$email' WHERE id = '$id'";
$go = mysqli_query($konek, $query);

if ($go) {
	echo "<script> 
            alert('Data Berhasil diubah!');
            window.location='user.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal diubah!');
    window.location='edit_pasien.php';

</script>";
}

 ?>