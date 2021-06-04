
<?php $__env->startSection('title', 'Profile'); ?>
<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($author->picture); ?> as $picture
        <div class="tengah">
            <div class="grid">
                <img class="pp" src="<?php echo e(asset('$picture')); ?>" alt="">
                <h2 class="jbio">
                    PROFIL AUTHOR
                </h2>
                <h3 class="bio">
                    Nama : <?php echo e($author->name); ?>

                    <br>Kelas : Pemrograman Web C
                    <br>Kota : <?php echo e($author->addres); ?>

                    <br>Cita-cita : Masuk surga 
                </h3>
            </div>
        
        
        </div>    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\UMM\Semester4\Praktikum\web\tryLaravel\modul5\resources\views/profiles/index.blade.php ENDPATH**/ ?>