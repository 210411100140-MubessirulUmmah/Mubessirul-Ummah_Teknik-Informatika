<?php
    $koneksi=mysqli_connect("localhost","root","","db_140");

    $id=$_GET['id'];
    $hasil2=mysqli_query($koneksi,"SELECT * FROM tbl_mubes
    WHERE id_mubes = $id");
    $data = mysqli_fetch_array($hasil2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data</title>
    <link rel="stylesheet" href="css tambah data.css">
</head>
<body>
    <div class="navbar">
        <nav>
            <div class="wrapper">
                <div class="logo"><img src="Gambar/logo utm terbaru.png" alt="" class="gambar"></img></div>
                <p>UNIVERSITAS TRUNOJOYO MADURA</p>
                <ul class="nav-links">
                    <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
                    <li><a href="Lihat Data.php">Mahasiswa</a></li>
                    <li><a href="Lihat Data Prodi.php">Prodi</a></li>
                    <li><a href="../index.html#about">About</a></li>
                    <li><a href="../index.html#about">Contact</a></li>
                </ul>
                <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
            </div>
        </nav>
    </div>
    <br><br><br><br><br>
    <div class="form-add">
        <fieldset>
            <legend><h1>Edit Data Mahasiswa</h1></legend>
            <form method="POST" name="data" action="Update Data.php">
                <input type="hidden" class="form-control" id="id_mubes" name="id_mubes" value="<?php echo $data['id_mubes']?>">
                <label for="nama" class="nama">Nama Mahasiswa</label><input type="text" id="nama" name="nama_mubes" value="<?php echo $data['nama_mubes']?>"><br>
                <label for="alamat" class="alamat">Alamat Mahasiswa</label><input type="text" id="alamat" name="alamat_mubes" value="<?php echo $data['alamat_mubes']?>"><br>
                <div class="button"><button type="submit" onclick="return confirm('Apakah anda yakin ingin mengganti data <?php echo $data['nama_mubes']?>?')" class="btn btn-primary btn-sm">Kirim</button>
                &nbsp&nbsp&nbsp&nbsp&nbsp
                <a href="Lihat Data.php"><button type="button" class="btn btn-primary btn-sm">Batal</button></a></div>
            </form>
        </fieldset>
    </div>
</body>
</html>


