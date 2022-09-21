<?php
include 'koneksi.php';

$id_siswa = $_GET['id_siswa'];
$sql = "SELECT * FROM ujilevel where id_siswa='$id_siswa'";
$query = mysqli_query ($connect, $sql);
$sis = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("data tidak ditemukan");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="sws.css">
    <style>
    .bn button{
        margin-top: 15px;
        width: 150px;
        margin-left: 563px;
    }
    </style>
</head>
<body>
<div class="navkanan">
    <div class="logo">
        <p>Paissss<span>zz</span> </p>
    </div>
    <br>
    <br>
    <div class="sisw">
        <p><a href="tampildatasiswa.php"> Data Siswa</a></p>
    </div>
    <br>
    <br>
    <div class="bara">
        <p><a href="">Data Barang</a></p>
    </div>
</div>

    <form action="edit.php" method="post">
        <div class="upsis">
            <h1>Update Data Siswa </h1>
        </div>
        <br>
        <br>
            <p><Label>Id siswa : <input value="<?php echo $sis['id_siswa']?>" required="required" type="hidden" name="id_siswa"></Label></p>
<!-- id type data harus hidden -->
            <p><Label>nama siswa : <input value="<?php echo $sis['nama_siswa']?>" required="required" type="text" name="nama_siswa"></Label></p>
            <p><Label>kelas : <input value="<?php echo $sis['kelas']?>" required="required" type="text" name="kelas"></Label></p>
            <p><Label>jurusan : <input value="<?php echo $sis['jurusan']?>" required="required" type="text" name="jurusan"></Label></p>
            <br>
           
        <input type="submit" name="edit" value="Simpan Data Perubahan">
        <div class="bn">
            <button><a href="tampildatasiswa.php">Back</a></button>
        </div>
    </form>
</body>
</html>