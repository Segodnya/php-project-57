<!DOCTYPE html>
<html lang="en">
    <?php if (isset($component)) { $__componentOriginal53826f15753f7db508cdf6bc69586d75 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53826f15753f7db508cdf6bc69586d75 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.head-task-manager','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('head-task-manager'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53826f15753f7db508cdf6bc69586d75)): ?>
<?php $attributes = $__attributesOriginal53826f15753f7db508cdf6bc69586d75; ?>
<?php unset($__attributesOriginal53826f15753f7db508cdf6bc69586d75); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53826f15753f7db508cdf6bc69586d75)): ?>
<?php $component = $__componentOriginal53826f15753f7db508cdf6bc69586d75; ?>
<?php unset($__componentOriginal53826f15753f7db508cdf6bc69586d75); ?>
<?php endif; ?>
    <body>
        <?php if (isset($component)) { $__componentOriginal38ae996627b5dc1de10a2c61ff9593ca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38ae996627b5dc1de10a2c61ff9593ca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-task-manager','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-task-manager'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal38ae996627b5dc1de10a2c61ff9593ca)): ?>
<?php $attributes = $__attributesOriginal38ae996627b5dc1de10a2c61ff9593ca; ?>
<?php unset($__attributesOriginal38ae996627b5dc1de10a2c61ff9593ca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal38ae996627b5dc1de10a2c61ff9593ca)): ?>
<?php $component = $__componentOriginal38ae996627b5dc1de10a2c61ff9593ca; ?>
<?php unset($__componentOriginal38ae996627b5dc1de10a2c61ff9593ca); ?>
<?php endif; ?>
        <div class="container">

            <?php echo $__env->yieldContent('title'); ?>

            <?php echo $__env->make('flash::message', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            
            <?php echo $__env->yieldContent('filter'); ?>

            <?php echo $__env->yieldContent('content'); ?>
        </div> 
        <?php echo $__env->yieldPushContent('scripts'); ?>
    </body>
</html><?php /**PATH /Users/segodnya/Desktop/hexlet/php-project-57/resources/views/layouts/main.blade.php ENDPATH**/ ?>