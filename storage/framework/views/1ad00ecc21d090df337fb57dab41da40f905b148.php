<?php $__env->startSection('content'); ?>
<div class="wrapper">
    <nav id="search">
        <form action="#/search">
            <label for="search_input">Воспользуйтесь поиском</label>
            <input autocomplete="off" class="acInput" data-autocomplete="/services/en/autocomplete" id="search_input" name="q" placeholder="Поиск книги" required="" type="search">
            <button type="submit">Найти</button>
        </form>
    </nav>
    <nav id="categories">
        <ul>
            <li>
                <a href="">Разделы</a> <span class="toggle"></span>
                <ul>
                    <?php $__currentLoopData = $headings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $heading): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(url('heading', $heading->id)); ?>"><?php echo e($heading->heading_name); ?></a> <span class="toggle"></span>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>
            </li>
        </ul>
        </li>
        </ul>
    </nav>


    <section class="featured">
        <h2><?php echo e($oneheding->heading_name); ?></h2>
        <div class="carouselViewport" style="height: 260px;">
            <div style="position: relative; overflow: hidden; height: 260px;">
                <ol class="books carousel" style="position: absolute;">
                    <?php if(count($oneheding->books )): ?>
                    <?php $__currentLoopData = $oneheding->books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li style="margin-left: 7px; margin-right: 7px;">
                            <a href="<?php echo e(url('book', $book->id)); ?>">
                                <h3><?php echo e($book->books_name); ?></h3><img alt="" src="images/<?php echo e($book->books_image); ?>"></a>
                            <form action="<?php echo e($book->id); ?>">
                                <button type="submit">Download!</button>
                            </form>
                        </li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    
                        
                            
                        
                            
                        
                    

                </ol>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.library', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>