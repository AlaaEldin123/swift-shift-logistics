<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['label', 'description' => null, 'helperText' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['label', 'description' => null, 'helperText' => null]); ?>
<?php foreach (array_filter((['label', 'description' => null, 'helperText' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<label <?php echo e($attributes->merge(['class' => 'form-label'])); ?>>
    <?php echo e($label ?? $slot); ?>


    <?php if($description): ?>
        <span class="form-label-description">
            <?php echo $description; ?>

        </span>
    <?php endif; ?>

    <?php if($helperText): ?>
        <span
            class="form-help"
            data-bs-toggle="popover"
            data-bs-placement="top"
            data-bs-html="true"
            data-bs-content="<?php echo e($helperText); ?>"
        >?</span>
    <?php endif; ?>
</label>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/components/form/label.blade.php ENDPATH**/ ?>