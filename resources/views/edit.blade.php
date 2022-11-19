@extends('partial.navbar')

@section('body')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="bungkus">
        <h2>Input Data Mahasiswa</h2>
        <form action="/mahasiswa/{{$mahasiswa->id}}" method="post">
            @method('put')
            @csrf
            <div class="kotak">
                <div class="addkanan">
                    <label for="">Nama Mahasiswa</label><br>
                    <input type="text" name="nama" required="required" value="{{ $mahasiswa->nama }}"><br>

                    <label for="">Alamat Email</label><br>
                    <input type="text" name="email" required="required" value="{{ $mahasiswa->email }}">
                </div>
                <div class="addkiri">
                    <label for="">NIM</label><br>
                    <input type="text" name="nrp" required="required" value="{{ $mahasiswa->nrp }}"><br>

                    <label for="">Alamat Rumah</label><br>
                    <input type="text" name="alamat" required="required" value="{{ $mahasiswa->alamat }}">
                </div>
            </div>
            <div class="align"><button type="submit" onclick="return confirm('Apakah anda yakin ingin mengganti data {{$mahasiswa->nama}}')" class="btn btn-primary btn-sm">Edit</button></div>
        </form>
        <p class="batas"></p>
    </div>
    @include('partial.footer')
</body>
</html>
@endsection

<style>
    body{
        overflow:scroll;
        background-color: beige;
    }

    .navbar{
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        background-color: rgb(7, 120, 139);
        padding: 15px 60px;
        margin: 30px;
        margin-bottom: 0px;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
        border: 3px white solid;
    }
    .navbar a{
        text-decoration: none;
        color: #fff;
        border: none;
        color: #fff;
        font-family: Josefin Sans Medium;
        font-weight: 1000;
    }
    .batas{
        margin-top: 100px;
    }
    h2{
        font-family: Arial, Helvetica, sans-serif;
        color: rgb(7, 120, 139);
        margin-left: 2%;
    }
    h3{
        font-family: Arial, Helvetica, sans-serif;
        color: rgb(7, 120, 139);
    }
    .list{
        list-style: none;
        display: flex;
        gap: 25px;
    }

    .button{
        background-color: rgb(7, 120, 139);
        border-radius: 20px;
    }
    .list button{
        height: 30px;
        border: none;
        padding: 5 10;
        color: #fff;
        font-size: medium;
        font-family: Josefin Sans Medium;
        font-weight: 1000;
    }
    .list button:hover{
        background-color: #fff;
        color: rgb(7, 120, 139);
    }
    .list a:hover{
        color: rgb(7, 120, 139);
    }

    .bungkus{
        padding: 15px;
        margin: 30px;
        margin-top: 0px;
        margin-bottom: 0px;
        border: 3px white solid;
        background-color: #fff;
    }
    .kotak {
        margin: auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
    .jarak{
        margin-top: 20px;
    }

    .bagian {
        background-color: #fff;
        width: 90%;
        border-radius: 30px;
        padding: 15px;
        margin-top: 10px;
        margin: auto;
        border: darkgrey 1px solid;
        display: grid;
        grid-template-columns: 1fr 1fr;
    }

    .bagiankanan {
        padding: 5px;
        font-family: "Josefin Sans Medium";
    }
    .bagiankiri {
        text-align: right;
        padding: 5px;
        font-family: "Josefin Sans Medium";
    }
    .bagiankiri a,img{
        text-align: right;
        align-items: right;
        justify-content: right;
    }
    .tengah{
        padding: 20px;
        margin: 30px;
        margin-top: 0px;
        margin-bottom: 0px;
        background-color: rgb(7, 120, 139);
        border-bottom-left-radius: 30px;
        border-bottom-right-radius: 30px;
        border: 3px white solid;
        font-family: Josefin Sans Medium;
        color: #fff;
    }
    .footer{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
    }
    .footer img{
        width: 60px;
    }
    .footer p{
        margin-top: -5px;
    }

    .foot1 {
        padding: 3px 10px;
        margin-left: 10%;
    }
    .foot2 {
        padding: 3px;
        margin-left: 17%;
    }
    .foot3 {
        padding: 3px;
        margin-left: 17%;
    }
    .foot4 {
        padding: 3px;
        margin-left: 17%;
    }


    /* tambah data */
    .bungkus button{
        margin-top: 20px;
        margin-bottom: 10px;
        color: white;
        font-weight: bolder;
        text-shadow:1px 1px 3px black;
        background-color:rgb(113, 169, 206);
        border: none;
        padding: 5px 4px;
        border-radius: 10px;
        width: 80px;
        outline: 2px solid rgb(113, 169, 206);
        outline-offset: 2px;
    }
    .bungkus button:hover{
        background-color:rgb(7, 120, 139);
        outline: 2px solid rgb(7, 120, 139);
    }
    .bungkus button:active{
    transform: translateY(4px) translateX(4px);
    box-shadow: #fff 0px 0px 0px;
    }
    label{
        font-family: Josefin Sans Medium;
    }
    input{
        font-size:medium;
        font-family: Josefin Sans Medium;
        padding: 7px 10px;
        width: 535px;
        margin-bottom: 20px;
    }
    input:focus{
        border: 2px rgb(113, 169, 206) solid;
        outline: none;
    }

    .addkanan{
        padding: 15px;
        margin-left: 30px;
        width: 50%;
    }
    .addkiri{
        padding: 15px;
        margin-right: 30px;
        width: 50%;
    }
    .align{
        text-align: right;
        margin-right: 30px;
        margin-top: -20px;
        padding-right: 20px;
    }

</style>
