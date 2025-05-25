<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid ">
            <div class="container">
                <div class="navbar-collapse d-flex justify-content-between" id="navbarNav">
                    <a class="navbar-brand" href="<?php echo e(route('main')); ?>"><?php echo e(__('messages.Task Manager')); ?></a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('tasks.index')); ?>"><?php echo e(__('messages.Task')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('task_statuses.index')); ?>"><?php echo e(__('messages.Statuses')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('labels.index')); ?>"><?php echo e(__('messages.Label')); ?></a>
                        </li>
                    </ul>
                    <?php if(Route::has('login')): ?>
                        <?php if(auth()->guard()->check()): ?>
                            <form method="POST" class="flex items-center lg:order-2" action="<?php echo e(route('logout')); ?>">
                                <p style="margin-bottom: -; margin-bottom: 0px; margin-right: 6px;">
                                    <?php echo e(Auth::user()->name); ?>

                                </p> 
                                <?php echo csrf_field(); ?>
                                <a href="route('logout')"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();"
                                    class="btn btn-primary">
                                        <?php echo e(__('messages.Log Out')); ?>

                                </a>
                            </form>
                        <?php else: ?>
                            <div>
                                <a class="btn btn-primary" href="<?php echo e(route('login')); ?>" role="button"><?php echo e(__('messages.Login')); ?></a>
                                <a class="btn btn-primary" href="<?php echo e(route('register')); ?>" role="button"><?php echo e(__('messages.Registration')); ?></a>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
</header><?php /**PATH /Users/segodnya/Desktop/hexlet/php-project-57/resources/views/components/nav-task-manager.blade.php ENDPATH**/ ?>