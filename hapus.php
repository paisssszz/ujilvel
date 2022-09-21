<?php
include 'koneksi.php';

$id_siswa = $_GET['id_siswa'];

$sql = "DELETE FROM ujilevel WHERE id_siswa='$id_siswa'";
$query = mysqli_query($connect, $sql);

if(isset($_GET['id_siswa'])) {
    header ('Location: tampildatasiswa.php');
}
else {
    header('Location: hapus.php?status=gagal');
}
?>