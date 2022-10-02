<?php
    include "koneksi.php";

    $nama = $_POST['nama_mhs'];
    $ubah_nama = strtolower($nama);
    $new_nama = ucwords($ubah_nama);

    $alamat = $_POST['alamat_mhs'];
    $ubah_alamat = strtolower($alamat);
    $new_alamat = ucwords($ubah_alamat);
    
    $prodi = $_POST['nama_prodi'];
    function prodi ($prodi) {
      switch ($prodi) {
        case "Teknik Informatika":
            return "1";
        case "teknik informatika":
            return "1";
        case "Teknik informatika":
            return "1";
        case "teknik Tnformatika":
            return "1";
        case "sistem informasi":
            return "2";
        case "Sistem Informasi":
            return "2";
        case "sistem Informasi":
            return "2";
        case "Sistem informasi":
            return "2";
        default:
            return "salah";
        }
      };

    $id_prodi = prodi($prodi);

    if($id_prodi == "1" || $id_prodi == "2"){
        echo "<fieldset><p><u>Penambahan Data Mahasiswa berhasil</u>, Tampilkan Data : <br> <a href='Lihat Data.php'><button type='button' class='btn btn-primary btn-sm'>Lihat Data</button></a><br>
              Lakukan Penambahan data lagi : <br> <a href='Tambah Data.php'><button type='button' class='btn btn-primary btn-sm'>Tambah Data</button></a></p></fieldset>";
    }else{
        echo "<fieldset><p>Mohon Maaf, <i>Penambahan Data Mahasiswa Tidak Berhasil !!!</i><br>
              Nama Prodi Tidak Tersedia, Hanya Terdapat Prodi Berikut :<br>
              <b>Teknik Informatika</b> dan <b>Sistem Informasi</b><br>
              Ulangi Penambahan Data Dengan Klik Tombol Berikut : <br>
              <a href='Tambah Data.php'><button type='button' class='btn btn-primary btn-sm'>Tambah Data</button></a><br>
              Atau Lihat Data Dengan Klik Tombol Berikut : <br>
              <a href='Lihat Data.php'><button type='button' class='btn btn-primary btn-sm'>Lihat Data</button></a></p></fieldset>";
    }

    $sql = "INSERT INTO tbl_mhs VALUES(null,'$id_prodi','$new_nama','$new_alamat')";
    $hasil = mysqli_query($koneksi,$sql);  

    ?>

    <style>
        body{
            background-image: url("Gambar/yso.jfif");
        }
        fieldset{
            margin: auto;
            margin-top: 15vh;
            padding: 50px;
            display: grid;
            width:fit-content;
            border-radius: 30px;
            border: 2px rgb(241, 241, 190);
            background-color:rgb(241, 241, 190);
            box-shadow: 0px 0px 10px white;
        }
        p{
            font-size: 30px;
            color: rgb(24, 41, 41);
            font-family: Geneva;
            margin-right: 10px;
            text-align: center;
            justify-content: center;
        }
        i{
            color: red;
            font-weight: bold;
        }
        u{
            color: green;
            font-weight: bold;
            text-decoration: none;
            font-style: italic;
        }
        b{
            color: green;
        }
        button{
            color: white;
            margin-top: 7px;
            margin-bottom: 7px;
            font-weight: bolder;
            text-shadow:1px 1px 3px black;
            background-color:darkkhaki;
            border: 1px solid dimgrey;
            padding: 5px 10px;
            border-radius: 10px;
            width:fit-content;
            outline: 1.9px solid darkkhaki;
            outline-offset: 2px;
        }
    </style>
  