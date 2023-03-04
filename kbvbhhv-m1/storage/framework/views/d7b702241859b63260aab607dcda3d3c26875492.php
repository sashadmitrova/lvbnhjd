<?php $__env->startSection('content'); ?>


<link rel="stylesheet" href="/public/style/admin.css">
<h1 class="d-flex justify-content-center">Админка</h1>
    <h3 class="d-flex justify-content-center">Управление товаром</h3>
    <div class="container">
        <div class="row">
            <a href="<?php echo e(url('/admin/product')); ?>" class="btn btn-info justify-content-center">создать товар</a>
        </div>
        <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obprod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
                <div class="col">
                    <h3><?php echo e($obprod->name); ?></h3> 
                </div>
                <div class="col">
                    <a href="" class="btn btn-primary ">Редактировать</a>
                   
                </div>
                <div class="col">
                    <a href="<?php echo e(url('/admin/product/delete/')); ?>/<?php echo e($obprod->id); ?>" class="btn btn-danger">Удалить</a>
                </div> 

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/zytiurfp/kbvbhhv-m1/resources/views/admin.blade.php ENDPATH**/ ?>