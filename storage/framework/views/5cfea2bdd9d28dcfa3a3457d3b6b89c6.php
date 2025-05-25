<?php $__env->startSection('content'); ?>
    <h1 class="mt-5 mb-5"><?php echo app('translator')->get('messages.Greetings from Hexlet!'); ?></h1>
    <div>
      <h2><?php echo app('translator')->get('messages.This is a simple task manager on Laravel'); ?></h2>
      <a class="btn btn-primary" href="<?php echo e(route('tasks.index')); ?>" role="button"><?php echo app('translator')->get('messages.Push me'); ?></a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/segodnya/Desktop/hexlet/php-project-57/resources/views/main.blade.php ENDPATH**/ ?>