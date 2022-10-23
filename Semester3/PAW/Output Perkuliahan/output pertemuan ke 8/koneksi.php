<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_140");

    $sql = "SELECT * FROM tbl_mubes";
    $hasil = mysqli_query($koneksi,$sql);

    while($baris=mysqli_fetch_assoc($hasil))
?>