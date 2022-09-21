<?php
include 'koneksi.php';

$id_barang = $_GET['id_barang'];

$sql = "DELETE FROM barang WHERE id_barang='$id_barang'";
$query = mysqli_query($connect, $sql);

if(isset($_GET['id_barang'])) {
    header ('Location: tampildatabarang.php');
}
else {
    header('Location: hapusbarang.php?status=gagal');
}
?>