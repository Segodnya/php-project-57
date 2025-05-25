<!DOCTYPE html>
<html lang="en">
    <?php if (isset($component)) { $__componentOriginal53826f15753f7db508cdf6bc69586d75 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53826f15753f7db508cdf6bc69586d75 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.head-task-manager','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('head-task-manager'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-task-manager','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-task-manager'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
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

            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <?php echo $__env->yieldContent('filter'); ?>

            <?php echo $__env->yieldContent('content'); ?>
        </div> 
    </body>
</html><?php /**PATH /Users/segodnya/Desktop/hexlet/php-project-57/resources/views/layouts/main.blade.php ENDPATH**/ ?>