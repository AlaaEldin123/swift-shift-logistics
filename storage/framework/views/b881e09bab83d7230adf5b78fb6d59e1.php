<?php if (isset($component)) { $__componentOriginal70c2ea61e73539201e401788110d6a79 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::section.action.save','data' => ['form' => $form]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::section.action.save'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['form' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($form)]); ?>
    <?php echo $__env->yieldContent('content'); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal70c2ea61e73539201e401788110d6a79)): ?>
<?php $component = $__componentOriginal70c2ea61e73539201e401788110d6a79; ?>
<?php unset($__componentOriginal70c2ea61e73539201e401788110d6a79); ?>
<?php endif; ?>
<?php /**PATH /home/baraa/Desktop/main/platform/core/setting/resources/views/forms/partials/action.blade.php ENDPATH**/ ?>