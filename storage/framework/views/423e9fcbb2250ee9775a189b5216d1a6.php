<?php if (isset($component)) { $__componentOriginal57974c633123033f2e9fe3a6ec4006c4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::section.action.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::section.action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::button','data' => ['type' => 'submit','color' => 'primary','icon' => 'ti ti-device-floppy','form' => $form ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','color' => 'primary','icon' => 'ti ti-device-floppy','form' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($form ?? null)]); ?>
        <?php echo e(trans('core/setting::setting.save_settings')); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $component = $__componentOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>

    <?php echo e($slot); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal57974c633123033f2e9fe3a6ec4006c4)): ?>
<?php $component = $__componentOriginal57974c633123033f2e9fe3a6ec4006c4; ?>
<?php unset($__componentOriginal57974c633123033f2e9fe3a6ec4006c4); ?>
<?php endif; ?>
<?php /**PATH /home/baraa/Desktop/main/platform/core/setting/resources/views/components/section/action/save.blade.php ENDPATH**/ ?>