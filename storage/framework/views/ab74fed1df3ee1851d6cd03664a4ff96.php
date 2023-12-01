<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'title' => null,
    'description' => null,
    'footer' => null,
    'extraDescription' => null,
    'card' => true,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'title' => null,
    'description' => null,
    'footer' => null,
    'extraDescription' => null,
    'card' => true,
]); ?>
<?php foreach (array_filter(([
    'title' => null,
    'description' => null,
    'footer' => null,
    'extraDescription' => null,
    'card' => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="mb-5 d-block d-md-flex">
    <div class="col-12 col-md-3">
        <?php if($title): ?>
            <h2><?php echo e($title); ?></h2>
        <?php endif; ?>
        <?php if($description): ?>
            <p class="text-muted"><?php echo BaseHelper::clean($description); ?></p>
        <?php endif; ?>

        <?php echo BaseHelper::clean($extraDescription); ?>

    </div>

    <div class="col-12 col-md-9">
        <?php if($card): ?>
            <?php if (isset($component)) { $__componentOriginalc107e2f90dff5eb05519f33918d2c807 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::card.index','data' => ['attributes' => $attributes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
                <?php if (isset($component)) { $__componentOriginal4fdb92edf089f19cd17d37829580c9a6 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::card.body.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::card.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php echo e($slot); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4fdb92edf089f19cd17d37829580c9a6)): ?>
<?php $component = $__componentOriginal4fdb92edf089f19cd17d37829580c9a6; ?>
<?php unset($__componentOriginal4fdb92edf089f19cd17d37829580c9a6); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc107e2f90dff5eb05519f33918d2c807)): ?>
<?php $component = $__componentOriginalc107e2f90dff5eb05519f33918d2c807; ?>
<?php unset($__componentOriginalc107e2f90dff5eb05519f33918d2c807); ?>
<?php endif; ?>
        <?php else: ?>
            <?php echo e($slot); ?>

        <?php endif; ?>

        <?php echo e($footer); ?>

    </div>
</div>
<?php /**PATH /home/baraa/Desktop/main/platform/core/setting/resources/views/components/section/index.blade.php ENDPATH**/ ?>