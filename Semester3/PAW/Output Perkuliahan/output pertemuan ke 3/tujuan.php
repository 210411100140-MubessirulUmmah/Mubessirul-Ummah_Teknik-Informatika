<?php
    session_start();
?>
<fieldset>
    <h1>Pendaftaran Nikah Telah Berhasil Dilakukan</h1>
    <h3>
        Data Suami :
        <?php
            /*Data Suami*/
            $namadepan = $_POST['firstNm'];
            $namabelakang = $_POST['lastNm'];
            $ayah = $_POST['Father'];
            $tempatlahir = $_POST['tempat'];
            $tanggallahir = $_POST['tanggal'];
            $kewarganegaraan = $_POST['negara'];
            $agama = $_POST['agama'];
            $pekerjaan = $_POST['pekerjaan'];
            $alamat = $_POST['alamat'];
            $status = $_POST['status'];

            echo "<pre>Nama Depan      : " .$namadepan. "</pre>";
            echo "<pre>Nama Belakang   : " .$namabelakang. "</pre>";
            echo "<pre>Nama Ayah       : " .$ayah. "</pre>";
            echo "<pre>Kewarganegaraan : " .$tanggallahir. "</pre>";
            echo "<pre>Negara          : " .$kewarganegaraan. "</pre>";
            echo "<pre>Agama           : " .$agama. "</pre>";
            echo "<pre>Pekerjaan       : " .$pekerjaan. "</pre>";
            echo "<pre>Alamat          : " .$alamat. "</pre>";
            echo "<pre>Status          : " .$status. "</pre>";

            $_SESSION['namadepan']=$namadepan;
            $_SESSION['namabelakang']=$namabelakang;
            $_SESSION['ayah']=$ayah;
            $_SESSION['tempatlahir']=$tempatlahir;
            $_SESSION['tanggallahir']=$tanggallahir;
            $_SESSION['kewarganegaraan']=$kewarganegaraan;
            $_SESSION['agama']=$agama;
            $_SESSION['pekerjaan']=$pekerjaan;
            $_SESSION['alamat']=$alamat;
            $_SESSION['status']=$status;
        ?>
    </h3>
    <h3>
        Data Isteri :
        <?php
            /*Data isteri*/
            $namadepan2 = $_POST['firstNm2'];
            $namabelakang2 = $_POST['lastNm2'];
            $ayah2 = $_POST['Father2'];
            $tempatlahir2 = $_POST['tempat2'];
            $tanggallahir2 = $_POST['tanggal2'];
            $kewarganegaraan2 = $_POST['negara2'];
            $agama2 = $_POST['agama2'];
            $pekerjaan2 = $_POST['pekerjaan2'];
            $alamat2 = $_POST['alamat2'];
            $status2 = $_POST['status2'];

            echo "<pre>Nama Depan      : " .$namadepan2. "</pre>";
            echo "<pre>Nama Belakang   : " .$namabelakang2. "</pre>";
            echo "<pre>Nama Ayah       : " .$ayah2. "</pre>";
            echo "<pre>Kewarganegaraan : " .$tanggallahir2. "</pre>";
            echo "<pre>Negara          : " .$kewarganegaraan2. "</pre>";
            echo "<pre>Agama           : " .$agama2. "</pre>";
            echo "<pre>Pekerjaan       : " .$pekerjaan2. "</pre>";
            echo "<pre>Alamat          : " .$alamat2. "</pre>";
            echo "<pre>Status          : " .$status2. "</pre>";

            $_SESSION['namadepan2']=$namadepan2;
            $_SESSION['namabelakang2']=$namabelakang2;
            $_SESSION['ayah2']=$ayah2;
            $_SESSION['tempatlahir2']=$tempatlahir2;
            $_SESSION['tanggallahir2']=$tanggallahir2;
            $_SESSION['kewarganegaraan2']=$kewarganegaraan2;
            $_SESSION['agama2']=$agama2;
            $_SESSION['pekerjaan2']=$pekerjaan2;
            $_SESSION['alamat2']=$alamat2;
            $_SESSION['status2']=$status2;
        ?>
    </h3>
</fieldset>
<style>
    fieldset{
    margin: auto;
    padding-left: 50px;
    padding-right: 50px;
    display: grid;
    width:fit-content;
    border-radius: 20px;
    border: 2px rgb(241, 241, 190);
    box-shadow: 0px 0px 30px rgb(0, 0, 0);
    background-color:rgb(241, 241, 190);
    box-shadow: 0px 0px 30px rgb(0, 0, 0);
    margin-top: 20px;
    margin-bottom: 20px;
    }
</style>