<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_140");

    $sql = "SELECT * FROM tbl_mubes";
    $hasil = mysqli_query($koneksi,$sql);

    while($baris=mysqli_fetch_assoc($hasil))

    include "koneksi.php";

    $id=$_POST['id_mubes'];

    $nama = $_POST['nama_mubes'];
    $ubah_nama = strtolower($nama);
    $new_nama = ucwords($ubah_nama);

    $alamat = $_POST['alamat_mubes'];
    $ubah_alamat = strtolower($alamat);
    $new_alamat = ucwords($ubah_alamat);
    

    $sql = "UPDATE tbl_mubes SET nama_mubes = '$new_nama', alamat_mubes='$new_alamat' WHERE id_mubes=$id";
    $hasil = mysqli_query($koneksi,$sql); 
    if ($hasil){
        header("location:Lihat Data.php");
    }
?>