<?php
include 'koneksi.php';




if(isset($_POST['simpan'])){
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];


    $sql= "INSERT INTO barang (id_barang, nama_barang, jenis_barang, jumlah_barang) VALUES ('$id_barang','$nama_barang','$jenis_barang','$jumlah_barang')";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: tampildatabarang.php');
    }else{
        header('Location: simpan.php?status=gagal');
    }

}


?>