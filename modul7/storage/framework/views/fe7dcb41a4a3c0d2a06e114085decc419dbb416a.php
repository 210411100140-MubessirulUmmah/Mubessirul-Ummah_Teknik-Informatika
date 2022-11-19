<?php $__env->startSection('body'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="bungkus">
        <h2>Input Data Mahasiswa</h2>
        <form action="" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
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
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partial.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\modul7\resources\views//edit.blade.php ENDPATH**/ ?>