<?php if (isset($component)) { $__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::modal.index','data' => ['id' => 'global-search-modal','dataBbToggle' => 'gs-modal','closeButton' => false,'centered' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'global-search-modal','data-bb-toggle' => 'gs-modal','close-button' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'centered' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
    <?php if (isset($component)) { $__componentOriginald83dae5750a07af1a413e54a0071b325 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.index','data' => ['url' => route('core.global-search'),'dataBbToggle' => 'gs-form']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('core.global-search')),'data-bb-toggle' => 'gs-form']); ?>
        <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.text-input','data' => ['name' => 'keyword','label' => $name = trans('core/base::base.global_search.search'),'labelSrOnly' => true,'placeholder' => $name,'inputIcon' => true,'tabindex' => '0','dataBbToggle' => 'gs-input','wrapperClass' => 'input-icon']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'keyword','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name = trans('core/base::base.global_search.search')),'label-sr-only' => true,'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'input-icon' => true,'tabindex' => '0','data-bb-toggle' => 'gs-input','wrapper-class' => 'input-icon']); ?>
             <?php $__env->slot('prepend', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::icon','data' => ['name' => 'ti ti-search','class' => 'input-icon-addon']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'ti ti-search','class' => 'input-icon-addon']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac)): ?>
<?php $component = $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac; ?>
<?php unset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald83dae5750a07af1a413e54a0071b325)): ?>
<?php $component = $__componentOriginald83dae5750a07af1a413e54a0071b325; ?>
<?php unset($__componentOriginald83dae5750a07af1a413e54a0071b325); ?>
<?php endif; ?>

    <div data-bb-toggle="gs-result">
        <div class="text-center text-muted">
            <?php echo e(trans('core/base::base.global_search.no_result')); ?>

        </div>
    </div>

     <?php $__env->slot('footer', null, []); ?> 
        <span class="text-muted">
            <kbd>
                <?php if (isset($component)) { $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::icon','data' => ['name' => 'ti ti-arrow-back']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'ti ti-arrow-back']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac)): ?>
<?php $component = $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac; ?>
<?php unset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac); ?>
<?php endif; ?>
            </kbd>
            <?php echo e(trans('core/base::base.global_search.to_select')); ?>

        </span>

        <span class="text-muted">
            <kbd>
                <?php if (isset($component)) { $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::icon','data' => ['name' => 'ti ti-arrow-narrow-up']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'ti ti-arrow-narrow-up']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac)): ?>
<?php $component = $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac; ?>
<?php unset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac); ?>
<?php endif; ?>
            </kbd>
            <kbd>
                <?php if (isset($component)) { $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::icon','data' => ['name' => 'ti ti-arrow-narrow-down']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'ti ti-arrow-narrow-down']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac)): ?>
<?php $component = $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac; ?>
<?php unset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac); ?>
<?php endif; ?>
            </kbd>
            <?php echo e(trans('core/base::base.global_search.to_navigate')); ?>

        </span>

        <span class="text-muted">
            <kbd>esc</kbd>
            <?php echo e(trans('core/base::base.global_search.to_close')); ?>

        </span>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687)): ?>
<?php $component = $__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687; ?>
<?php unset($__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::custom-template','data' => ['id' => 'gs-not-result-template']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::custom-template'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'gs-not-result-template']); ?>
    <div class="text-center text-muted">
        <?php echo e(trans('core/base::base.global_search.no_result')); ?>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1)): ?>
<?php $component = $__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1; ?>
<?php unset($__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1); ?>
<?php endif; ?>

<script src="<?php echo e(asset('vendor/core/core/base/js/global-search.js')); ?>"></script>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/global-search/form.blade.php ENDPATH**/ ?>