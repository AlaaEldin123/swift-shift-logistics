<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['level' => 4]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['level' => 4]); ?>
<?php foreach (array_filter((['level' => 4]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
$tag = match ($level) {
    1 => 'h1',
    2 => 'h2',
    3 => 'h3',
    5 => 'h5',
    6 => 'h6',
    default => 'h4'
}
?>

<<?php echo e($tag); ?> <?php echo e($attributes->merge(['class' => 'card-title'])); ?>>
    <?php echo e($slot); ?>

</<?php echo e($tag); ?>>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/components/card/title.blade.php ENDPATH**/ ?>