<?php 
include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$username = $_POST['usn'];
$password = md5($_POST['pw']);
$level = "user";
$query = "INSERT INTO tb_user (username, password, nama, email, no_hp, level) VALUES ('$username', '$password', '$nama', '$email', '$nohp',  '$level')";
$go = mysqli_query($konek, $query);

if ($go) {
	 echo "<script> 
     alert('Data berhasil ditambahkan! Silahkan Login terlebih dahulu');
     window.location='front/login.php';

</script>";
}else{
	 echo "<script> 
            alert('Data Gagal ditambahkan!');
            window.location='index.php';
    
    </script>";
}


 ?>