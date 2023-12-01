<?php if (isset($component)) { $__componentOriginalc107e2f90dff5eb05519f33918d2c807 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::card.index','data' => ['id' => 'panel-section-'.e($groupId).'-'.e($id).'','dataPriority' => ''.e($priority).'','dataId' => ''.e($id).'','dataGroupId' => ''.e($groupId).'','class' => 'mb-4 panel-section panel-section-'.e($id).' panel-section-priority-'.e($priority).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'panel-section-'.e($groupId).'-'.e($id).'','data-priority' => ''.e($priority).'','data-id' => ''.e($id).'','data-group-id' => ''.e($groupId).'','class' => 'mb-4 panel-section panel-section-'.e($id).' panel-section-priority-'.e($priority).'']); ?>
    <?php if (isset($component)) { $__componentOriginalf7ec4b8ef3fc6db54b9665bd653222c4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::card.header.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::card.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div>
            <?php if (isset($component)) { $__componentOriginal61297c2b6766060b621d6f9a17b28154 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::card.title','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::card.title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e($title); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal61297c2b6766060b621d6f9a17b28154)): ?>
<?php $component = $__componentOriginal61297c2b6766060b621d6f9a17b28154; ?>
<?php unset($__componentOriginal61297c2b6766060b621d6f9a17b28154); ?>
<?php endif; ?>

            <?php if($description): ?>
                <?php if (isset($component)) { $__componentOriginal2d190a639af1ed5915b50ddd5067a8d8 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::card.subtitle','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::card.subtitle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php echo e($description); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2d190a639af1ed5915b50ddd5067a8d8)): ?>
<?php $component = $__componentOriginal2d190a639af1ed5915b50ddd5067a8d8; ?>
<?php unset($__componentOriginal2d190a639af1ed5915b50ddd5067a8d8); ?>
<?php endif; ?>
            <?php endif; ?>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf7ec4b8ef3fc6db54b9665bd653222c4)): ?>
<?php $component = $__componentOriginalf7ec4b8ef3fc6db54b9665bd653222c4; ?>
<?php unset($__componentOriginalf7ec4b8ef3fc6db54b9665bd653222c4); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal4fdb92edf089f19cd17d37829580c9a6 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::card.body.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::card.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="row g-3">
            <?php echo e($children); ?>

        </div>
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
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/sections/section.blade.php ENDPATH**/ ?>