<?php $__env->startSection('content'); ?>
<div class="container">
<div class="col-sm-4">
<div class="panel-group" id="accordion">
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
      Добавить автора</a>
    </h4>
  </div>
  <div id="collapse1" class="panel-collapse collapse in">
    <div class="panel-body">
    <form action="<?php echo e(url('admin/author')); ?>" method="POST" >
    <!--<?php echo e(csrf_field()); ?>-->
    <div class="form-group">
        <label for="name">Имя:</label>
            <input type="name" class="form-control" id="name">
    </div>
    <div class="form-group">
        <label for="surname">Фамилие:</label>
            <input type="name" class="form-control" id="surname">
    </div>
    <div class="form-group">
        <label for="middlename">Отчество:</label>
            <input type="name" class="form-control" id="middlename">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Сохранить</button>
    </div>
    </form>
    </div>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
      Добавить направление</a>
    </h4>
  </div>
  <div id="collapse2" class="panel-collapse collapse">
    <div class="panel-body">
    <form>
    <?php echo e(csrf_field()); ?>

    <div class="form-group">
        <label for="name">Направление:</label>
            <input type="name" class="form-control" id="name">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Сохранить</button>
    </div>
    </form>
    </div>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
      Добавить язык</a>
    </h4>
  </div>
  <div id="collapse3" class="panel-collapse collapse">
    <div class="panel-body">
    <form>
    <?php echo e(csrf_field()); ?>

    <div class="form-group">
        <label for="name">Язык:</label>
            <input type="name" class="form-control" id="name">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Сохранить</button>
    </div>
    </form>
    </div>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
      Добавить издательство</a>
    </h4>
  </div>
  <div id="collapse4" class="panel-collapse collapse">
    <div class="panel-body">
    <form>
    <?php echo e(csrf_field()); ?>

    <div class="form-group">
        <label for="name">Название:</label>
            <input type="name" class="form-control" id="name">
    </div>
    <div class="form-group">
        <label for="adress">Адрес:</label>
            <input type="name" class="form-control" id="adress">
    </div>
    <div class="form-group">
        <label for="tel">Телефон:</label>
            <input type="name" class="form-control" id="tel">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Сохранить</button>
    </div>
    </form>
    </div>
  </div>
</div>
</div>
</div>
<div class="col-sm-8">
<div class="panel panel-default">
<div class="panel-heading">
    <h4 class="panel-title">Добавить книгу</h4>
</div>
<div class="panel-body">
    <form class="form-horizontal">   
    <div class="form-group">
        <label class="control-label col-sm-4" for="name">Название:</label>
        <div class="col-sm-7">
             <input type="text" class="form-control" id="name">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="janr">Направление:</label>
        <div class="col-sm-7">
            <input list="janr" class="form-control">
            <datalist id="janr">
            </datalist>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="lang">Язык:</label>
        <div class="col-sm-7">
            <input list="lang" class="form-control">
                <datalist id="lang">
                </datalist>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="page">Количество страниц:</label>
        <div class="col-sm-7">
             <input type="text" class="form-control" id="page">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="izdat">Издательство</label>
        <div class="col-sm-7">
            <input list="izdat" class="form-control">
                <datalist id="izdat">
                </datalist>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="year">Год издания:</label>
        <div class="col-sm-7">
             <input type="text" class="form-control" id="year">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="descrip">Описание:</label>
        <div class="col-sm-7">
            <textarea name="message" rows="3" cols="30" class="form-control" id="descrip"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="fileToUpload">Загрузить обложку:</label>
        <div class="col-sm-7">
            <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-4"></div>
        <div class="col-sm-7">
            <button type="submit" class="btn btn-default">Сохранить</button>
        </div>
    </div>
</form>
</div>
</div>
</div> 
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app_admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>