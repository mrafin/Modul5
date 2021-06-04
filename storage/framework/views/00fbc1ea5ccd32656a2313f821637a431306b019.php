
<?php $__env->startSection('title', 'List'); ?>
<?php $__env->startSection('content'); ?>

        <div class="tengah">
            <div class="grid">
                <div class="input-container">
                    <h2 class="jlist">List App</h2>
                    <form>
                        <input type="text" class="input">
                        <button class="button" type="submit">submit</button>
                    </form>
                </div>
                <div class="listapp-container">
                    <ul class="listapp">

                    </ul>
                    <p class="fut">Kamu memiliki <span id="kegiatan">+ kegiatan</span></p>
                    <button class="clear" type="submit">clear</button>
                </div>
            </div>

            <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\UMM\Semester4\Praktikum\web\tryLaravel\modul5\resources\views/lists/index.blade.php ENDPATH**/ ?>