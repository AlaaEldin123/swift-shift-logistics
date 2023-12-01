<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['defaultClass' => 'mb-3 position-relative']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['defaultClass' => 'mb-3 position-relative']); ?>
<?php foreach (array_filter((['defaultClass' => 'mb-3 position-relative']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div <?php echo e($attributes->merge(['class' => $defaultClass])); ?>>
    <?php echo e($slot); ?>

</div>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/components/form-group.blade.php ENDPATH**/ ?>