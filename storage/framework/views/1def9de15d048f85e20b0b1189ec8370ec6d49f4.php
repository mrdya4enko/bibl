<?php $__env->startSection('content'); ?>
<div class="container">
    <form action="<?php echo e(url('admin/add_janr')); ?>" method="POST" class="form-horizontal">
    <?php echo e(csrf_field()); ?>

    <div class="form-group">
        <label class="control-label col-sm-2" for="name">Название жанра:</label>
        <div class="col-sm-8">
            <input type="name" class="form-control" id="name">
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-default">Сохранить</button>
        </div>
    </div>
    </form> 
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app_admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>