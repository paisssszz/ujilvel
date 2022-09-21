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
    <link rel="stylesheet" href="br.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Quicksand:wght@300;400&family=Roboto+Mono&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="navbarang">
    <div class="spin">
        <p><a href="tampilan.php">Paissss<span>zz</span></a></p>
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

<div class="ds">
        <h1>Data Barang</h1>
    </div>
    <br>
    <br>
    <button><a href="barang.html">[+]Tambah Data Peminjam barang </a></button> <br><br><br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>id_barang</th>
            <th>nama_barang</th>
            <th>jenis_barang</th>
            <th>jumlah_barang</th>
            <th>Action</th>
        </tr>
        <?php
            $sql = "SELECT * FROM barang";
            $query = mysqli_query ($connect,$sql);
            $no= 1;
            while($bar = mysqli_fetch_array ($query)){
            echo "
            <tr>
            <td>$no</td>
            <td>$bar[id_barang]</td>
            <td>$bar[nama_barang]</td>
            <td>$bar[jenis_barang]</td>
            <td>$bar[jumlah_barang]</td>
            <td>
                <a href='formeditbarang.php?id_barang=".$bar['id_barang']."'>Edit</a>
                <a href='hapusbarang.php?id_barang=".$bar['id_barang']."'>Hapus</a>
            </td>
            </tr>";+
            $no++;
            }
        ?>
    </table>
</body>
</html>