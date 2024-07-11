<?php
session_start();

include 'koneksi.php';
$username = $_POST['usn'];
$password = md5($_POST['pw']); 

$login = mysqli_query($konek,"SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);

    // buat session login dan username berdasarkan level user
    $_SESSION['username'] = $username;
    $_SESSION['level'] = $data['level'];

    // alihkan ke halaman dashboard sesuai dengan level user
    if($data['level']=="admin"){
        echo "<script> 
        alert('Halo admin, anda akan diarahkan ke halaman utama');
        window.location='admin/index.php';
        </script>";
    } else if($data['level']=="user"){
        echo "<script> 
            alert('Anda akan diarahkan ke halaman utama');
            window.location='front/main.php';
            </script>";
    }
} else {
    // alihkan kembali ke halaman login jika username atau password tidak cocok
    echo "<script>
    alert('Username atau password salah');
    window.location='front/login.php';
    </script>";
}
?>
