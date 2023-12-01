<?php if (isset($component)) { $__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::modal.index','data' => ['id' => 'quick-activation-license-modal','title' => __('License Activation')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'quick-activation-license-modal','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('License Activation'))]); ?>
    <form
        action="<?php echo e(route('settings.license.activate')); ?>"
        method="POST"
        data-bb-toggle="activate-license"
        data-reload="true"
    >
        <?php if (isset($component)) { $__componentOriginald34a25f8ff9d26735e5b798f732d2b5d = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::license.form','data' => ['reset' => false,'isVue' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::license.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['reset' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'is-vue' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald34a25f8ff9d26735e5b798f732d2b5d)): ?>
<?php $component = $__componentOriginald34a25f8ff9d26735e5b798f732d2b5d; ?>
<?php unset($__componentOriginald34a25f8ff9d26735e5b798f732d2b5d); ?>
<?php endif; ?>
    </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687)): ?>
<?php $component = $__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687; ?>
<?php unset($__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687); ?>
<?php endif; ?>

<?php if(Request::ajax()): ?>
    <script src="<?php echo e(asset('vendor/core/core/base/js/license-activation.js')); ?>"></script>
<?php else: ?>
    <?php $__env->startPush('footer'); ?>
        <script src="<?php echo e(asset('vendor/core/core/base/js/license-activation.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php endif; ?>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/system/partials/license-activation-modal.blade.php ENDPATH**/ ?>