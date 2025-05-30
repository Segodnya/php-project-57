<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title', 'actions' => null]));

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

foreach (array_filter((['title', 'actions' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="page-header">
    <div class="page-header-inner">
        <div class="flex justify-between items-center">
            <h1 class="text-title"><?php echo e($title); ?></h1>
            
            <?php if($actions): ?>
                <div class="flex space-x-3">
                    <?php echo e($actions); ?>

                </div>
            <?php endif; ?>
        </div>

        <?php if($slot->isNotEmpty()): ?>
            <div class="mt-4">
                <?php echo e($slot); ?>

            </div>
        <?php endif; ?>
    </div>
</div> <?php /**PATH /Users/segodnya/Desktop/hexlet/php-project-57/resources/views/components/page-header.blade.php ENDPATH**/ ?>