<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['name', 'size' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['name', 'size' => null]); ?>
<?php foreach (array_filter((['name', 'size' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $class = Arr::toCssClasses(['icon', $name, "icon-$size" => $size]);
?>

<?php if(str_contains($name, 'ti ti-')): ?>
    <span <?php echo e($attributes->class(['icon-tabler-wrapper', "icon-$size" => $size])); ?>>
        <?php echo $__env->make('core/base::components.icons.' . str_replace('ti ti-', '', $name), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </span>
<?php else: ?>
    <i <?php echo e($attributes->class($class)); ?>></i>
<?php endif; ?>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/components/icon.blade.php ENDPATH**/ ?>