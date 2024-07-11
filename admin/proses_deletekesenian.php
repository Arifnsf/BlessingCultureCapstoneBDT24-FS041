<?php
include "../koneksi.php";

$id=$_GET['id'];


$query = "DELETE FROM tb_kesenian WHERE id = $id";
$go = mysqli_query($konek, $query);

if ($go){
    echo "<script> 
            alert('Data berhasil dihapus');
            window.location='tempat_wisata.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal dihapus');
    window.location='index.php';

</script>";
}


?>