<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'type' => 'info',
    'title' => null,
    'dismissible' => false,
    'icon' => null,
    'important' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'type' => 'info',
    'title' => null,
    'dismissible' => false,
    'icon' => null,
    'important' => false,
]); ?>
<?php foreach (array_filter(([
    'type' => 'info',
    'title' => null,
    'dismissible' => false,
    'icon' => null,
    'important' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $color = match ($type) {
        'success' => 'alert-success',
        'warning' => 'alert-warning',
        'danger' => 'alert-danger',
        default => 'alert-info',
    };

    $icon ??= match ($type) {
        'success' => 'ti ti-circle-check',
        'danger' => 'ti ti-alert-triangle',
        'warning' => 'ti ti-alert-circle',
        default => 'ti ti-info-circle',
    };
?>

<div
    role="alert"
    <?php echo e($attributes->class(['alert', $color, 'alert-dismissible' => $dismissible, 'alert-important' => $important])); ?>

>
    <?php if($icon): ?>
        <div class="d-flex">
            <div>
                <?php if (isset($component)) { $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::icon','data' => ['name' => $icon,'class' => 'alert-icon']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'class' => 'alert-icon']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac)): ?>
<?php $component = $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac; ?>
<?php unset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac); ?>
<?php endif; ?>
            </div>
            <div class="w-100">
    <?php endif; ?>

    <?php if($title): ?>
        <h4 class="<?php echo \Illuminate\Support\Arr::toCssClasses(['alert-title' => !$important, 'mb-0']); ?>"><?php echo $title; ?></h4>
    <?php endif; ?>

    <?php echo e($slot); ?>


    <?php if($icon): ?>
        </div>
    </div>
<?php endif; ?>

<?php if($dismissible): ?>
    <a
        class="btn-close"
        data-bs-dismiss="alert"
        aria-label="close"
    ></a>
<?php endif; ?>

<?php echo e($additional ?? ''); ?>

</div>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/components/alert.blade.php ENDPATH**/ ?>