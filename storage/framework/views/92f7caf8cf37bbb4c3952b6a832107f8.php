<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['routes', 'text']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['routes', 'text']); ?>
<?php foreach (array_filter((['routes', 'text']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="row mt-2">
    <div class="col-3">
    <a class="btn btn-secondary" href="<?php echo e(route($routes)); ?>"><?php echo e(__("messages.Cancel")); ?></a>
    <?php echo e(Form::submit(__("messages.$text"), ['class' => 'btn btn-primary mx-1.5'])); ?>

    </div>
</div><?php /**PATH /Users/segodnya/Desktop/hexlet/php-project-57/resources/views/components/button-form.blade.php ENDPATH**/ ?>