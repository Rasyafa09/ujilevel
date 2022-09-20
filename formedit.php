<?php
    include 'koneksi.php';

    $NISN = $_GET['NISN'];
    $sql = "SELECT * FROM ds WHERE NISN = '$NISN'";
    $query = mysqli_query($connect,$sql);
    $data = mysqli_fetch_assoc($query);
    if(mysqli_num_rows($query) < 1){
        die("Data Tidak Ditemukan");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SarPras</title>
    <link rel="stylesheet" href="createds.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <!-- Sidebar Start -->
    <div class="sidebar">
        <div class="logo">
            <img src="tb.png" alt="">
            <p>SARPRAS</p>
        </div>
        <div class="data-siswa">
            <a href="datasiswa.php"><i class="fa-regular fa-user"></i> Data Siswa</a>
        </div>
        <div class="data-barang">
            <a href="databarang.php"><i class="fa-solid fa-box"></i> Data Barang</a>
        </div>
    </div>
    <!-- Sidebar End -->

    <form method="post" action="edit.php">
        <h3>Create Data Siswa</h3>
        <p><label>NISN : 
        <br>
        <input class="d1" type="number" name="NISN" value="<?php echo $data['NISN'] ?>" required="required"></label></p>

        <p><label>Nama Siswa : 
        <br>
        <input class="d2" type="text" name="Nama_siswa" value="<?php echo $data['Nama_siswa'] ?>" required="required"></label></p>

        <p><label>Kelas : 
        <br>
        <input class="d3" type="text" name="Kelas" value="<?php echo $data['Kelas'] ?>" required="required"></label></p>

        <p><label>Nomer Hp : 
        <br>
        <input class="d4" type="number" name="Nomer_Hp" value="<?php echo $data['Nomer_Hp'] ?>" required="required"></label></p>

        <p><label>Jenis Kelamin : 
        <br>
        <input class="d5" type="text" name="Jenis_kelamin" value="<?php echo $data['Jenis_kelamin'] ?>" required="required"></label></p>

        <p><label>Alamat : 
        <br>
        <input class="d6" type="text" name="Alamat" value="<?php echo $data['Alamat'] ?>" required="required"></label></p>

        <input class="d7" type="submit" name="save" value="Save">
    </form>

</body>
</html>