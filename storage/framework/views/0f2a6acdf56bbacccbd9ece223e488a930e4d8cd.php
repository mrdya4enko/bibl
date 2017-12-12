<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Книги<h2>
    <?php if(count($books)>0): ?>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6 well">
                <h3><a href="/admin/books/<?php echo e($book->id); ?>"><?php echo e($book->books_name); ?></a></h3>
                <h5>Год издания: <?php echo e($book->books_year); ?></h5>
                <h5>Автор: 
                    <?php $__currentLoopData = $book->authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($author->author_name); ?> <?php echo e($author->author_surname); ?> <?php echo e($author->author_middlename); ?> ,
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </h5>
                <h5>Направление: <?php echo e($book->heading->heading_name); ?></h5>
                <h5>Язык: <?php echo e($book->language->languages_name); ?></h5>
                <h5>Издательство: <?php echo e($book->phouse->phouses_name); ?></h5>
                <h5>Количество страниц: <?php echo e($book->books_pages); ?></h5>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <h1>not found</h1>   
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app_admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>