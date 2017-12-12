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
    <link href="css/bundle.css" rel="stylesheet">
    <link href="css/buttons.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/p.js"></script>
       
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
                <h2>Математика</h2>
                <div class="carouselViewport" style="height: 260px;">
                    <div style="position: relative; overflow: hidden; height: 260px;">
                        <ol class="books carousel" style="position: absolute;">
                            <li style="margin-left: 7px; margin-right: 7px;">
                                <a href="#/coaching-tools-and-techniques-for-managers-ebook">
                                <h3>Coaching Tools and Techniques for Managers</h3><img alt="" src="images/coaching-tools-and-techniques-for-managers.jpg"></a>
                                <form action="#/coaching-tools-and-techniques-for-managers-ebook">
                                    <button type="submit">Download!</button>
                                </form>
                            </li>
                            <li style="margin-left: 7px; margin-right: 7px;">
                                <a href="#/wellbeing-at-work-ebook">
                                <h3>Wellbeing at Work</h3><img alt="" src="images/wellbeing-at-work.jpg"></a>
                                <form action="#/wellbeing-at-work-ebook">
                                    <button type="submit">Download!</button>
                                </form>
                            </li>
                            <li style="margin-left: 7px; margin-right: 7px;">
                                <a href="#/maintaining-career-fitness-ebook">
                                <h3>Maintaining Career Fitness</h3><img alt="" src="images/maintaining-career-fitness.jpg"></a>
                                <form action="#/maintaining-career-fitness-ebook">
                                    <button type="submit">Download!</button>
                                </form>
                            </li>
                            <li style="margin-left: 7px; margin-right: 7px;">
                                <a href="#/an-insiders-guide-website-sourcing-made-easy-ebook">
                                <h3>An Insider’s Guide: Website Sourcing Made Easy!</h3><img alt="" src="images/an-insiders-guide-website-sourcing-made-easy.jpg"></a>
                                <form action="#/an-insiders-guide-website-sourcing-made-easy-ebook">
                                    <button type="submit">Download!</button>
                                </form>
                            </li>
                            <li style="margin-left: 7px; margin-right: 7px;">
                                <a href="#/strategic-workforce-management-made-easy-ebook">
                                <h3>Strategic Workforce Management Made Easy</h3><img alt="" src="images/strategic-workforce-management-made-easy.jpg"></a>
                                <form action="#/strategic-workforce-management-made-easy-ebook">
                                    <button type="submit">Download!</button>
                                </form>
                            </li>
                            <li style="margin-left: 7px; margin-right: 7px;">
                                <a href="#/linkedin-40-fast-facts-and-fixes-ebook">
                                <h3>LinkedIn: 40 fast facts and fixes</h3><img alt="" src="images/linkedin-40-fast-facts-and-fixes.jpg"></a>
                                <form action="#/linkedin-40-fast-facts-and-fixes-ebook">
                                    <button type="submit">Download!</button>
                                </form>
                            </li>
                            <li style="margin-left: 7px; margin-right: 7px;">
                                <a href="#/seriously-funny-ebook">
                                <h3>Seriously Funny</h3><img alt="" src="images/seriously-funny.jpg"></a>
                                <form action="#/seriously-funny-ebook">
                                    <button type="submit">Download!</button>
                                </form>
                            </li>
                            <li style="margin-left: 7px; margin-right: 7px;">
                                <a href="#/organisational-myths-ebook">
                                <h3>Organisational Myths</h3><img alt="" src="images/organisational-myths.jpg"></a>
                                <form action="#/organisational-myths-ebook">
                                    <button type="submit">Download!</button>
                                </form>
                            </li>
                            <li style="margin-left: 7px; margin-right: 7px;">
                                <a href="#/internet-marketing-strategies-for-your-business-ebook">
                                <h3>Internet Marketing Strategies For Your Business</h3><img alt="" src="images/internet-marketing-strategies-for-your-business.jpg"></a>
                                <form action="#/internet-marketing-strategies-for-your-business-ebook">
                                    <button type="submit">Download!</button>
                                </form>
                            </li>
                            <li style="margin-left: 7px; margin-right: 7px;">
                                <a href="#/the-way-to-revolutionary-leadership-ebook">
                                <h3>The way to Revolutionary Leadership</h3><img alt="" src="images/the-way-to-revolutionary-leadership.jpg"></a>
                                <form action="#/the-way-to-revolutionary-leadership-ebook">
                                    <button type="submit">Download!</button>
                                </form>
                            </li>
                            <li style="margin-left: 7px; margin-right: 7px;">
                                <a href="#/70-ways-to-thrive-at-work-ebook">
                                <h3>70 Ways to Thrive at Work</h3><img alt="" src="images/70-ways-to-thrive-at-work.jpg"></a>
                                <form action="#/70-ways-to-thrive-at-work-ebook">
                                    <button type="submit">Download!</button>
                                </form>
                            </li>
                            <li style="margin-left: 7px; margin-right: 7px;">
                                <a href="#/business-intelligence-for-business-analysts-ebook">
                                <h3>Business Intelligence for Business Analysts</h3><img alt="" src="images/business-intelligence-for-business-analysts.jpg"></a>
                                <form action="#/business-intelligence-for-business-analysts-ebook">
                                    <button type="submit">Download!</button>
                                </form>
                            </li>
                            <li style="margin-left: 7px; margin-right: 7px;">
                                <a href="#/agile-concepts-ebook">
                                <h3>Agile Concepts</h3><img alt="" src="images/agile-concepts.jpg"></a>
                                <form action="#/agile-concepts-ebook">
                                    <button type="submit">Download!</button>
                                </form>
                            </li>
                            <li style="margin-left: 7px; margin-right: 7px;">
                                <a href="#/compassionate-coaching-in-the-corporate-world-ebook">
                                <h3>Compassionate Coaching in the Corporate World</h3><img alt="" src="images/compassionate-coaching-in-the-corporate-world.jpg"></a>
                                <form action="#/compassionate-coaching-in-the-corporate-world-ebook">
                                    <button type="submit">Download!</button>
                                </form>
                            </li>
                            <li style="margin-left: 7px; margin-right: 7px;">
                                <a href="#/the-7-steps-to-frontier-leadership-ebook">
                                <h3>The 7 Steps to Frontier Leadership</h3><img alt="" src="images/the-7-steps-to-frontier-leadership.jpg"></a>
                                <form action="#/the-7-steps-to-frontier-leadership-ebook">
                                    <button type="submit">Download!</button>
                                </form>
                            </li>
                            <li style="margin-left: 7px; margin-right: 7px;">
                                <a href="#/systems-analysis-and-program-development-ebook">
                                <h3>Systems Analysis and Program Development</h3><img alt="" src="images/systems-analysis-and-program-development.jpg"></a>
                                <form action="#/systems-analysis-and-program-development-ebook">
                                    <button type="submit">Download!</button>
                                </form>
                            </li>
                        </ol>
                    </div>
                </div>
            </section>

           
        </div>
    </div>

            </div>
        </div>
    </body>
</html>
