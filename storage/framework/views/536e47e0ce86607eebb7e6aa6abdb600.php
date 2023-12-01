<?php if (isset($component)) { $__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.on-off.checkbox','data' => ['id' => $attributes['id'] ?? $name . '_' . md5($name),'name' => $name,'checked' => $value,'attributes' => new Illuminate\View\ComponentAttributeBag((array) $attributes)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.on-off.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes['id'] ?? $name . '_' . md5($name)),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(new Illuminate\View\ComponentAttributeBag((array) $attributes))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f)): ?>
<?php $component = $__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f; ?>
<?php unset($__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f); ?>
<?php endif; ?>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/forms/partials/on-off-checkbox.blade.php ENDPATH**/ ?>