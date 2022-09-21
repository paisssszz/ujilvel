<?php 
    include 'koneksi.php';

    if(isset($_POST['edit'])){
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $jenis_barang = $_POST['jenis_barang'];
        $jumlah_barang = $_POST['jumlah_barang'];
        

        $sql = "UPDATE barang SET nama_barang = '$nama_barang', jenis_barang = '$jenis_barang', jumlah_barang = '$jumlah_barang' WHERE barang.id_barang = '$id_barang'";

        $query = mysqli_query($connect, $sql);
        if($query){
            header('Location: tampildatabarang.php');
        }
        else{
            header('Location: simpan_barang.php?status=gagal');
        }
    }
?>