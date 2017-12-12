<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Книги "<?php echo e($h); ?>"<h2>
    <?php if(count($books)>0): ?>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6 well">
                <div class="col-sm-4">
                <?php if($src==1): ?>
                    <img style="width:100%" src="../storage/cover_images/<?php echo e($book->books_image); ?>">
                <?php else: ?>
                <img style="width:100%"src="../../../public/storage/cover_images/<?php echo e($book->books_image); ?>">
                <?php endif; ?>
                </div>
                <div class="col-sm-8">
                <h4><a href="<?php echo e(url('/admin/books/'.$book->id)); ?>"><?php echo e($book->books_name); ?></a></h4>
                <h5>Год издания: <?php echo e($book->books_year); ?></h5>
                <h5>Автор: 
                    <?php $__currentLoopData = $book->authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($loop->first==FALSE): ?>
                            ,
                        <?php endif; ?>
                        <a href="<?php echo e(url('/admin/authors/'.$author->id)); ?>"><?php echo e($author->author_name); ?> <?php echo e($author->author_surname); ?> <?php echo e($author->author_middlename); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </h5>
                <h5>Направление: <a href="<?php echo e(url('/admin/kategory/'.$book->heading->id)); ?>"><?php echo e($book->heading->heading_name); ?></a></h5>
                <h5>Язык: <?php echo e($book->language->languages_name); ?></h5>
                <h5>Издательство: <?php echo e($book->phouse->phouses_name); ?></h5>
                <h5>Количество страниц: <?php echo e($book->books_pages); ?></h5>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <h1>not found</h1>   
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app_admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>