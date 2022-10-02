<?php
    $koneksi = mysqli_connect("localhost", "root", "", "pertemuanke5");
    $sql = "SELECT * FROM tbl_mhs m,tbl_prodi p
    WHERE m.id_prodi = p.id_prodi
    ORDER BY nama_mhs ASC" ;
    $hasil = mysqli_query($koneksi,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Mahasiswa Teknik</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      button{
        width: 65px;
        text-align: center;
        align-items: center;
        padding: 15px;
    }
    </style>
</head>

<body>
    <div class="container mt-3">
        <h2>Data Mahasiswa Teknik</h2>
        <p>Berikut Data Mahasiswa Teknik Universitas Trunojoyo Madura Yang Diambil Dari MySQL</p>
        <a href="Tambah Data.php"><button type="button" class="btn btn-primary btn-sm">Tambah</button></a>
        <br><br>
        <table class="table table-dark table-striped" style="text-align: center;">
            <thead>
                <tr>
                    <th>ID Mahasiswa</th>
                    <th>Nama Mahasiswa</th>
                    <th>Prodi Mahasiswa</th>
                    <th>Alamat Mahasiswa</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                  while($baris = mysqli_fetch_assoc($hasil)){
                ?>
                <tr class="table-success">
                    <td><?php echo $baris['id_mhs'] ?></td>
                    <td><?php echo $baris['nama_mhs'] ?></td>
                    <td><?php echo $baris['nama_prodi'] ?></td>
                    <td><?php echo $baris['alamat_mhs'] ?></td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<style>
    body{
        background-image: url("Gambar/yso.jfif");
    }
    h2,p{
        color: white;
        font-weight: bolder;
        text-shadow:0px 0px 2px darkkhaki;
    }
</style>


