<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Заголовок</div>

                <div class="panel-body">
                     <div class="form-group">
                        <label>Имя</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="form-group">
                        <label>Фамилие</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="form-group">
                        <label>Отчество</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="form-group">
                        <button type="submit" class="btn btn-default">Сохранить</button>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>