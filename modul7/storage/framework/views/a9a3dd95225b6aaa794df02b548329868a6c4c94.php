<?php $__env->startSection('body'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($title); ?></title>
</head>
<body>
    <div class="bungkus">
        <h2>Input Data Mahasiswa</h2>
        <form action="<?php echo e(Route('store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="kotak">
                <div class="addkanan">
                    <label for="">Nama Mahasiswa</label><br>
                    <input type="text" name="nama" required="required"><br>

                    <label for="">Alamat Email</label><br>
                    <input type="text" name="email" required="required">
                </div>
                <div class="addkiri">
                    <label for="">NIM</label><br>
                    <input type="text" name="nrp" required="required"><br>

                    <label for="">Alamat Rumah</label><br>
                    <input type="text" name="alamat" required="required">
                </div>
            </div>
            <div class="align"><button type="submit" onclick="return confirm('Apakah anda yakin ingin menambah data')" class="btn btn-primary btn-sm">Kirim</button></div>
        </form>
        <p class="batas"></p>
    </div>
    <?php echo $__env->make('partial.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partial.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\modul7\resources\views/tambah.blade.php ENDPATH**/ ?>