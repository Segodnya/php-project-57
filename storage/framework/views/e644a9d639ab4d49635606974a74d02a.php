<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['action', 'method' => 'POST']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['action', 'method' => 'POST']); ?>
<?php foreach (array_filter((['action', 'method' => 'POST']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<form action="<?php echo e($action); ?>" method="<?php echo e($method === 'GET' ? 'GET' : 'POST'); ?>" <?php echo e($attributes->merge(['class' => 'form-container'])); ?>>
    <?php echo csrf_field(); ?>
    <?php if($method !== 'GET' && $method !== 'POST'): ?>
        <?php echo method_field($method); ?>
    <?php endif; ?>
    
    <?php echo e($slot); ?>

</form> <?php /**PATH /Users/segodnya/Desktop/hexlet/php-project-57/resources/views/components/form-container.blade.php ENDPATH**/ ?>