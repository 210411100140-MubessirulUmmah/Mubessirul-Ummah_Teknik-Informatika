<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data</title>
    <link rel="stylesheet" href="css tambah data.css">
</head>
<body>
    <div class="navbar">
        <nav>
            <div class="wrapper">
                <div class="logo"><img src="Gambar/logo utm terbaru.png" alt="" class="gambar"></img></div>
                <p>UNIVERSITAS TRUNOJOYO MADURA</p>
                <ul class="nav-links">
                    <li><a href="Lihat Data.php">Mahasiswa</a></li>
                    <li><a href="#">Prodi</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <br><br><br><br><br>
    <div class="form-add">
        <fieldset>
            <legend><h1>Data Mahasiswa</h1></legend>
            <form action="action.php" method="post">
                <label for="nama" class="nama">Nama Mahasiswa</label><input type="text" id="nama" name="nama_mubes"><br>
                <label for="alamat" class="alamat">Alamat Mahasiswa</label><input type="text" name="alamat_mubes"><br>
                <div class="button"><i class="satu"><button type="submit" onclick="return confirm('Apakah anda yakin ingin menambah data')" class="btn btn-primary btn-sm">Kirim</button></i>
                &nbsp&nbsp&nbsp&nbsp&nbsp
                <a href="Lihat Data.php"><i class="dua"><button type="button" class="btn btn-primary btn-sm">Batal</button></i></a></div>
            </form>
        </fieldset>
    </div>
</body>
</html>

