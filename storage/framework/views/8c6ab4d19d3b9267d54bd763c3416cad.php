<?php $__env->startSection('content'); ?>
    <div class="container py-4">
        <form action="<?php echo e(route('labels.store')); ?>" method="POST" class="relative z-10">
            <?php echo csrf_field(); ?>
            <div class="bg-white rounded-lg shadow-sm p-6">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700"><?php echo e(__('messages.Title')); ?></label>
                    <input type="text" 
                           name="name" 
                           id="name" 
                           value="<?php echo e(old('name')); ?>" 
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('name'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('name')),'class' => 'mt-2']); ?>
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
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700"><?php echo e(__('messages.Description')); ?></label>
                    <textarea name="description" 
                              id="description" 
                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                              rows="4"><?php echo e(old('description')); ?></textarea>
                </div>

                <div class="flex justify-start space-x-4 mt-6">
                    <a href="<?php echo e(route('labels.index')); ?>" 
                       class="inline-flex justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <?php echo e(__('messages.Cancel')); ?>

                    </a>
                    <button type="submit" 
                            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <?php echo e(__('messages.Create')); ?>

                    </button>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    <?php if (isset($component)) { $__componentOriginal961fd52e8b5c06641e0f3abf274a081c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal961fd52e8b5c06641e0f3abf274a081c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.title-task-manager','data' => ['text' => 'messages.Create a label']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('title-task-manager'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'messages.Create a label']); ?>
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
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/segodnya/Desktop/hexlet/php-project-57/resources/views/label/create.blade.php ENDPATH**/ ?>