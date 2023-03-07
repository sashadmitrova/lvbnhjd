<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-around">

            <div class="col-4">
                <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obprod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img class="h-50" src="<?php echo e($obprod->img_url); ?>" alt="">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="col-4">
                <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obprod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h2><?php echo e($obprod->name); ?></h2>
                    <h2>Цена: <?php echo e($obprod->price); ?>рублей.</h2>
                    <?php if($obprod->count>0): ?>
                        <a href="<?php echo e(url('/basket')); ?>/<?php echo e($obprod->id); ?>" class="btn btn-primary">В карзину</a>
                    <?php else: ?>
                        <a class="btn btn-primary disabled" href="">НЕТ В НАЛИЧИИ</a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <h3>Характеристики</h3>
                <p>Дата производства: <?php echo e($obprod->year_of_production); ?></p>
                <p>Страна производитель: <?php echo e($obprod->country_of_origin); ?></p>
                <p>Модель:<?php echo e($obprod->model); ?></p>
                <?php if($obprod->count>0): ?>
                    <p>В наличии: <?php echo e($obprod->count); ?></p>
                <?php else: ?>
                    <p>Нет в наличии</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/zytiurfp/kbvbhhv-m1/resources/views/oneprod.blade.php ENDPATH**/ ?>