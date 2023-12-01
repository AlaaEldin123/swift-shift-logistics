<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['label', 'icon' => null, 'items' => null, 'hasArrow' => false, 'wrapperClass' => null, 'trigger' => null, 'position' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['label', 'icon' => null, 'items' => null, 'hasArrow' => false, 'wrapperClass' => null, 'trigger' => null, 'position' => null]); ?>
<?php foreach (array_filter((['label', 'icon' => null, 'items' => null, 'hasArrow' => false, 'wrapperClass' => null, 'trigger' => null, 'position' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['dropdown', $wrapperClass]); ?>">
    <?php if($trigger): ?>
        <?php echo $trigger; ?>

    <?php else: ?>
        <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::button','data' => ['attributes' => $attributes->merge([
                'type' => 'button',
                'class' => 'dropdown-toggle',
                'data-bs-toggle' => 'dropdown',
            ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->merge([
                'type' => 'button',
                'class' => 'dropdown-toggle',
                'data-bs-toggle' => 'dropdown',
            ]))]); ?>
            <?php if($icon): ?>
                <?php if (isset($component)) { $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::icon','data' => ['name' => $icon]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac)): ?>
<?php $component = $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac; ?>
<?php unset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php echo e($label); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $component = $__componentOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
    <?php endif; ?>

    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
        'dropdown-menu',
        'dropdown-menu-arrow' => $hasArrow,
        "dropdown-menu-$position" => $position,
    ]); ?>">
        <?php echo e($items ?? $slot); ?>

    </div>
</div>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/components/dropdown/index.blade.php ENDPATH**/ ?>