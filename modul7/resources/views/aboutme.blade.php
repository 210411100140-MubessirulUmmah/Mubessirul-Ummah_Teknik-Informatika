@extends('partial.navbar')

@section('body')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    <div class="bungkus">
        <h2>{{$judul1}}</h2>
        <center><img src="Sumberdaya/Mubes.JPG" alt="" width="250"></center>
        <h3 align="center">Mubessirul Ummah</h3>
        <table align="center" width="90%" class="about">
            <tr>
                <td>
                    <h3>{{$judul2}}</h3>
                    <p style="text-indent: 45px;" align="justify">Namaku adalah Mubessirul Ummah dan orang-orang memanggilku dengan sebutan Mubes atau Irul bahkan tak sedikit juga yang memanggilku dengan sebutan Ilong.
                        Aku adalah anak kedua dari pasangan suami istri Abdul ghoni denagan Khomsinah. Aku lahir di Bangkalan pada tanggal 02 Oktober 2004, dan saat ini aku sudah berusia 17 tahun, hehehe... masih muda kaann.
                        Aku mempunyai seorang kakak dia bernama Moh Mahrus Ali, dia sekarang bekerja di Surabaya sebagai tukang cukur rambut. Aku dan keluargaku tinggal di Desa Bilaporah, Kecamatan Socah, Kabupaten Bangkalan.
                        Aku sangat bersyukur bisa lahir dan dibesarkan oleh keluarga seperti mereka. Dibawah ini merupakan foto saya bersama keluarga saya.
                        <center><img src="Sumberdaya/foto keluarga.jpeg" width="200" alt="gambar keluarga mubes" title="Ini adalah foto keluarga mubes"></center>
                    </p>
                    <p style="text-indent: 45px;" align="justify">Ketika berumur 5 setengah tahun, aku memulai pendidikan di salah satu sekolah dasar di desaku, yakni SDN Bilaporah 05. Kemudian setelah lulus sekolah dasar aku
                        melanjutkan pendidikanku di MTsN Bangkalan di tahun 2016. saat sekolah menenagh tersebut, saya masuk ke dalam kelas percepatan dimana saya bisa menempuh sekolah menengah tersebut hanya selama dua tahun.
                        Selepas lulus dari MTsN Bangkalan di tahun 2018, aku pun melanjutkan pendidikanku tak jauh dari lokasi sekolah menengah pertamaku, yakni aku melanjutkannya di MAN Bangkalan. MAN Bangkalan sendiri merupakan
                        sekolah favorit berbasis agama dan keterampilan yang ada di Bangkalan. saat menempuh sekolah menengah atas, aku beberapa kali mengikuti lomba, dan diantaranya aku berhasil keluar sebagai juara, diantaranya
                        adalah lomba debat, KSN-K, dan juga Akademi Madrasah Digital.
                    </p>
                </td>
                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                <td>
                    <p style="text-indent: 45px;" align="justify"><img src="Sumberdaya/foto UTM.jpg" width="200" alt="gambar UTM" title="gambar UTM" style="float:left; margin:8px">
                        Aku adalah seorang mahasiswa di salah satu Universitas ternama di Jawa Timur tepatnya di Universitas Trunojoyo Madura yang berada di Jl. Raya Telang, Perumahan
                        Telang Indah, Telang, Kec. Kamal, Kabupaten Bangkalan, Jawa Timur 69162. Sebagai seorang mahasiswa, saya memiliki aktifitas yang cukup sibuk. seperti mengikuti kelas mata kuliah, mengerjakan tugas, dan
                        mengikuti Unit Kegiatan Mahasiswa. Selain disibukkan dengan
                        jadwal kuliah, saat ini saya mengikuti lomba Technocorner yakni robot "Transporter" yang diadakan oleh Universitas Gadjah Mada. Saat kuliah banyak suka dan duka saya alami, seperti bingung mengerjakan tugas
                        sampai nilai ditulis E karena dianggap belum mengerjakan UTS meskipun sudah.
                    </p>
                    <p style="text-indent: 45px;" align="justify">Dalam kesehariannya, aku memiliki nonton anime, anime yang sudah saya tonton cukup banyak, antara lain seperti Demon slayer, Attack on Titan, Naruto, One-Zero,
                        Black Clover, Hunter x Hunter, Haikyu, Sword Art Online, My Hero Academia, Kuroko no Basket, dan masih banyak lagi yang lainnya. Alasanku suka menonton anime adalah karena dengan menonton anime aku sedikit
                        lebih tenang, menghindari stress akibat aktifitas kuliah, dan yang pasti aku bisa mencintai waifu tanpa harus tersakiti. Berikut dibawah ini merupakan playlist beberapa anime yang pernah saya tonton.
                        <center><img src="Sumberdaya/playlist anime.png" width="250" alt="gambar playlist anime" title="gambar playlist anime"></center>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <br>
                    <h3>{{$judul3}}</h3>
                    <p style="text-indent: 45px;" align="justify">Praktikum Pengembangan Aplikasi Web merupakan sebuah kegiatan yang dilakukan
                        dengan tujuan untuk mengasah kemampuan kita dalam mata kuliah tersebut, selain itu karena
                        mata kuliah ini terdapat 4 SKS, sehingga perlu ada nya Praktikum untuk menambah skill mahasiswa
                        selama melakukan Praktikum tentunya terdapat suka duka yang dilaksanakan, seperti
                        Suka nya adalah karena dengan adanya praktikum ini akan bisa mengasah skill dan ilmu baru
                        yang belum tentu akan diberikan pada saat kuliah bersama dosen. untuk dukanya sih yakni :
                        <ol>
                            <li align="justify">
                                saya pernah hujan-hujanan dari rumah buat praktikum,tapi waktu udah nyampe malah dijadikan online😅, ya sebel lahhh.. tapi yaa gapapa, mungkin salahku juga yang gak lihat pengumuman karena lagi dalam perjalanan. Tapi ini saya paham, karena memang kondisi cuaca yang tidak memungkinkan untuk dilaksanakan praktikum secara offline di kampus.
                            </li>
                            <li align="justify">
                                Terus sebenarnya saya exited banget dan menunggu-nunggu jadwal praktikum PAW ini, karena disana saya bisa belajar bahasa pemrograman PHP, tapi kadang aku sebel, karena penjelasan yang disampaikan sangatlah cepat dan kadang tidak menghiraukan praktikan bisa mengikuti dan memahami atau tidak. Mungkin buat kedepannya nanti bisa sambil ditanya apa ada yang dibingungin, dan sambil di cek pekerjaan dari praktikannya, karena ada beberapa praktikan yang malu untuk mengatakan kalau belum paham.
                            </li>
                            <li align="justify">
                                Terus-terus aku juga suka greget, soalnya tugas pendahuluannya di posting tidak tentu. sampe-sampe pernah di unggah waktu malem banget, juga pernah di posting pas paginya. ya gimana yaaa,, mmm soalnya karena kita juga akan kesusahan buat mengerjakannya, karena pagi harinya juga kita ada jadwal kuliah.
                            </li>
                            <li align="justify">
                                Terakhir dimohon jadwal asistensinya lebih teratur🤔😌.
                            </li>
                        </ol>
                    </p>
                    <p style="text-indent: 45px;" align="justify">Sebelumnya saya mohon maaf yang sebesar-besarnya ya mas mbak, dan saya juga mohon maaf apabila selama praktikum, saya juga melakukan kesalahan. Semoga kita kedepannya sama-sama lebih baik lagi.
                    </p>
                </td>
            </tr>
        </table>
        <p class="batas"></p>
    </div>
    @include('partial.footer')
</body>
</html>
@endsection

