<?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.text-input','data' => ['name' => 'keyword','label' => $name = trans('core/base::base.global_search.search'),'labelSrOnly' => true,'placeholder' => $name,'inputGroup' => true,'groupFlat' => true,'tabindex' => '0','wrapperClassDefault' => '','dataBbToggle' => 'gs-navbar-input','autocomplete' => 'off']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'keyword','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name = trans('core/base::base.global_search.search')),'label-sr-only' => true,'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'input-group' => true,'group-flat' => true,'tabindex' => '0','wrapper-class-default' => '','data-bb-toggle' => 'gs-navbar-input','autocomplete' => 'off']); ?>
     <?php $__env->slot('append', null, []); ?> 
        <div class="input-group-text">
            <kbd>ctrl/cmd + k</kbd>
        </div>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/global-search/navbar-input.blade.php ENDPATH**/ ?>