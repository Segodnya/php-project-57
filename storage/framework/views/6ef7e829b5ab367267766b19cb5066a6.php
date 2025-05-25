<?php $__env->startSection('content'); ?>
    <section>
        <?php $__currentLoopData = $labels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['hover' => true,'class' => 'm-2.5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['hover' => true,'class' => 'm-2.5']); ?>
                <div class="row d-flex justify-content-between">
                    <div class="col-3">
                        <p class="p-2 m-0 align-self-center">
                            <?php echo e($label->id); ?>

                            <?php echo e($label->name); ?>

                        </p>
                    </div>
                    <div class="col-6">
                        <p class="p-2 m-0 align-self-center">
                            <?php echo e($label->description); ?>

                        </p>
                    </div>
                    <div class="col-3 d-flex justify-content-end">
                        <div class="p-2">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $label)): ?>
                                <a href="<?php echo e(route('labels.edit', $label)); ?>" class="nav-link">
                                    Изменить
                                </a>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $label)): ?>
                                <form method="POST" class="d-inline delete-form" action="<?php echo e(route('labels.destroy', $label)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="nav-link border-0 bg-transparent delete-btn" data-confirm="<?php echo e(__('messages.Are you sure?')); ?>">
                                        Удалить
                                    </button>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $attributes = $__attributesOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__attributesOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $component = $__componentOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__componentOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div class="row d-flex justify-content-between mt-4">
            <div class="col-7">
                <?php echo e($labels->links()); ?>

            </div>
            <div class="col-3 d-flex align-self-center justify-content-end">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Models\Label::class)): ?>
                    <a href="<?php echo e(route('labels.create')); ?>" class="btn btn-primary">
                        <?php echo e(__('messages.Create label')); ?>

                    </a>
                <?php endif; ?>
            </div>
        </div>

        <?php if (isset($component)) { $__componentOriginal585d8e0b6786fb23cf16fcb9093e880c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal585d8e0b6786fb23cf16fcb9093e880c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.hexlet-stub-test','data' => ['objects' => $labels]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('hexlet-stub-test'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['objects' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($labels)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal585d8e0b6786fb23cf16fcb9093e880c)): ?>
<?php $attributes = $__attributesOriginal585d8e0b6786fb23cf16fcb9093e880c; ?>
<?php unset($__attributesOriginal585d8e0b6786fb23cf16fcb9093e880c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal585d8e0b6786fb23cf16fcb9093e880c)): ?>
<?php $component = $__componentOriginal585d8e0b6786fb23cf16fcb9093e880c; ?>
<?php unset($__componentOriginal585d8e0b6786fb23cf16fcb9093e880c); ?>
<?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    <?php if (isset($component)) { $__componentOriginal961fd52e8b5c06641e0f3abf274a081c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal961fd52e8b5c06641e0f3abf274a081c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.title-task-manager','data' => ['text' => 'messages.Label']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('title-task-manager'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'messages.Label']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal961fd52e8b5c06641e0f3abf274a081c)): ?>
<?php $attributes = $__attributesOriginal961fd52e8b5c06641e0f3abf274a081c; ?>
<?php unset($__attributesOriginal961fd52e8b5c06641e0f3abf274a081c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal961fd52e8b5c06641e0f3abf274a081c)): ?>
<?php $component = $__componentOriginal961fd52e8b5c06641e0f3abf274a081c; ?>
<?php unset($__componentOriginal961fd52e8b5c06641e0f3abf274a081c); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/segodnya/Desktop/hexlet/php-project-57/resources/views/label/index.blade.php ENDPATH**/ ?>