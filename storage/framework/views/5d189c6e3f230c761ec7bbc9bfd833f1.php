<?php if(setting('admin_logo') || config('core.base.general.logo')): ?>
    <a href="<?php echo e(route('dashboard.index')); ?>">
        <img
            src="<?php echo e(setting('admin_logo') ? RvMedia::getImageUrl(setting('admin_logo')) : url(config('core.base.general.logo'))); ?>"
            width="110"
            height="32"
            alt="<?php echo e(setting('admin_title', config('core.base.general.base_name'))); ?>"
            class="navbar-brand-image"
        >
    </a>
<?php endif; ?>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/partials/logo.blade.php ENDPATH**/ ?>