<?php if (isset($component)) { $__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::alert','data' => ['type' => 'warning']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'warning']); ?>
    <?php if($manageLicense = auth()->guard()->user()->hasPermission('core.manage.license')): ?>
        <div>Your license is invalid. Please activate your license!</div>
    <?php else: ?>
        <div>You doesn't have permission to activate the license!</div>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c)): ?>
<?php $component = $__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c; ?>
<?php unset($__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.text-input','data' => ['label' => 'Your username on Envato','name' => 'buyer','id' => 'buyer','placeholder' => 'Your Envato\'s username','disabled' => !$manageLicense]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Your username on Envato','name' => 'buyer','id' => 'buyer','placeholder' => 'Your Envato\'s username','disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!$manageLicense)]); ?>
     <?php $__env->slot('helperText', null, []); ?> 
        If your profile page is <a
            href="https://codecanyon.net/user/john-smith"
            rel="nofollow"
        >https://codecanyon.net/user/john-smith</a>, then your username on Envato is
        <strong>john-smith</strong>.
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.text-input','data' => ['label' => 'Purchase code','name' => 'purchase_code','id' => 'purchase_code','disabled' => !$manageLicense,'placeholder' => 'Ex: 10101010-10aa-0101-a1b1010a01b10']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Purchase code','name' => 'purchase_code','id' => 'purchase_code','disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!$manageLicense),'placeholder' => 'Ex: 10101010-10aa-0101-a1b1010a01b10']); ?>
     <?php $__env->slot('helperText', null, []); ?> 
        <a
            href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code"
            target="_blank"
        >What's this?</a>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.on-off.checkbox','data' => ['name' => 'license_rules_agreement','id' => 'licenseRulesAgreement','disabled' => !$manageLicense]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.on-off.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'license_rules_agreement','id' => 'licenseRulesAgreement','disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!$manageLicense)]); ?>
    Confirm that, according to the Envato License Terms, each license entitles one person for a single
    project. Creating multiple unregistered installations is a copyright violation.
    <a
        href="https://codecanyon.net/licenses/standard"
        target="_blank"
        rel="nofollow"
    >More info</a>.
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f)): ?>
<?php $component = $__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f; ?>
<?php unset($__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal30bfea974493fd8d236b3a0412570dd4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::form-group','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::button','data' => ['type' => 'submit','color' => 'primary','disabled' => !$manageLicense]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','color' => 'primary','disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!$manageLicense)]); ?>
        Activate license
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $component = $__componentOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>

    <div class="form-hint">
        <a
            href="<?php echo e($licenseURL = Botble\Base\Supports\Core::make()->getLicenseUrl()); ?>"
            target="_blank"
            class="d-inline-block mt-2"
        > Need reset your license?
        </a> <span class="text-body">Please log in to our <a href="<?php echo e($licenseURL); ?>" target="_blank">customer license manager site</a> to reset your license.</span>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal30bfea974493fd8d236b3a0412570dd4)): ?>
<?php $component = $__componentOriginal30bfea974493fd8d236b3a0412570dd4; ?>
<?php unset($__componentOriginal30bfea974493fd8d236b3a0412570dd4); ?>
<?php endif; ?>

<div>
    <p class="text-danger">Note: Your site IP will be added to blacklist after 5 failed attempts.</p>

    <p>
        A purchase code (license) is only valid for One Domain. Are you using this theme on a new domain?
        Purchase a
        <a
            href="<?php echo e(Botble\Base\Supports\Core::make()->getLicenseUrl('/buy')); ?>"
            target="_blank"
            rel="nofollow"
        >
            new license here
        </a>
        to get a new purchase code.
    </p>
</div>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/components/license/form.blade.php ENDPATH**/ ?>