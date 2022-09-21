<?php
    include 'koneksi.php' ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sws.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Quicksand:wght@300;400&family=Roboto+Mono&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
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
        <p><a href="tampildatabarang.php">Data Barang</a></p>
    </div>
</div>

    <div class="dt">
        <h1>Data Siswa</h1>
    </div>
    <br>
    <br>
    <button><a href="siswa.html">[+]Tambah Data Siswa Baru</a></button> <br><br><br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>id_siswa</th>
            <th>nama_siswa</th>
            <th>kelas</th>
            <th>jurusan</th>
            <th>Action</th>
        </tr>
        <?php
            $sql = "SELECT * FROM ujilevel";
            $query = mysqli_query ($connect,$sql);
            $no= 1;
            while($sis = mysqli_fetch_array ($query)){
            echo "
            <tr>
            <td>$no</td>
            <td>$sis[id_siswa]</td>
            <td>$sis[nama_siswa]</td>
            <td>$sis[kelas]</td>
            <td>$sis[jurusan]</td>
            <td>
                <a href='formedit.php?id_siswa=".$sis['id_siswa']."'>Edit</a>
                <a href='hapus.php?id_siswa=".$sis['id_siswa']."'>Hapus</a>
            </td>
            </tr>";+
            $no++;
            }
        ?>
    </table>
</body>
</html>