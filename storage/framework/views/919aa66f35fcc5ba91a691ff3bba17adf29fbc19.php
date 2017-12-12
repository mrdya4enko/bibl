
<?php $__env->startSection('content'); ?>
<h3>Читатель  ----- <?php echo e($checkout->user->name); ?> </h3> 

<h3>Дата выдачи книги ----- <?php echo e($checkout->created_at); ?></h3>
<h3>Дата возврата книги ----- <?php echo e($checkout->checkout_vozvrat); ?></h3>
<h3>Выдана книга  ----- <?php echo e($checkout->checkout_user); ?></h3>
<br>
<div class="col-sm-1">
            <a class="btn btn-block btn-default" href="<?php echo e(url('admin/checkout')); ?>">Назад</a>
        </div>
<div class="col-sm-1">
<a href="/admin/checkouts/<?php echo e($checkout->id); ?>/edit" class ="btn btn-default">Изменить</a>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app_admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>