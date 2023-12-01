<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'type' => 'button',
    'tag' => 'button',
    'disabled' => false,
    'color' => null,
    'icon' => null,
    'iconOnly' => false,
    'square' => false,
    'pill' => false,
    'iconPosition' => 'left',
    'outlined' => false,
    'size' => null,
    'loading' => false,
    'loadingOverlay' => false,
    'tooltip' => null,
    'tooltipPlacement' => 'top',
    'ghost' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'type' => 'button',
    'tag' => 'button',
    'disabled' => false,
    'color' => null,
    'icon' => null,
    'iconOnly' => false,
    'square' => false,
    'pill' => false,
    'iconPosition' => 'left',
    'outlined' => false,
    'size' => null,
    'loading' => false,
    'loadingOverlay' => false,
    'tooltip' => null,
    'tooltipPlacement' => 'top',
    'ghost' => false,
]); ?>
<?php foreach (array_filter(([
    'type' => 'button',
    'tag' => 'button',
    'disabled' => false,
    'color' => null,
    'icon' => null,
    'iconOnly' => false,
    'square' => false,
    'pill' => false,
    'iconPosition' => 'left',
    'outlined' => false,
    'size' => null,
    'loading' => false,
    'loadingOverlay' => false,
    'tooltip' => null,
    'tooltipPlacement' => 'top',
    'ghost' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $class = Arr::toCssClasses([
        'btn',
        'disabled' => $disabled,
        'btn-square' => $square,
        'btn-pill' => $pill,
        'btn-icon' => $iconOnly,
        'btn-loading' => $loading && $loadingOverlay,
        ...$outlined ? [$color ? "btn-outline-$color" : null] : [$color ? "btn-$color" : null],
        match ($size) {
            'sm' => 'btn-sm',
            'lg' => 'btn-lg',
            default => null,
        },
        "btn-ghost-$color" => $ghost && $color,
    ]);
    
    $spinnerClasses = Arr::toCssClasses(['spinner-border', 'spinner-border-sm', 'me-2' => $iconPosition === 'left', 'ms-2' => $iconPosition === 'right']);
?>

<<?php echo e($tag); ?>

    <?php echo e($attributes->merge([
            'type' => $type,
            'disabled' => $disabled,
        ])->class($class)); ?>

    <?php if($tooltip): ?> data-bs-toggle="tooltip"
        data-bs-placement="<?php echo e($tooltipPlacement); ?>"
        title="<?php echo e($tooltip); ?>" <?php endif; ?>
>
    <?php if($icon && $iconPosition === 'left'): ?>
        <?php if($loading): ?>
            <span
                class="<?php echo e($spinnerClasses); ?>"
                role="status"
            ></span>
        <?php else: ?>
            <?php if (isset($component)) { $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::icon','data' => ['name' => $icon,'size' => $size,'class' => 'icon-left']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'size' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($size),'class' => 'icon-left']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac)): ?>
<?php $component = $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac; ?>
<?php unset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac); ?>
<?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>

    <?php if($slot->isNotEmpty()): ?>
        <?php if($iconOnly): ?>
            <span class="sr-only"><?php echo e($slot); ?></span>
        <?php else: ?>
            <?php echo e($slot); ?>

        <?php endif; ?>
    <?php endif; ?>

    <?php if($icon && $iconPosition === 'right'): ?>
        <?php if($loading): ?>
            <span
                class="<?php echo e($spinnerClasses); ?>"
                role="status"
            ></span>
        <?php else: ?>
            <?php if (isset($component)) { $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::icon','data' => ['name' => $icon,'size' => $size,'class' => 'icon-right']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'size' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($size),'class' => 'icon-right']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac)): ?>
<?php $component = $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac; ?>
<?php unset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac); ?>
<?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
    </<?php echo e($tag); ?>>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/components/button.blade.php ENDPATH**/ ?>