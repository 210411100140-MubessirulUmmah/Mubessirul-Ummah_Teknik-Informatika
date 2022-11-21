<?php $__env->startSection('body'); ?>
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
                                <b><?php echo e($mhs->nama); ?></b>
                                <p><?php echo e($mhs->nrp); ?></p>
                                <p><?php echo e($mhs->alamat); ?></p>
                            </div>
                            <div class="bagiankiri">
                                <a class="tombol" href="/mahasiswa/<?php echo e($mhs->id); ?>/edit"><img src="Sumberdaya/edit.png"
                                        width="30px" alt=""></a>
                                <span onclick="return confirm('Apakah anda yakin ingin menghapus data <?php echo e($mhs->nama); ?>')"><a class="tombol" href="/mahasiswa/<?php echo e($mhs->id); ?>/hapus"><img src="Sumberdaya/hapus.png"
                                    width="30px"alt=""></a></span>
                                <p><?php echo e($mhs->email); ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                    else{ ?>
                    <div class="jarak">
                        <div class="bagian">
                            <div class="bagiankanan">
                                <b><?php echo e($mhs->nama); ?></b>
                                <p><?php echo e($mhs->nrp); ?></p>
                                <p><?php echo e($mhs->alamat); ?></p>
                            </div>
                            <div class="bagiankiri">
                                <a class="tombol" href="/mahasiswa/<?php echo e($mhs->id); ?>/edit"><img src="Sumberdaya/edit.png"
                                        width="30px" alt=""></a>
                                <span onclick="return confirm('Apakah anda yakin ingin menghapus data <?php echo e($mhs->nama); ?>')"><a class="tombol" href="/mahasiswa/<?php echo e($mhs->id); ?>/hapus"><img src="Sumberdaya/hapus.png"
                                        width="30px"alt=""></a></span>
                                <p><?php echo e($mhs->email); ?></p>
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
        <?php echo $__env->make('partial.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>

    </html>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('partial.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\modul7\resources\views/mhs.blade.php ENDPATH**/ ?>