<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['name', 'label', 'type' => 'text', 'options' => [], 'placeholder' => null, 'value' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['name', 'label', 'type' => 'text', 'options' => [], 'placeholder' => null, 'value' => null]); ?>
<?php foreach (array_filter((['name', 'label', 'type' => 'text', 'options' => [], 'placeholder' => null, 'value' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="mb-4">
    <label for="<?php echo e($name); ?>" class="form-label">
        <?php echo e(__($label)); ?>

    </label>
    
    <?php if($type === 'textarea'): ?>
        <textarea 
            id="<?php echo e($name); ?>"
            name="<?php echo e($name); ?>"
            <?php echo e($attributes->merge(['class' => 'form-input-base w-full'])); ?>

        ><?php echo e($slot ?? ''); ?></textarea>
    <?php elseif($type === 'select'): ?>
        <select
            id="<?php echo e($name); ?>"
            name="<?php echo e($name); ?>"
            <?php echo e($attributes->merge(['class' => 'form-input-base w-full'])); ?>

        >
            <?php if($placeholder): ?>
                <option value=""><?php echo e($placeholder); ?></option>
            <?php endif; ?>
            
            <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($value); ?>" <?php echo e(isset($slot) && $value == (string)$slot ? 'selected' : ''); ?>>
                    <?php echo e($label); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    <?php else: ?>
        <input 
            type="<?php echo e($type); ?>"
            id="<?php echo e($name); ?>"
            name="<?php echo e($name); ?>"
            <?php echo e($attributes->merge(['class' => 'form-input-base w-full'])); ?>

            value="<?php echo e($slot ?? $value ?? ''); ?>"
        >
    <?php endif; ?>
    
    <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get($name),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get($name)),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
</div> <?php /**PATH /Users/segodnya/Desktop/hexlet/php-project-57/resources/views/components/form-field.blade.php ENDPATH**/ ?>