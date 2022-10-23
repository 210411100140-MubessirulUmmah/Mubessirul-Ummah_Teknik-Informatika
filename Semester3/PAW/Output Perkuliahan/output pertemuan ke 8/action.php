<link rel="stylesheet" href="css action.css">

<div class="navbar">
        <nav>
            <div class="wrapper">
                <div class="logo"><img src="Gambar/logo utm terbaru.png" alt="" class="gambar"></img></div>
                <p>UNIVERSITAS TRUNOJOYO MADURA</p>
                <ul class="nav-links">
                    <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
                    <li><a href="../index.html">Mahasiswa</a></li>
                    <li><a href="../index.html#about">Prodi</a></li>
                    <li><a href="../index.html#about">About</a></li>
                    <li><a href="../index.html#about">Contact</a></li>
                </ul>
                <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
            </div>
        </nav>
    </div>
<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_140");

    $sql = "SELECT * FROM tbl_mubes";

    include "koneksi.php";
    

    $nama = $_POST['nama_mubes'];
    $ubah_nama = strtolower($nama);
    $new_nama = ucwords($ubah_nama);

    $alamat = $_POST['alamat_mubes'];
    $ubah_alamat = strtolower($alamat);
    $new_alamat = ucwords($ubah_alamat);
    

    if (empty($nama) || empty($alamat)){
        echo "
        <fieldset><div class='konten'><h1 class='no'>Penambahan Data Mahasiswa Gagal !!!</h1></div><br>
        <div class='teks'><b>Klik Tombol Dibawah Ini !!!</b></div>
                <div class='container'>
                <div class='posisi'><img src='Gambar/pngegg.png' alt=''></div>
                    <a href='Tambah Data.php'>
                        <div class='kanan'>
                            <br>
                            <i>Tambah Data</i><br>
                        </div>
                    </a>
                    <a href='Lihat Data.php'>
                        <div class='kiri'>
                            <br>
                            <i>Lihat Data</i>
                        </div>
                    </a>
                </div></fieldset>
                ";
    }
    else{
        $sql = "INSERT INTO tbl_mubes VALUES(null,'$new_nama','$new_alamat')";
        $hasil = mysqli_query($koneksi,$sql);
        echo "
        <fieldset><div class='konten'><h1 class='yes'>Penambahan Data Mahasiswa berhasil</h1></div>
            <div class='teks'><b>Klik Tombol Dibawah Ini !!!</b></div>
            <div class='container'>
            <div class='posisi'><img src='Gambar/pngegg (1).png' alt=''></div>
                <a href='Tambah Data.php'>
                    <div class='kanan'>
                        <br>
                        <i>Tambah Data</i><br>
                    </div>
                </a>
                <a href='Lihat Data.php'>
                    <div class='kiri'>
                        <br>
                        <i>Lihat Data</i>
                    </div>
                </a>
            </div></fieldset>
            ";
    }

    
?>