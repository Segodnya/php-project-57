<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['action', 'method' => 'POST']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['action', 'method' => 'POST']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<form action="<?php echo e($action); ?>" method="<?php echo e($method === 'GET' ? 'GET' : 'POST'); ?>" <?php echo e($attributes->merge(['class' => 'form-container'])); ?>>
    <?php echo csrf_field(); ?>
    <?php if($method !== 'GET' && $method !== 'POST'): ?>
        <?php echo method_field($method); ?>
    <?php endif; ?>
    
    <?php echo e($slot); ?>

</form> <?php /**PATH /Users/segodnya/Desktop/hexlet/php-project-57/resources/views/components/form-container.blade.php ENDPATH**/ ?>