<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['headers' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['headers' => null]); ?>
<?php foreach (array_filter((['headers' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="overflow-x-auto">
    <table <?php echo e($attributes->merge(['class' => 'table-base'])); ?>>
        <?php if($headers): ?>
            <thead>
                <tr>
                    <?php $__currentLoopData = $headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th class="table-header"><?php echo e($header); ?></th>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </thead>
        <?php endif; ?>
        <tbody class="bg-white divide-y divide-gray-200">
            <?php echo e($slot); ?>

        </tbody>
    </table>
</div> <?php /**PATH /Users/segodnya/Desktop/hexlet/php-project-57/resources/views/components/table.blade.php ENDPATH**/ ?>