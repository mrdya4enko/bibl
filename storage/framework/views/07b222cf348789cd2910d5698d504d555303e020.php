<?php $__env->startSection('content'); ?>

    <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">x</span></button>
            <h4>Success!</h4>
            <p><?php echo e(session('success')); ?></p>
        </div>
    <?php elseif(session('fail') or !$errors->isEmpty()): ?>
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">x</span></button>
            <h4>Error!</h4>
            <p><?php echo e(session('fail')); ?></p>
        </div>
    <?php endif; ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">Возврат книги</h4>
        </div>
        <div class="panel-body">
            <table class="table">
                <tr>
                    <td>Дата выдачи</td>
                    <td>Дата возвращения</td>
                    <td>Читатель</td>
                    <td>Книга</td>
                    <td>Вернуть</td>
                </tr>

            <?php $__currentLoopData = $extraditions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extradition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($extradition->created_at); ?></td>
                    <td><?php echo e($extradition->checkout_vozvrat); ?></td>
                    <td><?php echo e($extradition->user->name); ?></td>
                    <td><?php echo e($extradition->book->book->books_name); ?></td>
                    <td><a href="<?php echo e(url('admin/extradition/book', $extradition)); ?>" class="btn btn-default">Вернуть</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app_admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>