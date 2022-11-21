@extends('partial.navbar')

@section('body')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
    <link rel="stylesheet" href="{{url('css.css')}}">
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
