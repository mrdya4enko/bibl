<?php $__env->startSection('content'); ?>
<div class="container">
<div class="col-sm-300">
<div class="panel-group" id="accordion">
<div class="panel panel-default">
<div class="col-sm-300">
<div class="panel panel-default">
<div class="panel-heading">
    <h4 class="panel-title">Выдача книги</h4>
</div>
<div class="panel-body">
    <form class="form-horizontal" method="POST" action="<?php echo e(url('admin/checkout')); ?>" enctype="multipart/form-data"> 
    <?php echo e(csrf_field()); ?>  
    <div class="form-group">
        <label class="control-label col-sm-2" for="name">Код выдачи:</label>
        <div class="col-sm-10">
             <input type="text" class="form-control" name="id" id="id">
        </div>
        </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="name">Читатель:</label>
        <div class="col-sm-10">
             <input type="text" class="form-control" name="reader" id="reader">
        </div>
        </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="heading">Книга:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="book_item" id="book_item">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="vozvrat">Дата возврата:</label>
        <div class="col-sm-10">
             <input type="text" class="form-control" name="vozvrat" id="vozvrat">
        </div>
        </div>
    <div class="form-group">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-default">Далее</button>
        </div>
    </div>
</form>
</div>
</div>
</div> 
</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.app_admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>