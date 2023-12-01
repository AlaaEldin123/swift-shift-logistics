<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'id' => null,
    'type' => 'text',
    'label' => null,
    'labelSrOnly' => false,
    'name' => null,
    'value' => old($name),
    'wrapperClass' => null,
    'wrapperClassDefault' => 'mb-3 position-relative',
    'helperText' => null,
    'labelDescription' => null,
    'rounded' => false,
    'errorKey' => $name,
    'inputGroup' => false,
    'inputIcon' => false,
    'groupFlat' => false,
    'required' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'id' => null,
    'type' => 'text',
    'label' => null,
    'labelSrOnly' => false,
    'name' => null,
    'value' => old($name),
    'wrapperClass' => null,
    'wrapperClassDefault' => 'mb-3 position-relative',
    'helperText' => null,
    'labelDescription' => null,
    'rounded' => false,
    'errorKey' => $name,
    'inputGroup' => false,
    'inputIcon' => false,
    'groupFlat' => false,
    'required' => false,
]); ?>
<?php foreach (array_filter(([
    'id' => null,
    'type' => 'text',
    'label' => null,
    'labelSrOnly' => false,
    'name' => null,
    'value' => old($name),
    'wrapperClass' => null,
    'wrapperClassDefault' => 'mb-3 position-relative',
    'helperText' => null,
    'labelDescription' => null,
    'rounded' => false,
    'errorKey' => $name,
    'inputGroup' => false,
    'inputIcon' => false,
    'groupFlat' => false,
    'required' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $id ??= $name ?? Str::random(8);
    $wrapperClass = Arr::toCssClasses([$wrapperClass, 'input-icon' => $inputIcon]);
    $classes = Arr::toCssClasses(['form-control', 'is-invalid' => $errors->has($errorKey), 'form-control-rounded' => $rounded]);
    $inputGroup = !$inputIcon && ($inputGroup || isset($prepend) || isset($append));
?>

<?php if (isset($component)) { $__componentOriginala0a922bb70d8e2bee74cdab0a323562a = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form-group','data' => ['class' => $wrapperClass,'defaultClass' => $wrapperClassDefault]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($wrapperClass),'default-class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($wrapperClassDefault)]); ?>
    <?php if($label): ?>
        <?php if (isset($component)) { $__componentOriginal50e5e771b30c35423d2b4f118feb7c0c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.label','data' => ['label' => $label,'for' => $id,'description' => $labelDescription,'class' => \Illuminate\Support\Arr::toCssClasses(['required' => $required, 'sr-only' => $labelSrOnly])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($label),'for' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($id),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($labelDescription),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses(['required' => $required, 'sr-only' => $labelSrOnly]))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal50e5e771b30c35423d2b4f118feb7c0c)): ?>
<?php $component = $__componentOriginal50e5e771b30c35423d2b4f118feb7c0c; ?>
<?php unset($__componentOriginal50e5e771b30c35423d2b4f118feb7c0c); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if($inputGroup || $inputIcon): ?>
        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'input-group' => $inputGroup,
            'input-icon' => $inputIcon,
            'input-group-flat' => $groupFlat,
        ]); ?>">
    <?php endif; ?>

    <?php if(isset($prepend)): ?>
        <?php echo $prepend; ?>

    <?php endif; ?>

    <input <?php echo e($attributes->merge(['type' => $type, 'name' => $name, 'id' => $id, 'value' => $value, 'required' => $required])->class($classes)); ?> />

    <?php if($helperText && ! $inputGroup): ?>
        <?php if (isset($component)) { $__componentOriginal1844d57dc6206b688bd5adc7dea47e7d = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.helper-text','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.helper-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo $helperText; ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1844d57dc6206b688bd5adc7dea47e7d)): ?>
<?php $component = $__componentOriginal1844d57dc6206b688bd5adc7dea47e7d; ?>
<?php unset($__componentOriginal1844d57dc6206b688bd5adc7dea47e7d); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if(isset($append)): ?>
        <?php echo $append; ?>

    <?php endif; ?>

    <?php if($inputGroup || $inputIcon): ?>
        </div>
    <?php endif; ?>

    <?php if($helperText && $inputGroup): ?>
        <?php if (isset($component)) { $__componentOriginal1844d57dc6206b688bd5adc7dea47e7d = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.helper-text','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.helper-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo $helperText; ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1844d57dc6206b688bd5adc7dea47e7d)): ?>
<?php $component = $__componentOriginal1844d57dc6206b688bd5adc7dea47e7d; ?>
<?php unset($__componentOriginal1844d57dc6206b688bd5adc7dea47e7d); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal5eeffca643f98617c0ca70ab61dd7dad = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.error','data' => ['key' => $errorKey]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['key' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errorKey)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5eeffca643f98617c0ca70ab61dd7dad)): ?>
<?php $component = $__componentOriginal5eeffca643f98617c0ca70ab61dd7dad; ?>
<?php unset($__componentOriginal5eeffca643f98617c0ca70ab61dd7dad); ?>
<?php endif; ?>

    <?php echo e($slot); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0a922bb70d8e2bee74cdab0a323562a)): ?>
<?php $component = $__componentOriginala0a922bb70d8e2bee74cdab0a323562a; ?>
<?php unset($__componentOriginala0a922bb70d8e2bee74cdab0a323562a); ?>
<?php endif; ?>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/components/form/text-input.blade.php ENDPATH**/ ?>