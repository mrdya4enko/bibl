
<?php $__env->startSection('content'); ?>
<h1> Все выдачи</h2>
<table class="table table-bordered">
<thead>
                    <tr>
                        <th><h4>Id</h4></th>
                        <th><h4>Читатель</h4></th>
                        <th><h5>Дата выдачи</h4></th>
                        <th><h4>Книга</h4></th>
                        <th><h4>Сотрудник</h4></th>
                    </tr>
                    </thead> 
                    <tbody>  
<?php if(count($checkouts)>1): ?>
<?php $__currentLoopData = $checkouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $checkout): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <tr>
                                <td><h4><?php echo e($checkout->id); ?></h4></td>
                                <td><h4><?php echo e($checkout->user->name); ?></h4></td>
                                <td><h4><?php echo e($checkout->created_at); ?></h4></td>
                                <td><h4><?php echo e($checkout->book_item->id); ?></h4></td>
                                <td><h4><?php echo e($checkout->user->name); ?></h4></td>
                            </tr>
                              
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</tbody>
                </table>    
<?php else: ?>
<p>No checkouts found</p>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app_admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>