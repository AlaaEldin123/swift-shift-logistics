<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal26a807ae0e75175dceaac1113c75830b = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::panel-section','data' => ['id' => 'settings']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::panel-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'settings']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal26a807ae0e75175dceaac1113c75830b)): ?>
<?php $component = $__componentOriginal26a807ae0e75175dceaac1113c75830b; ?>
<?php unset($__componentOriginal26a807ae0e75175dceaac1113c75830b); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(BaseHelper::getAdminMasterLayoutTemplate(), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/baraa/Desktop/main/platform/core/setting/resources/views/index.blade.php ENDPATH**/ ?>