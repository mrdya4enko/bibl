<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<html class=" js" lang="en">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Библиотека КГТУ</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <link href="<?php echo e(asset('css/bundle.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/buttons.css')); ?>" rel="stylesheet">
    
    
    <script type="text/javascript" src="<?php echo e(asset('js/p.js')); ?>"></script>

</head>
<body>
<header>
    <p>
        <a href="http://kstu.com/">
            <span class="b-logo_me">Библиотека КГТУ</span> </a>
    </p>
    <?php if(Route::has('login')): ?>

        <ul>
            <?php if(auth()->guard()->check()): ?>
                <li>
                    <a href="<?php echo e(url('/home')); ?>">Home</a>
                </li>
                <?php else: ?>
                    <li>
                        <a href="<?php echo e(route('login')); ?>">Login</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('register')); ?>">Register</a>
                    </li>
                    <?php endif; ?>
        </ul>
    <?php endif; ?>
</header>

<?php echo $__env->yieldContent('content'); ?>

</div>

<!-- Scripts -->
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>