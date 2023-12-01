<div
    class="modal modal-blur fade media-modal rv-media-modal"
    id="rv_media_modal"
    tabindex="-1"
    role="dialog"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-dialog-centered modal-full"
        role="document"
    >
        <div class="modal-content bb-loading">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo e(trans('core/media::media.gallery')); ?></h5>
                <?php if (isset($component)) { $__componentOriginal78bbf683c893f1d7a5db54eb73c5b865 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::modal.close-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::modal.close-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal78bbf683c893f1d7a5db54eb73c5b865)): ?>
<?php $component = $__componentOriginal78bbf683c893f1d7a5db54eb73c5b865; ?>
<?php unset($__componentOriginal78bbf683c893f1d7a5db54eb73c5b865); ?>
<?php endif; ?>
            </div>
            <div
                class="p-0 modal-body media-modal-body media-modal-loading"
                id="rv_media_body"
            >
                <?php if (isset($component)) { $__componentOriginal7edd4d0d68777cdefae7087b439de89f = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::loading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7edd4d0d68777cdefae7087b439de89f)): ?>
<?php $component = $__componentOriginal7edd4d0d68777cdefae7087b439de89f; ?>
<?php unset($__componentOriginal7edd4d0d68777cdefae7087b439de89f); ?>
<?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php if (isset($component)) { $__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::modal.index','data' => ['id' => 'image-picker-add-from-url','title' => trans('core/media::media.add_from_url'),'formAction' => route('media.download_url'),'formAttrs' => ['id' => 'image-picker-add-from-url-form']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'image-picker-add-from-url','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/media::media.add_from_url')),'form-action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('media.download_url')),'form-attrs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['id' => 'image-picker-add-from-url-form'])]); ?>
    <input type="hidden" name="image-box-target">

    <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.text-input','data' => ['label' => trans('core/media::media.url'),'type' => 'url','name' => 'url','placeholder' => 'https://','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/media::media.url')),'type' => 'url','name' => 'url','placeholder' => 'https://','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>

     <?php $__env->slot('footer', null, []); ?> 
        <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::button','data' => ['type' => 'button','dataBsDismiss' => 'modal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','data-bs-dismiss' => 'modal']); ?>
            <?php echo e(trans('core/base::forms.cancel')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $component = $__componentOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::button','data' => ['type' => 'submit','color' => 'primary','dataBbToggle' => 'image-picker-add-from-url','form' => 'image-picker-add-from-url-form']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','color' => 'primary','data-bb-toggle' => 'image-picker-add-from-url','form' => 'image-picker-add-from-url-form']); ?>
            <?php echo e(trans('core/base::forms.save_and_continue')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $component = $__componentOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687)): ?>
<?php $component = $__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687; ?>
<?php unset($__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687); ?>
<?php endif; ?>

<?php echo $__env->make('core/media::config', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link
    href="<?php echo e(asset('vendor/core/core/media/css/media.css?v=' . time())); ?>"
    rel="stylesheet"
    type="text/css"
/>
<script src="<?php echo e(asset('vendor/core/core/media/js/integrate.js?v=' . time())); ?>"></script>
<?php /**PATH /home/baraa/Desktop/main/platform/core/media/resources/views/partials/media.blade.php ENDPATH**/ ?>