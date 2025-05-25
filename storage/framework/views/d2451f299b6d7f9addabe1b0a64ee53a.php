<?php $__env->startSection('content'); ?>
      <section>
        <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="row m-2.5">
                <div class="col-6 square border border-light bg-slate-100 hover:bg-gray-300 rounded ms-1">
                  <div class="row d-flex justify-content-between">
                    <div class="col-6">
                      <p class="p-2 m-0 align-self-center">
                        <?php echo e($status->id); ?>

                        <?php echo e($status->name); ?>

                      </p>
                    </div>
                    <div class="col-6 p-2">
                      <div class="row justify-content-end">
                        <div class="col-10 d-flex align-self-center justify-content-end">
                          <p class="text-secondary m-0"><?php echo e($status->formatted_date); ?></p>
                        </div>
                          <div class="col-2 p-0">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $status)): ?>
                                <a class="text-secondary link-underline link-underline-opacity-0" href="<?php echo e(route('task_statuses.edit', $status)); ?>">
                                  <i class="bi bi-pencil hover:text-black"></i>
                                  <p class="d-none"><?php echo e(__('messages.To change')); ?></p>
                                </a>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $status)): ?>
                                <a class="text-secondary p-0.5" href="<?php echo e(route('task_statuses.destroy', $status)); ?>" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">
                                  <i class="bi bi-trash hover:text-black"></i>
                                  <p class="d-none"><?php echo e(__('messages.Delete')); ?></p>
                                </a>
                            <?php endif; ?>
                          </div>
                      </div>
                    </div>
                  </div>    
                </div>
              </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="row d-flex justify-content-between">
          <div class="col-7">
            <?php echo e($statuses->links()); ?>

          </div>
          <div class="col-3 d-flex align-self-center justify-content-end">
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Models\TaskStatus::class)): ?>
                <a class="btn btn-primary" href="<?php echo e(route('task_statuses.create')); ?>"><?php echo e(__('messages.Create status')); ?></a>
              <?php endif; ?>
          </div>
        </div>

        <?php if (isset($component)) { $__componentOriginal585d8e0b6786fb23cf16fcb9093e880c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal585d8e0b6786fb23cf16fcb9093e880c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.hexlet-stub-test','data' => ['objects' => $statuses]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('hexlet-stub-test'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['objects' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($statuses)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.title-task-manager','data' => ['text' => 'messages.Statuses']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('title-task-manager'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'messages.Statuses']); ?>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/segodnya/Desktop/hexlet/php-project-57/resources/views/status/index.blade.php ENDPATH**/ ?>