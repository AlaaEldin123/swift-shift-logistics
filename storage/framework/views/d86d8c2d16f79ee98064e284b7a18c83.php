<?php if (isset($component)) { $__componentOriginal267ae10e99f5147c684b59e06e741a86 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::layouts.base','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::layouts.base'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="page">
        <?php echo $__env->make('core/base::layouts.' . AdminAppearance::getCurrentLayout() . '.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'page-wrapper',
                'rv-media-integrate-wrapper' => Route::currentRouteName() === 'media.index',
            ]); ?>">
            <?php echo $__env->make('core/base::layouts.partials.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="page-body">
                <div class="<?php echo e(AdminAppearance::getContainerWidth()); ?>">
                    <?php echo apply_filters('core_layout_before_content', null); ?>


                    <?php echo $__env->yieldContent('content'); ?>

                    <?php echo apply_filters('core_layout_after_content', null); ?>

                </div>
            </div>

            <?php echo $__env->make('core/base::layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

    </div>

     <?php $__env->slot('headerLayout', null, []); ?> 
        <?php if(\Botble\Base\Supports\Core::make()->isSkippedLicenseReminder()): ?>
            <?php echo $__env->make('core/base::system.license-invalid', ['hidden' => false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('footer', null, []); ?> 
        <?php echo $__env->make('core/base::global-search.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('core/media::partials.media', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>

        <?php if(App::hasDebugModeEnabled()): ?>
            <?php if (isset($component)) { $__componentOriginalcb3f7f9971af62e57d3caf8f09dc093c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::debug-badge','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::debug-badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcb3f7f9971af62e57d3caf8f09dc093c)): ?>
<?php $component = $__componentOriginalcb3f7f9971af62e57d3caf8f09dc093c; ?>
<?php unset($__componentOriginalcb3f7f9971af62e57d3caf8f09dc093c); ?>
<?php endif; ?>
        <?php endif; ?>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal267ae10e99f5147c684b59e06e741a86)): ?>
<?php $component = $__componentOriginal267ae10e99f5147c684b59e06e741a86; ?>
<?php unset($__componentOriginal267ae10e99f5147c684b59e06e741a86); ?>
<?php endif; ?>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/layouts/master.blade.php ENDPATH**/ ?>