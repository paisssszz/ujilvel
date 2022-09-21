<?php 
    include 'koneksi.php';

    if(isset($_POST['edit'])){
        $id_siswa = $_POST['id_siswa'];
        $nama_siswa = $_POST['nama_siswa'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        

        $sql = "UPDATE ujilevel SET nama_siswa = '$nama_siswa', kelas = '$kelas', jurusan = '$jurusan' WHERE ujilevel.id_siswa = '$id_siswa'";

        $query = mysqli_query($connect, $sql);
        if($query){
            header('Location: tampildatasiswa.php');
        }
        else{
            header('Location: simpan.php?status=gagal');
        }
    }
?>