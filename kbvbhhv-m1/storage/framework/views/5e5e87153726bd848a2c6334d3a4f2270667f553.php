

<?php $__env->startSection('content'); ?>
<div class="container">

<div class="row justify-content-center">
    <div class="col-mb-8">
        <div class="card">
            <div class="card-header">
                <h2 class="d-flex justify-content-center">Создание </h2>

            </div>
            <div class="card-body">
                <form method="post" action="<?php echo e(route('createcat')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="row mb-3">
                        <label for="name" class="col-form-label col-mb-4 text-mb-end">Название </label>
                        <div class="col-mb-6">
                            <input  class="col-form-control" id="name" type="text" name="name" required autofocus>
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-mb-6 offest-mb-4">
                            <button type="sumbit" class="btn btn-primary">
                                <?php echo e(__('Создать категорию')); ?>

                            </button>
                            </form>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/zytiurfp/kbvbhhv-m1/resources/views/createcat.blade.php ENDPATH**/ ?>