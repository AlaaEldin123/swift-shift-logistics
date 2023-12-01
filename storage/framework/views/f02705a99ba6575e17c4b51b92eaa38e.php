<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['size' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['size' => null]); ?>
<?php foreach (array_filter((['size' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $class = Arr::toCssClasses(['card', "card-$size" => $size]);
?>

<div <?php echo e($attributes->class($class)); ?>>
    <?php echo e($slot); ?>

</div>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/components/card/index.blade.php ENDPATH**/ ?>