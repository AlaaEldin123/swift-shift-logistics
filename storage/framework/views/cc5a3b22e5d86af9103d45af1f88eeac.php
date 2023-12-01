<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'id' => null,
    'title' => null,
    'blur' => true,
    'closeButton' => true,
    'size' => null,
    'bodyClass' => null,
    'bodyAttrs' => [],
    'formAction' => null,
    'formMethod' => 'POST',
    'formAttrs' => [],
    'hasForm' => false,
    'type' => null,
    'buttonId' => null,
    'buttonClass' => null,
    'buttonLabel' => null,
    'centered' => true,
    'scrollable' => true,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'id' => null,
    'title' => null,
    'blur' => true,
    'closeButton' => true,
    'size' => null,
    'bodyClass' => null,
    'bodyAttrs' => [],
    'formAction' => null,
    'formMethod' => 'POST',
    'formAttrs' => [],
    'hasForm' => false,
    'type' => null,
    'buttonId' => null,
    'buttonClass' => null,
    'buttonLabel' => null,
    'centered' => true,
    'scrollable' => true,
]); ?>
<?php foreach (array_filter(([
    'id' => null,
    'title' => null,
    'blur' => true,
    'closeButton' => true,
    'size' => null,
    'bodyClass' => null,
    'bodyAttrs' => [],
    'formAction' => null,
    'formMethod' => 'POST',
    'formAttrs' => [],
    'hasForm' => false,
    'type' => null,
    'buttonId' => null,
    'buttonClass' => null,
    'buttonLabel' => null,
    'centered' => true,
    'scrollable' => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $classes = Arr::toCssClasses(['modal', 'fade', 'modal-blur' => $blur]);

    $hasForm = $hasForm || $formAction;
?>

<div
    <?php echo e($attributes->merge(['id' => $id, 'class' => $classes])->class($classes)); ?>

    tabindex="-1"
    role="dialog"
    aria-hidden="true"
    data-select2-dropdown-parent="true"
>
    <div
        class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'modal-dialog',
            'modal-dialog-centered' => $centered,
            'modal-dialog-scrollable' => $scrollable,
            $size ? "modal-$size" : null,
        ]); ?>"
        role="document"
    >
        <div class="modal-content">
            <?php if($title || $closeButton): ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e($title); ?></h5>
                    <?php if($closeButton): ?>
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
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if($hasForm): ?>
                <form
                    action="<?php echo e($formAction); ?>"
                    method="<?php echo e($formMethod); ?>"
                    <?php echo Html::attributes($formAttrs); ?>

                >
                    <?php echo csrf_field(); ?>
            <?php endif; ?>

            <?php if($type): ?>
                <div class="modal-status bg-<?php echo e($type); ?>"></div>
            <?php endif; ?>

            <?php if($slot->isNotEmpty()): ?>
                <div <?php echo Html::attributes(array_merge($bodyAttrs, ['class' => 'modal-body ' . Arr::get($bodyAttrs, 'class')])); ?>>
                    <?php echo e($slot); ?>

                </div>
            <?php else: ?>
                <?php echo e($slot); ?>

            <?php endif; ?>

            <?php if(!empty($footer) && $footer->isNotEmpty()): ?>
                <div class="modal-footer">
                    <?php echo e($footer); ?>

                </div>
            <?php endif; ?>

            <?php if($buttonId && $buttonLabel): ?>
                <div class="modal-footer">
                    <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::button','data' => ['type' => 'button','dataBsDismiss' => 'modal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','data-bs-dismiss' => 'modal']); ?>
                        <?php echo e(trans('core/base::tables.cancel')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $component = $__componentOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::button','data' => ['id' => $buttonId,'class' => \Illuminate\Support\Arr::toCssClasses(['ms-auto', $buttonClass => $buttonClass]),'color' => $type ?? 'primary']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($buttonId),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses(['ms-auto', $buttonClass => $buttonClass])),'color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($type ?? 'primary')]); ?>
                        <?php echo e($buttonLabel); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $component = $__componentOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if($hasForm): ?>
                </form>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/components/modal/index.blade.php ENDPATH**/ ?>