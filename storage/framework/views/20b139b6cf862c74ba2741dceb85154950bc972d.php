<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Ready Bootstrap Dashboard</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css' )); ?>">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="<?php echo e(asset('css/ready.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/demo.css')); ?>">
        <?php echo $__env->yieldContent('assets-top'); ?>
    </head>
    <body>
        <div class="wrapper">
            <div class="main-header">
                <div class="logo-header">
                    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
                </div>
                <nav class="navbar navbar-header navbar-expand-lg">
                    <div class="container-fluid">
                        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                            <li class="nav-item dropdown hidden-caret">
                                <ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown">
                                    <li>
                                        <div class="notif-center">
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="<?php echo e(asset('img/profile2.jpg' )); ?>" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Reza send messages to you
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="<?php echo e(asset('img/profile.jpg' )); ?>" alt="user-img" width="36" class="img-circle"><span><?php echo e(Auth::user()->name); ?></span></span> </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li>
                                        <div class="user-box">
                                            <div class="u-img"><img src="<?php echo e(asset('img/profile.jpg' )); ?>" alt="user"></div>
                                            <div class="u-text">
                                                <h4><?php echo e(Auth::user()->name); ?></h4>
                                                <p class="text-muted"><?php echo e(Auth::user()->email); ?></p></div>
                                        </div>
                                    </li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?><i class="fa fa-power-off"></i></a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>

                                </ul>
                                <!-- /.dropdown-user -->
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="sidebar">
                <div class="scrollbar-inner sidebar-wrapper">
                    <div class="user">
                        <div class="photo">
                            <img src="<?php echo e(asset('img/profile.jpg' )); ?>">
                        </div>
                        <div class="info">
                            <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    <?php echo e(Auth::user()->name); ?>

                                </span>
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
            <div class="main-panel">
                <div class="content">
                    <div class="container-fluid">
                       <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
</body>
<script src="<?php echo e(asset('js/core/jquery.3.2.1.min.js' )); ?>"></script>
<script src="<?php echo e(asset('js/core/bootstrap.min.js' )); ?>"></script>
<?php echo $__env->yieldContent('assets-bottom'); ?>
<?php echo $__env->yieldContent('card'); ?>
<script src="<?php echo e(asset('js/ready.min.js' )); ?>"></script>
</html>