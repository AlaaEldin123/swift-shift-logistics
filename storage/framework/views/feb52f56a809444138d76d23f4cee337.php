<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'id' => null,
    'type' => 'info',
    'title' => null,
    'description' => null,
    'icon' => null,
    'submitButtonLabel' => 'Submit',
    'submitButtonColor' => null,
    'submitButtonAttrs' => [],
    'closeButtonLabel' => trans('core/base::base.close'),
    'closeButtonColor' => null,
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
    'submitButtonLabel' => 'Submit',
    'submitButtonColor' => null,
    'submitButtonAttrs' => [],
    'closeButtonLabel' => trans('core/base::base.close'),
    'closeButtonColor' => null,
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
    'submitButtonLabel' => 'Submit',
    'submitButtonColor' => null,
    'submitButtonAttrs' => [],
    'closeButtonLabel' => trans('core/base::base.close'),
    'closeButtonColor' => null,
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
    $submitButtonColor ??= $type;
?>

<?php if (isset($component)) { $__componentOriginalf0bc7448d2f05d41114d69bcb7cd7a1f = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::modal.alert','data' => ['id' => $id,'type' => $type,'title' => $title,'icon' => $icon,'attributes' => $attributes->merge(['size' => 'sm', 'closeButton' => false]),'bodyAttrs' => ['class' => 'text-center py-4'],'formAction' => $formAction,'formMethod' => $formMethod,'formAttrs' => $formAttrs,'hasForm' => $hasForm]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::modal.alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($id),'type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($type),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->merge(['size' => 'sm', 'closeButton' => false])),'body-attrs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['class' => 'text-center py-4']),'form-action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formAction),'form-method' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formMethod),'form-attrs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formAttrs),'has-form' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($hasForm)]); ?>
    <?php if(!empty($description)): ?>
        <div class="text-muted">
            <?php echo $description; ?>

        </div>
    <?php else: ?>
        <?php echo e($slot); ?>

    <?php endif; ?>

     <?php $__env->slot('footer', null, []); ?> 
        <div class="w-100">
            <div class="row">
                <?php if(!isset($footer)): ?>
                    <div class="col">
                        <button
                            type="button"
                            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                'w-100 btn',
                                "btn-$submitButtonColor",
                                Arr::get($submitButtonAttrs, 'class'),
                            ]); ?>"
                            <?php echo Html::attributes(Arr::except($submitButtonAttrs, 'class')); ?>

                        >
                            <?php echo e($submitButtonLabel); ?>

                        </button>
                    </div>
                    <div class="col">
                        <button
                            type="button"
                            class="<?php echo \Illuminate\Support\Arr::toCssClasses(['w-100 btn', "btn-$closeButtonColor" => !$closeButtonColor]); ?>"
                            data-bs-dismiss="modal"
                        >
                            <?php echo e($closeButtonLabel); ?>

                        </button>
                    </div>
                <?php else: ?>
                    <?php echo e($footer); ?>

                <?php endif; ?>
            </div>
        </div>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf0bc7448d2f05d41114d69bcb7cd7a1f)): ?>
<?php $component = $__componentOriginalf0bc7448d2f05d41114d69bcb7cd7a1f; ?>
<?php unset($__componentOriginalf0bc7448d2f05d41114d69bcb7cd7a1f); ?>
<?php endif; ?>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/components/modal/action.blade.php ENDPATH**/ ?>