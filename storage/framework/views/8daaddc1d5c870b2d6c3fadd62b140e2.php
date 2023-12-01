<ul class="<?php echo \Illuminate\Support\Arr::toCssClasses(['navbar-nav', $navbarClass ?? null]); ?>">
    <?php $__currentLoopData = DashboardMenu::getAll(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('core/base::layouts.partials.navbar-nav-item', [
            'menu' => $menu,
            'autoClose' => $autoClose,
            'isNav' => true,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/layouts/partials/navbar-nav.blade.php ENDPATH**/ ?>