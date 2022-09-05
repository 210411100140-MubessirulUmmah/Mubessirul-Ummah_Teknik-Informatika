<fieldset>
    <h1>Akses session pada file coba</h1>
    <h3>
        <?php
            session_start();

            /*data suami*/
            echo $_SESSION['namadepan'],"<br>";
            echo $_SESSION['namabelakang'],"<br>";
            echo $_SESSION['ayah'],"<br>";
            echo $_SESSION['tempatlahir'],"<br>";
            echo $_SESSION['tanggallahir'],"<br>";
            echo $_SESSION['kewarganegaraan'],"<br>";
            echo $_SESSION['agama'],"<br>";
            echo $_SESSION['pekerjaan'],"<br>";
            echo $_SESSION['alamat'],"<br>";
            echo $_SESSION['status'],"<br>";

            /*data isteri*/
            echo $_SESSION['namadepan2'],"<br>";
            echo $_SESSION['namabelakang2'],"<br>";
            echo $_SESSION['ayah2'],"<br>";
            echo $_SESSION['tempatlahir2'],"<br>";
            echo $_SESSION['tanggallahir2'],"<br>";
            echo $_SESSION['kewarganegaraan2'],"<br>";
            echo $_SESSION['agama2'],"<br>";
            echo $_SESSION['pekerjaan2'],"<br>";
            echo $_SESSION['alamat2'],"<br>";
            echo $_SESSION['status2'],"<br>";
        ?>
    </h3>
</fieldset>

<style>
    fieldset{
    margin: auto;
    padding-left: 50px;
    padding-right: 50px;
    display: grid;
    width:500px;
    border-radius: 20px;
    border: 2px rgb(241, 241, 190);
    box-shadow: 0px 0px 30px rgb(0, 0, 0);
    background-color:rgb(241, 241, 190);
    box-shadow: 0px 0px 30px rgb(0, 0, 0);
    margin-top: 20px;
    margin-bottom: 20px;
    text-align: center;
    }
</style>