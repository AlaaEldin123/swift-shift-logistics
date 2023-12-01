<?php if($priority != -9970): ?>
    <div
        id="panel-section-item-<?php echo e($sectionId); ?>-<?php echo e($id); ?>"
        data-priority="<?php echo e($priority); ?>"
        data-id="<?php echo e($id); ?>"
        data-group-id="<?php echo e($sectionId); ?>"
        class="col-6 col-md-4 panel-section-item panel-section-item-<?php echo e($id); ?> panel-section-item-priority-<?php echo e($priority); ?>"
    >
        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['row g-3', 'align-items-start' => $description, 'align-items-center' => ! $description]); ?>">
            <div class="col-auto">
                <div class="d-flex align-items-center justify-content-center panel-section-item-icon">
                    <?php if (isset($component)) { $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::icon','data' => ['name' => $icon ?: 'ti ti-box']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon ?: 'ti ti-box')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac)): ?>
<?php $component = $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac; ?>
<?php unset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac); ?>
<?php endif; ?>
                </div>
            </div>
            <div class="col">
                <div class="d-block mb-1 panel-section-item-title">
                    <?php if($url): ?>
                        <a class="text-decoration-none text-primary fw-bold" href="<?php echo e($url); ?>"
                           <?php if($urlShouldOpenNewTab): ?> target="_blank" <?php endif; ?>>
                            <?php endif; ?>

                            <?php echo e($title); ?>


                            <?php if($url): ?>
                        </a>
                    <?php endif; ?>
                </div>

                <?php if($description): ?>
                    <div class="text-secondary mt-n1"><?php echo e($description); ?></div>
                <?php endif; ?>
            </div>
        </div>

    </div>
<?php endif; ?>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/sections/item.blade.php ENDPATH**/ ?>