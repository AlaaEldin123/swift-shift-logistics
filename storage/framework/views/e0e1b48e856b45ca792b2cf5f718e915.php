<footer class="footer position-sticky footer-transparent d-print-none">
    <div class="<?php echo e(AdminAppearance::getContainerWidth()); ?>">
        <div class="text-start">
            <div class="d-flex justify-content-between">
                <div>
                    <?php echo $__env->make('core/base::partials.copyright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div>
                    <?php if(defined('LARAVEL_START')): ?>
                        <?php echo e(trans('core/base::layouts.page_loaded_in_time', ['time' => round(microtime(true) - LARAVEL_START, 2)])); ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/layouts/partials/footer.blade.php ENDPATH**/ ?>