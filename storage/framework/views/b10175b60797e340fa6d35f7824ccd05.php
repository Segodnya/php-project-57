<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['name', 'label', 'options', 'value' => null, 'placeholder' => null]));

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

foreach (array_filter((['name', 'label', 'options', 'value' => null, 'placeholder' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="form-group mb-4">
    <label for="<?php echo e($name); ?>" class="block text-sm font-medium text-gray-700 mb-1">
        <?php echo e(__($label)); ?>

        <?php if($attributes->has('required')): ?>
            <span class="text-red-500">*</span>
        <?php endif; ?>
    </label>

    <select
        id="<?php echo e($name); ?>"
        name="<?php echo e(str_ends_with($name, '[]') ? $name : $name); ?>"
        <?php echo e($attributes->has('required') ? 'required' : ''); ?>

        <?php echo e($attributes->merge(['class' => 'form-input-base ' . ($errors->has(str_replace('[]', '', $name)) ? 'border-red-500' : '')])); ?>

    >
        <?php if($placeholder): ?>
            <option value=""><?php echo e($placeholder); ?></option>
        <?php endif; ?>

        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionValue => $optionLabel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($optionValue); ?>" <?php echo e(in_array($optionValue, (array)$value) ? 'selected' : ''); ?>>
                <?php echo e($optionLabel); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <?php $__errorArgs = [str_replace('[]', '', $name)];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="form-error">
            <?php echo e($message); ?>

        </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div> <?php /**PATH /Users/segodnya/Desktop/hexlet/php-project-57/resources/views/components/form/select.blade.php ENDPATH**/ ?>