<?php
include 'koneksi.php';

$id_barang = $_GET['id_barang'];
$sql = "SELECT * FROM barang where id_barang='$id_barang'";
$query = mysqli_query ($connect, $sql);
$bar = mysqli_fetch_assoc($query);

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
    <title>Update Data Barang</title>
    <link rel="stylesheet" href="br.css">
</head>
<body>
<div class="navbarang">
    <div class="spin">
        <p>Paissss<span>zz</span> </p>
    </div>
    <br>
    <br>
    <div class="dasi">
        <p><a href="tampildatasiswa.php"> Data Siswa</a></p>
    </div>
    <br>
    <br>
    <div class="daba">
        <p><a href="tampildatabarang.php">Data Barang</a></p>
    </div>
</div>

<div class="ups">
    <h1>Update Data Barang </h1>
</div>
        
    <form action="editbarang.php" method="post">
        <br>
        <br>
            <p><Label>Id barang : <input value="<?php echo $bar['id_barang']?>" required="required" type="hidden" name="id_barang"></Label></p>
<!-- id type data harus hidden -->
            <br>
            <p><Label>nama barang : <input value="<?php echo $bar['nama_barang']?>" required="required" type="text" name="nama_barang"></Label></p>
            <br>
            <p><Label>jenis barang : <input value="<?php echo $bar['jenis_barang']?>" required="required" type="text" name="jenis_barang"></Label></p>
            <br>
            <p><Label>jumlah barang : <input value="<?php echo $bar['jumlah_barang']?>" required="required" type="text" name="jumlah_barang"></Label></p>
            <br>
            <br>
        <input type="submit" name="edit" value="Simpan Data Perubahan">
        <div class="btn">
            <button><a href="tampildatabarang.php">Back</a></button>
        </div>
    </form>
</body>
</html>