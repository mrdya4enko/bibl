
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
    <form method="POST" action="<?php echo e(url('admin/create_author')); ?>">
    <?php echo e(csrf_field()); ?>

    <div class="form-group">
        <label for="name">Имя:</label>
            <input type="name" class="form-control" name="name" id="name">
    </div>
    <div class="form-group">
        <label for="surname">Фамилие:</label>
            <input type="name" class="form-control" name="surname" id="surname">
    </div>
    <div class="form-group">
        <label for="middlename">Отчество:</label>
            <input type="name" class="form-control" name="middlename" id="middlename">
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
    <form method="POST" action="<?php echo e(url('admin/create_heading')); ?>">
    <?php echo e(csrf_field()); ?>

    <div class="form-group">
        <label for="heading_name">Направление:</label>
            <input type="text" class="form-control" name="heading_name" id="heading_name">
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
    <form method="POST" action="<?php echo e(url('admin/create_language')); ?>">
    <?php echo e(csrf_field()); ?>

    <div class="form-group">
        <label for="name">Язык:</label>
            <input type="name" class="form-control" name="name" id="name">
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
    <form method="POST" action="<?php echo e(url('admin/create_phouse')); ?>">
    <?php echo e(csrf_field()); ?>

    <div class="form-group">
        <label for="name">Название:</label>
            <input type="name" class="form-control" name="name" id="name">
    </div>
    <div class="form-group">
        <label for="adress">Адрес:</label>
            <input type="name" class="form-control" name="adress" id="adress">
    </div>
    <div class="form-group">
        <label for="tel">Телефон:</label>
            <input type="name" class="form-control" name="tel" id="tel">
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
    <form class="form-horizontal" method="POST" action="<?php echo e(url('admin/create_book')); ?>" enctype="multipart/form-data"> 
    <?php echo e(csrf_field()); ?>  
    <div class="form-group">
        <label class="control-label col-sm-4" for="name">Название:</label>
        <div class="col-sm-7">
             <input type="text" class="form-control" name="name" id="name">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="heading">Направление:</label>
        <div class="col-sm-7">
            <select name="heading" class="form-control">
            <?php $__currentLoopData = $headings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $heading): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo $heading->id; ?>"><?php echo $heading->heading_name; ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="lang">Язык:</label>
        <div class="col-sm-7">
            <select name="lang" class="form-control">
                <?php $__currentLoopData = $lang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo $lan->id; ?>"><?php echo $lan->languages_name; ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="pages">Количество страниц:</label>
        <div class="col-sm-7">
             <input type="text" class="form-control" name="pages" id="pages">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="phouse">Издательство</label>
        <div class="col-sm-7">
            <select name="phouse" class="form-control">
                <?php $__currentLoopData = $phouses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phouse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo $phouse->id; ?>"><?php echo $phouse->phouses_name; ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="year">Год издания:</label>
        <div class="col-sm-7">
             <input type="text" class="form-control" name="year" id="year">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="descrip">Описание:</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="descrip" id="descrip">
        </div>
    </div>
    <div class="form-group"> 
        <label class="control-label col-sm-4" for="fileToUpload">Загрузить обложку:</label>
        <div class="col-sm-7">
            <input type="file" name="cover_image" id="cover_image">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="exemplar">Количество экземпляров:</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="exemplar" id="exemplar">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-4"></div>
        <div class="col-sm-7">
            <button type="submit" class="btn btn-default">Далее</button>
        </div>
    </div>
</form>
</div>
</div>
</div> 
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app_admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>