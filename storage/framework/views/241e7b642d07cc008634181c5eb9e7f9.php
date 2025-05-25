<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('tasks.update', $task)); ?>" method="POST" class="form" novalidate>
        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>
        <div class="row square border border-light bg-slate-100 rounded p-3 m-0 d-flex justify-content-center">
            <div class="col-9 ps-0">
                <label for="name" class="form-label"><?php echo e(__('messages.Title')); ?></label><br>
                <input type="text" name="name" id="name" value="<?php echo e(old('name', $task->name)); ?>" class="form-control">
                <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('name'),'class' => 'm-0 px-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('name')),'class' => 'm-0 px-3']); ?>
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
                <br>
                <label for="description" class="form-label"><?php echo e(__('messages.Description')); ?></label><br>
                <textarea name="description" id="description" class="form-control"><?php echo e(old('description', $task->description)); ?></textarea><br>
                <label for="assigned_to_id" class="form-label"><?php echo e(__('messages.Executor')); ?></label><br>
                <select name="assigned_to_id" id="assigned_to_id" class="form-control">
                    <option value="">------------</option>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('assigned_to_id', $task->assignedToUser->id ?? '') == $id ? 'selected' : ''); ?>>
                            <?php echo e($name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="col-3 pe-0">
                <label for="label" class="form-label"><?php echo e(__('messages.Label')); ?></label><br>
                <select name="label[]" id="label" multiple class="form-select" style="height: 21.25rem;">
                    <?php $__currentLoopData = $labels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(in_array($id, old('label', $task->labels->pluck('id')->toArray())) ? 'selected' : ''); ?>>
                            <?php echo e($name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select><br>
                <label for="status_id" class="form-label"><?php echo e(__('messages.Status')); ?></label><br>
                <select name="status_id" id="status_id" class="form-control">
                    <option value="">------------</option>
                    <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('status_id', $task->status->id ?? '') == $id ? 'selected' : ''); ?>>
                            <?php echo e($name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('status_id'),'class' => 'm-0 px-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('status_id')),'class' => 'm-0 px-3']); ?>
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
        </div>
        <div class="row mt-2">
            <div class="col-3">
                <a class="btn btn-secondary" href="<?php echo e(route('tasks.index')); ?>"><?php echo e(__('messages.Cancel')); ?></a>
                <button type="submit" class="btn btn-primary mx-1.5"><?php echo e(__('messages.Edit')); ?></button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    <?php if (isset($component)) { $__componentOriginal961fd52e8b5c06641e0f3abf274a081c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal961fd52e8b5c06641e0f3abf274a081c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.title-task-manager','data' => ['text' => 'messages.Changing the task']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('title-task-manager'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'messages.Changing the task']); ?>
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
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/segodnya/Desktop/hexlet/php-project-57/resources/views/task/edit.blade.php ENDPATH**/ ?>