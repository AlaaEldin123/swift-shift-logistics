<?php echo $__env->make('core/base::layouts.' . AdminAppearance::getCurrentLayout() . '.partials.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<header
    class="navbar navbar-expand-md d-none d-lg-flex d-print-none"
    data-bs-theme="dark"
>
    <div class="<?php echo e(AdminAppearance::getContainerWidth()); ?>">
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbar-menu"
            aria-controls="navbar-menu"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="flex-row navbar-nav">
            <div class="d-flex align-items-center me-3">
                <?php echo $__env->make('core/base::global-search.navbar-input', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>

        <div class="flex-row navbar-nav order-md-last">
            <?php if(BaseHelper::getAdminPrefix() != ''): ?>
                <div class="d-flex align-items-center me-3">
                    <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::button','data' => ['tag' => 'a','href' => url('/'),'icon' => 'ti ti-world','target' => '_blank']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'a','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url('/')),'icon' => 'ti ti-world','target' => '_blank']); ?>
                        <?php echo e(trans('core/base::layouts.view_website')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $component = $__componentOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
                </div>
            <?php endif; ?>
            <div class="d-none d-md-flex me-2">
                <?php echo $__env->make('core/base::layouts.partials.theme-toggle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php if(auth()->guard()->check()): ?>
                    <?php echo apply_filters(BASE_FILTER_TOP_HEADER_LAYOUT, null); ?>

                <?php endif; ?>
            </div>

            <?php echo $__env->make('core/base::layouts.partials.user-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div
            class="collapse navbar-collapse"
            id="navbar-menu"
        ></div>
    </div>
</header>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/layouts/vertical/partials/navbar.blade.php ENDPATH**/ ?>