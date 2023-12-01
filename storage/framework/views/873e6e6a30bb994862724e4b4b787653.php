<?php if (! $__env->hasRenderedOnce('e4ed2a6f-a292-4ceb-a2b3-b5d713e66e9b')): $__env->markAsRenderedOnce('e4ed2a6f-a292-4ceb-a2b3-b5d713e66e9b'); ?>
    <div
        class="offcanvas offcanvas-end"
        tabindex="-1"
        id="notification-sidebar"
        aria-labelledby="notification-sidebar-label"
        data-url="<?php echo e(route('notifications.index')); ?>"
        data-count-url="<?php echo e(route('notifications.count-unread')); ?>"
    >
        <button
            type="button"
            class="btn-close text-reset"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
        ></button>

        <div class="notification-content"></div>
    </div>

    <script src="<?php echo e(asset('vendor/core/core/base/js/notification.js')); ?>"></script>
<?php endif; ?>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/notification/notification.blade.php ENDPATH**/ ?>