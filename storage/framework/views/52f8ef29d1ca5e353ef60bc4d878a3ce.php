<?php
$name = Str::contains($name = $menu['name'], '::') ?  BaseHelper::clean(trans($name)) : $name;
?>
<a
    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
        'nav-link' => $isNav = $isNav ?? true,
        'dropdown-item' => !$isNav,
        'dropdown-toggle' => $hasChildren,
        'nav-priority-' . $menu['priority'],
        'active show' => $menu['active'],
    ]); ?>"
    href="<?php echo e($hasChildren ? "#$menu[id]" : $menu['url']); ?>"
    id="main-menu-item-<?php echo e($menu['id']); ?>"
    <?php if($hasChildren): ?>
        data-bs-toggle="dropdown"
        data-bs-auto-close="<?php echo e($autoClose ?? 'false'); ?>"
        role="button"
        aria-expanded="<?php echo e($menu['active'] ? 'true' : 'false'); ?>"
    <?php endif; ?>
    title="<?php echo e($menu['title'] ?? $name); ?>"
>
    <?php if(AdminAppearance::showMenuItemIcon() && $menu['icon'] !== false): ?>
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            <?php if (isset($component)) { $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::icon','data' => ['name' => $menu['icon'] ?: 'ti ti-point']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($menu['icon'] ?: 'ti ti-point')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac)): ?>
<?php $component = $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac; ?>
<?php unset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac); ?>
<?php endif; ?>
        </span>
    <?php endif; ?>

    <span class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link-title text-truncate']); ?>">
        <?php echo $name; ?>

        <?php echo apply_filters(BASE_FILTER_APPEND_MENU_NAME, null, $menu['id']); ?>

    </span>
</a>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/layouts/partials/navbar-nav-item-link.blade.php ENDPATH**/ ?>