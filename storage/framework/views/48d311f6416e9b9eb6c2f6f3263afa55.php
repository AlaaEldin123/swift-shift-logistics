<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'id' => null,
    'type' => 'info',
    'title' => null,
    'description' => null,
    'icon' => null,
    'formAction' => null,
    'formMethod' => 'POST',
    'formAttrs' => [],
    'hasForm' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'id' => null,
    'type' => 'info',
    'title' => null,
    'description' => null,
    'icon' => null,
    'formAction' => null,
    'formMethod' => 'POST',
    'formAttrs' => [],
    'hasForm' => false,
]); ?>
<?php foreach (array_filter(([
    'id' => null,
    'type' => 'info',
    'title' => null,
    'description' => null,
    'icon' => null,
    'formAction' => null,
    'formMethod' => 'POST',
    'formAttrs' => [],
    'hasForm' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $icon ??= match ($type) {
        'success' => 'ti ti-circle-check',
        'danger' => 'ti ti-alert-triangle',
        'warning' => 'ti ti-alert-circle',
        default => 'ti ti-info-circle',
    };
?>

<?php if (isset($component)) { $__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::modal.index','data' => ['type' => $type,'id' => $id,'attributes' => $attributes->merge(['size' => 'sm', 'closeButton' => false]),'bodyAttrs' => ['class' => 'text-center py-4'],'formAction' => $formAction,'formMethod' => $formMethod,'formAttrs' => $formAttrs,'hasForm' => $hasForm]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($type),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($id),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->merge(['size' => 'sm', 'closeButton' => false])),'body-attrs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['class' => 'text-center py-4']),'form-action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formAction),'form-method' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formMethod),'form-attrs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formAttrs),'has-form' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($hasForm)]); ?>
    <?php if (isset($component)) { $__componentOriginal78bbf683c893f1d7a5db54eb73c5b865 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::modal.close-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::modal.close-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal78bbf683c893f1d7a5db54eb73c5b865)): ?>
<?php $component = $__componentOriginal78bbf683c893f1d7a5db54eb73c5b865; ?>
<?php unset($__componentOriginal78bbf683c893f1d7a5db54eb73c5b865); ?>
<?php endif; ?>

    <div class="mb-2">
        <?php if (isset($component)) { $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::icon','data' => ['name' => $icon,'class' => 'text-'.e($type).'','size' => 'lg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'class' => 'text-'.e($type).'','size' => 'lg']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac)): ?>
<?php $component = $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac; ?>
<?php unset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac); ?>
<?php endif; ?>
    </div>

    <?php if($title): ?>
        <h3><?php echo $title; ?></h3>
    <?php endif; ?>

    <?php echo e($slot); ?>


     <?php $__env->slot('footer', null, []); ?> <?php echo e($footer ?? null); ?> <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687)): ?>
<?php $component = $__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687; ?>
<?php unset($__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687); ?>
<?php endif; ?>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/components/modal/alert.blade.php ENDPATH**/ ?>