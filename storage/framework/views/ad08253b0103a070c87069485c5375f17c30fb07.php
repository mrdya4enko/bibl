<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
                <form class="form-horizontal" method="GET" action="<?php echo e(url('/books')); ?>">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="search">Найти книгу</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="search">
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-default">Поиск</button>
                        </div>
                    </div>               
                </form>
            <div class="col-sm-4">
                <a class="btn btn-block btn-default" href="<?php echo e(url('admin/create')); ?>">Добавление книги</a>
            </div>
            <div class="col-sm-4">
            <a class="btn btn-block btn-default" href="<?php echo e(url('admin/checkout')); ?>">Выдача книги</a>
        </div>
            <div class="col-sm-4">
                <a class="btn btn-block btn-default" href="#">Возврат книги</a>
            </div>
            <br><br><br>
            <div class="col-sm-4">
            <a class="btn btn-block btn-default" href="<?php echo e(url('admin/checkouts')); ?>">Все выдачи</a>
            </div>
        </div> 
    </div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app_admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>