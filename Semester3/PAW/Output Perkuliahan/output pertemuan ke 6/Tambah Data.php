<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data</title>
</head>
<body>
    <p>Tambah Data Mahasiswa</p>
    <div class="panah2"><span class="panah">&#129139;</span><span class="panah">&#129139;</span><span class="panah">&#129139;</span></div>
    <fieldset>
    <legend><h1>Data Mahasiswa</h1></legend>
         <form action="action.php" method="post">
            <label for="nama" class="nama">Nama Mahasiswa</label><input type="text" name="nama_mhs"><br>
            <label for="nama" class="prodi">Nama Program Studi</label><input type="text" name="nama_prodi"><br>
            <label for="nama" class="alamat">Alamat Mahasiswa</label><input type="text" name="alamat_mhs"><br>
            <div class="button"><button type="submit" class="btn btn-primary btn-sm">Kirim</button></div>
        </form>
    </fieldset>
</body>
</html>

<style>
    body{
        background-image: url("Gambar/yso.jfif");
        background-repeat: no-repeat;
        background-size: cover;
    }
    fieldset{
        margin: auto;
        margin-top: 5vh;
        padding: 50px;
        display: grid;
        width:fit-content;
        border-radius: 20px;
        border: 2px rgb(241, 241, 190);
        background-color:rgb(241, 241, 190);
        box-shadow: 0px 0px 10px white;
    }
    label{
        font-size: 30px;
        color: rgb(24, 41, 41);
        font-family: Geneva;
        margin-right: 10px;
    }
    p{
        text-align: center;
        font-family: Cursive;
        font-size: 30px;
        font-weight: bold;
        margin-bottom: 0px;
        color: white;
        text-shadow:1px 0px 1px  whitesmoke;
    }
    h1{
        color: rgb(255, 255, 255);
        text-shadow:2px -1px 2px  rgb(14, 34, 46);
        background-color:darkkhaki;
        border-radius: 10px;
        padding: 2px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 30px;
        font-weight:bolder;
    }
    .nama::after{
        content: ":";
        margin-left: 55px;
    }
    .prodi::after{
        content: ":";
        margin-left: 16px;
    }
    .alamat::after{
        content: ":";
        margin-left: 38px;
    }
    .button{
        text-align: center;
    }
    button{
        margin-top: 20px;
        color: white;
        font-weight: bolder;
        text-shadow:1px 1px 3px black;
        background-color:darkkhaki;
        border: 1px solid dimgrey;
        padding: 5px 4px;
        border-radius: 10px;
        width: 80px;
        outline: 1.9px solid darkkhaki;
        outline-offset: 2px;
    }
    input{
        border: none;
        border-bottom: 1px solid rgb(39, 69, 82);
        font-size: 25px;
        font-family: 'Geneva';
        padding: 2px 10px;
        width: 200px;
        background: transparent;
        outline: none;
    }
    input::-webkit-input-placeholder{
        color:deeppink;
    }
    input:focus{
        border-bottom: 1px cadetblue;
        outline: none;
        background: transparent;
    }
    /*panah*/
    .panah{
        color: whitesmoke;
        text-shadow:1px 1px 2px  rgb(14, 34, 46);
        font-size: 30px;
        font-weight: bolder;
        text-align: center;
        margin-left: 10px;
        margin-right: 10px;
        margin-bottom: 0px;
    }
    .panah2{
        left: 50%;
        position: absolute;
        transform: translate(-50%);
    }
</style>