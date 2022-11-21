<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="css.css">
<div class="navbar">
    <h1><a href="/show" class="logo">Simple Siakad</a></h1>
    <label for="toggler"></label>
    <div class="col-sm-12" id="my_styles">
        <ul class="list">
            <li>
                <a href="/show">
                    <button class="button">Data Mahasiswa</button>
                </a>
            </li>
            <li>
                <a href="/create">
                    <button class="button">Input Data</button>
                </a>
            </li>
            <li>
                <a href="/tp6">
                    <button class="button">About Me</button>
                </a>
            </li>
        </ul>
    </div>
</div>
    <div class="bungkus">
        <h2>Input Data Mahasiswa</h2>
        <form action="/mahasiswa/<?php echo e($mahasiswa->id); ?>" method="post">
            <?php echo method_field('put'); ?>
            <?php echo csrf_field(); ?>
            <div class="kotak">
                <div class="addkanan">
                    <label for="">Nama Mahasiswa</label><br>
                    <input type="text" name="nama" required="required" value="<?php echo e($mahasiswa->nama); ?>"><br>

                    <label for="">Alamat Email</label><br>
                    <input type="text" name="email" required="required" value="<?php echo e($mahasiswa->email); ?>">
                </div>
                <div class="addkiri">
                    <label for="">NIM</label><br>
                    <input type="text" name="nrp" required="required" value="<?php echo e($mahasiswa->nrp); ?>"><br>

                    <label for="">Alamat Rumah</label><br>
                    <input type="text" name="alamat" required="required" value="<?php echo e($mahasiswa->alamat); ?>">
                </div>
            </div>
            <div class="align"><button type="submit" onclick="return confirm('Apakah anda yakin ingin menambah data')" class="btn btn-primary btn-sm">Edit</button></div>
        </form>
        <p class="batas"></p>
    </div>
    <div class="tengah">
        <div class="footer">
            <div class="foot1">
                <img src="Sumberdaya/UTM.png"><br>
                <h4>Jurursan Teknik Informatika<br>Universitas Trunojoyo Madura</h4>
                <p>Jl.Raya.Telang, Kecamatan Kamal, Bangkalan<br>69162 Indonesia<br>Kampus Universitas Trunojoyo Madura</p>
            </div>
            <div class="foot2">
                <h4>Contact Us:</h4>
                <p>Telp : 031-3011146</p>
                <p>Fax : 031-3011506</p>
                <p>email : if.ft@trunojoyo.ac.id</p>
            </div>
            <div class="foot3">
                <h4>Layanan:</h4>
                <p>Pembayaran UKT</p>
                <p>Pendaftaran KP</p>
                <p>Pendaftaran Wisuda</p>
                <p>Administrasi</p>
            </div>
            <div class="foot4">
                <h4>Resource:</h4>
                <p>e-Journal</p>
                <p>Portal Tugas Akhir</p>
                <p>Website Resmi Kampus</p>
                <p>Download Administrasi</p>
            </div>
        </div>
    </div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\modul7\resources\views/editdata.blade.php ENDPATH**/ ?>