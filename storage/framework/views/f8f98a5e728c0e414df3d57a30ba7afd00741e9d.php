<?php $__env->startSection('content'); ?>
<div class="container">
<?php if(count($book)>0): ?>
<div class="row">
    <div class="col-sm-4">
        <img style="width:80%"src="../../public/storage/cover_images/<?php echo e($book->books_image); ?>">
    </div>
    <div class="col-sm-7">
        <h2><?php echo e($book->books_name); ?><h2>
        <h4>Автор:
            <?php $__currentLoopData = $book->authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($loop->first==FALSE): ?>
                    , 
                <?php endif; ?>
                <a href="<?php echo e(url('/authors/'.$author->id)); ?>"><?php echo e($author->author_name); ?> <?php echo e($author->author_surname); ?> <?php echo e($author->author_middlename); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <h4>
        <h4>Год издания: <?php echo e($book->books_year); ?></h4>
        <h4>Направление: <a href="<?php echo e(url('/kategory/'.$book->heading->id)); ?>"><?php echo e($book->heading->heading_name); ?></a></h4>
        <h4>Язык: <?php echo e($book->language->languages_name); ?></h4>
        <h4>Издательство: <?php echo e($book->phouse->phouses_name); ?></h4>
        <h4>Количество страниц: <?php echo e($book->books_pages); ?></h4>
        <?php if(Auth::user()->hasRole('Admin')): ?>
            <h4>Количество экземпляров: <a href="<?php echo e(url('/book_items/'.$book->id)); ?>"><?php echo e(count($book->book_items)); ?></a></h4>
        <?php endif; ?>
        <h4>Описание:<br><br> <?php echo e($book->books_descrip); ?></h4>
    </div>
</div>
<?php if(Auth::user()->hasRole('Admin')): ?>
<div class="col-sm-3">
    <div class="col-sm-6 ">
        <a class="btn btn-block btn-default" href="<?php echo e(url('/books/'.$book->id.'/edit')); ?>">Edit</a>
    </div>
    <div class="col-sm-6 ">
        <form method="POST" action="<?php echo e(url('/books/'.$book->id)); ?>"> 
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('DELETE')); ?>

            <button class="btn btn-block btn-default">Delete</button>
        </form>
    </div>
</div>
<?php endif; ?>
<?php else: ?>
    <h1>not found</h1>   
<?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app_admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>