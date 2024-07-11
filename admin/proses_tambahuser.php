<?php 
include "../koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$username = $_POST['usn'];
$password = md5($_POST['pw']);
$level = $_POST['level'];
$query = "INSERT INTO tb_user (username, password, nama, email, no_hp, level) VALUES ('$username', '$password', '$nama', '$email', '$nohp',  '$level')";
$go = mysqli_query($konek, $query);

if ($go) {
	 echo "<script> 
     alert('Data berhasil ditambahkan!');
     window.location='user.php';

</script>";
}else{
	 echo "<script> 
            alert('Data Gagal ditambahkan!');
            window.location='index.php';
    
    </script>";
}


 ?>