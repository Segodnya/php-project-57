<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['type' => 'submit']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['type' => 'submit']); ?>
<?php foreach (array_filter((['type' => 'submit']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<button type="<?php echo e($type); ?>" <?php echo e($attributes->merge(['class' => 'btn-primary'])); ?>>
    <?php echo e($slot); ?>

</button><?php /**PATH /Users/segodnya/Desktop/hexlet/php-project-57/resources/views/components/primary-button.blade.php ENDPATH**/ ?>