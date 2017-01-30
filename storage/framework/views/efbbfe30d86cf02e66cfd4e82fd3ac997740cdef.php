<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <?php /*<a class="navbar-brand" href="<?php echo e(url('/')); ?>">Laravel</a>*/ ?>
            <div class="pull-left"><img src="images/New_Cassel.png" style="height: 48px;"></div>
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                &nbsp New Cassel Work Order System
            </a>

        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <?php if(Auth::check()): ?>
                    <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="<?php echo e(url('/home')); ?>">Home</a></li>
                <?php /* Menu for Users with Administration Role Only */ ?>
                <?php if (\Entrust::hasRole(('admin'))) : ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-btn fa-fw fa-cogs"></i>Administration<span class="caret"></span></a>
                    <ul class="dropdown-menu multi level" role="menu">
                        <li><a href="<?php echo e(url('/users')); ?>"><i class="fa fa-btn fa-fw fa-user"></i>Users</a></li>
                        <li><a href="<?php echo e(url('/roles')); ?>"><i class="fa fa-btn fa-fw fa-users"></i>Roles</a></li>
                        <?php /*<li class="divider"></li>*/ ?>
                        <?php /*<li><a href="<?php echo e(url('/files')); ?>"><i class="fa fa-btn fa-fw fa-file"></i>Files</a></li>*/ ?>
                    </ul>
                </li>
                <?php endif; // Entrust::hasRole ?>
            </ul>
            <?php endif; ?>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <?php if(Auth::guest()): ?>
                    <?php /*<li><a href="<?php echo e(url('/login')); ?>"><i class="fa fa-btn fa-lg fa-fw fa-sign-in"></i>Login</a></li>
               <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                    <li><a href="<?php echo e(url('/register')); ?>">Register</a></li> */ ?>
                <?php else: ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo e(Auth::user()->name); ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-fw fa-sign-out"></i>Logout</a></li>
                            <li><a href="<?php echo e(url('/change-password')); ?>"><i class="fa fa-btn fa-fw fa-lock"></i>Change Password</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo e(url('/help')); ?>"><i class="fa fa-btn fa-fw fa-question-circle"></i>Help</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
