@extends('partial.navbar')

@section('body')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Mahasiswa</title>
    </head>

    <body>
        <div class="bungkus">
            <h2>Data Mahasiswa</h2>
            <div class="kotak">
                <?php
                    foreach ($mahasiswa as $mhs):
                    $x=0;
                    $y=2;
                    if ($x % $y == 0) { ?>
                    <div class="jarak">
                        <div class="bagian">
                            <div class="bagiankanan">
                                <b>{{ $mhs->nama }}</b>
                                <p>{{ $mhs->nrp }}</p>
                                <p>{{ $mhs->alamat }}</p>
                            </div>
                            <div class="bagiankiri">
                                <a class="tombol" href="/mahasiswa/{{ $mhs->id }}/edit"><img src="Sumberdaya/edit.png"
                                        width="30px" alt=""></a>
                                <span onclick="return confirm('Apakah anda yakin ingin menghapus data {{$mhs->nama}}')"><a class="tombol" href="/mahasiswa/{{ $mhs->id }}/hapus"><img src="Sumberdaya/hapus.png"
                                    width="30px"alt=""></a></span>
                                <p>{{ $mhs->email }}</p>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                    else{ ?>
                    <div class="jarak">
                        <div class="bagian">
                            <div class="bagiankanan">
                                <b>{{ $mhs->nama }}</b>
                                <p>{{ $mhs->nrp }}</p>
                                <p>{{ $mhs->alamat }}</p>
                            </div>
                            <div class="bagiankiri">
                                <a class="tombol" href="/mahasiswa/{{ $mhs->id }}/edit"><img src="Sumberdaya/edit.png"
                                        width="30px" alt=""></a>
                                <span onclick="return confirm('Apakah anda yakin ingin menghapus data {{$mhs->nama}}')"><a class="tombol" href="/mahasiswa/{{ $mhs->id }}/hapus"><img src="Sumberdaya/hapus.png"
                                        width="30px"alt=""></a></span>
                                <p>{{ $mhs->email }}</p>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
                <?php endforeach ?>
            </div>
            <p class="batas"></p>
        </div>
        @include('partial.footer')
    </body>

    </html>
@endsection

