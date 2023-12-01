<?php
    $value = 1;
?>

<?php if (isset($component)) { $__componentOriginala0a922bb70d8e2bee74cdab0a323562a = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form-group','data' => ['class' => ''.e($wrapperClass ?? null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => ''.e($wrapperClass ?? null).'']); ?>
    <input type="hidden" name="<?php echo e($name); ?>" value="0">

    <?php echo $__env->make('core/base::components.form.checkbox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0a922bb70d8e2bee74cdab0a323562a)): ?>
<?php $component = $__componentOriginala0a922bb70d8e2bee74cdab0a323562a; ?>
<?php unset($__componentOriginala0a922bb70d8e2bee74cdab0a323562a); ?>
<?php endif; ?>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/components/form/on-off/checkbox.blade.php ENDPATH**/ ?>