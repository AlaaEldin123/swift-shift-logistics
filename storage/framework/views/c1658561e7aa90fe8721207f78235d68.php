<?php if (! $__env->hasRenderedOnce('2ea47d13-4fc6-4fad-b79f-b18c55800223')): $__env->markAsRenderedOnce('2ea47d13-4fc6-4fad-b79f-b18c55800223'); ?>
    <div class="nav-item d-none d-md-flex me-2">
        <a
            class="px-0 nav-link"
            data-bs-toggle="offcanvas"
            href="#notification-sidebar"
            role="button"
            aria-controls="notification-sidebar"
        >
            <?php if (isset($component)) { $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::icon','data' => ['name' => 'ti ti-bell']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'ti ti-bell']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac)): ?>
<?php $component = $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac; ?>
<?php unset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac); ?>
<?php endif; ?>
            <span
                class="badge bg-blue text-blue-fg badge-pill notification-count"><?php echo e(number_format($countNotificationUnread)); ?></span>
        </a>
    </div>
<?php endif; ?>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/notification/nav-item.blade.php ENDPATH**/ ?>