<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_140");
    $sql = "SELECT * FROM tbl_mubes m
    ORDER BY nama_mubes ASC" ;
    $hasil = mysqli_query($koneksi,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>DATA MAHASISWA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css lihat data.css">
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><img src="Gambar/logo utm terbaru.png" alt=""><a href="bangkalan.html">UNIVERSITAS TRUNOJOYO MADURA</a></div>
            <ul class="nav-links">
                <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
                <li><a href="Lihat Data.php">Mahasiswa</a></li>
                <li><a href="#">Prodi</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
        </div>
    </nav>

    <div class="container">
        <h2>DATA MAHASISWA</h2>
        <p class="keterangan">Data Mahasiswa Fakultas Teknik Universitas Trunojoyo Madura Yang Diambil Dari MySQL</p>
        <div class="add"><a href="Tambah Data.php"><button type="button" class="btn btn-success btn-sm">Tambah Data</button></a></div>
        <table class="table table-dark table-striped" style="text-align: center;">
            <thead>
                <tr>
                    <th>ID Mahasiswa</th>
                    <th>Nama Mahasiswa</th>
                    <th>Alamat Mahasiswa</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                  while($baris = mysqli_fetch_assoc($hasil)){
                ?>
                <tr class="table-info">
                    <td><?php echo $baris['id_mubes'] ?></td>
                    <td><?php echo $baris['nama_mubes'] ?></td>
                    <td><?php echo $baris['alamat_mubes'] ?></td>
                    <td>
                        <a href="Edit Data.php?id=<?php echo $baris['id_mubes'];?>"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                        <a href="hapus data.php?id=<?php echo $baris['id_mubes'];?>"><button type="button" onclick ="return confirm('Apakah Anda Yakin Ingin Menghapus Data <?php echo $baris['nama_mubes']?>')" class="btn btn-danger btn-sm">Hapus</button></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>





