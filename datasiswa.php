<?php
include 'koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SarPras</title>
    <link rel="stylesheet" href="datasiswa.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <!-- TAMPILAN UTAMA START -->
    <div class="sidebar">
        <div class="logo">
            <img src="tb.png" alt="">
            <a href="index.php"><p>SARPRAS</p></a>
        </div>
        <div class="data-siswa">
            <a href="datasiswa.php"><i class="fa-regular fa-user"></i> Data Siswa</a>
        </div>
        <div class="data-barang">
            <a href="databarang.php"><i class="fa-solid fa-box"></i> Data Barang</a>
        </div>
    </div>
    <!-- TAMPILAN UTAMA END -->

    <h2>DATA SISWA</h2>
    <form>
    <p>Id Siswa</p>
    <label><input type="text"></label>
    <p>Nama Siswa</p>
    <label><input type="text" name="" id=""></label>
    </form>

</body>
</html>