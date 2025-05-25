<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['status']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['status']); ?>
<?php foreach (array_filter((['status']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php switch($status):
        case ('в работе'): ?>
            <div class="square shadow-sm bg-blue-600 rounded my-3"></div>
            <?php break; ?>
      
        <?php case ('новый'): ?>
            <div class="square shadow-sm bg-pink-600 rounded my-3"></div>
            <?php break; ?>

        <?php case ('на тестировании'): ?>
            <div class="square shadow-sm bg-amber-400 rounded my-3"></div>
            <?php break; ?>

        <?php case ('завершен'): ?>
            <div class="square shadow-sm bg-lime-400 rounded my-3"></div>
            <?php break; ?>
      
        <?php default: ?>
            <div class="square shadow-sm bg-violet-600 rounded my-3"></div>
<?php endswitch; ?><?php /**PATH /Users/segodnya/Desktop/hexlet/php-project-57/resources/views/components/task-status-badge.blade.php ENDPATH**/ ?>