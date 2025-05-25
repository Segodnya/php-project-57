<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['hover' => false]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['hover' => false]); ?>
<?php foreach (array_filter((['hover' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div <?php echo e($attributes->merge(['class' => $hover ? 'hover-card' : 'card-container'])); ?>>
    <?php echo e($slot); ?>

</div> <?php /**PATH /Users/segodnya/Desktop/hexlet/php-project-57/resources/views/components/card.blade.php ENDPATH**/ ?>