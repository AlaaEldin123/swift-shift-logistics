<?php
    $manageLicense = auth()
        ->user()
        ->hasPermission('core.manage.license');
?>

<?php if (isset($component)) { $__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::alert','data' => ['type' => 'warning','important' => true,'class' => \Illuminate\Support\Arr::toCssClasses(['alert-license alert-sticky small', 'vertical-wrapper' => AdminAppearance::isVerticalLayout()]),'icon' => '','style' => \Illuminate\Support\Arr::toCssStyles(['display: none' => $hidden ?? true]),'dataBbToggle' => 'authorized-reminder']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'warning','important' => true,'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses(['alert-license alert-sticky small', 'vertical-wrapper' => AdminAppearance::isVerticalLayout()])),'icon' => '','style' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssStyles(['display: none' => $hidden ?? true])),'data-bb-toggle' => 'authorized-reminder']); ?>
    <div class="<?php echo e(AdminAppearance::getContainerWidth()); ?>">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                Your license is invalid, please contact support. If you didn't set up license code, please go to
                <a
                    href="<?php echo e(route('settings.general')); ?>"
                    class="text-white fw-bold"
                > Settings </a> to activate license!
            </div>

            <?php if($manageLicense): ?>
                <a
                    class="btn-close"
                    data-bs-toggle="modal"
                    data-bs-target="#quick-activation-license-modal"
                    aria-label="close"
                ></a>
            <?php endif; ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c)): ?>
<?php $component = $__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c; ?>
<?php unset($__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c); ?>
<?php endif; ?>

<?php if($manageLicense): ?>
    <?php echo $__env->make('core/base::system.partials.license-activation-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/system/license-invalid.blade.php ENDPATH**/ ?>