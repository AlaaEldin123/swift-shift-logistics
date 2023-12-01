<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <title><?php echo e(PageTitle::getTitle()); ?></title>
    <meta
        name="csrf-token"
        content="<?php echo e(csrf_token()); ?>"
    >

    <?php if(setting('admin_favicon') || config('core.base.general.favicon')): ?>
        <link
            href="<?php echo e($favicon = setting('admin_favicon') ? RvMedia::getImageUrl(setting('admin_favicon')) : url(config('core.base.general.favicon'))); ?>"
            rel="icon shortcut"
        >
        <meta
            property="og:image"
            content="<?php echo e($favicon); ?>"
        >
    <?php endif; ?>

    <meta
        name="description"
        content="<?php echo e($copyright = strip_tags(trans('core/base::layouts.copyright', ['year' => Carbon\Carbon::now()->year, 'company' => setting('admin_title', config('core.base.general.base_name')), 'version' => get_cms_version()]))); ?>"
    >
    <meta
        property="og:description"
        content="<?php echo e($copyright); ?>"
    >

    <?php echo $__env->make('core/base::components.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('head'); ?>

    <script>
        window.siteUrl = "<?php echo e(url('')); ?>";
        window.siteEditorLocale = "<?php echo e(apply_filters('cms_site_editor_locale', App::getLocale())); ?>";
        window.siteAuthorizedUrl = "<?php echo e(route('settings.license.verify')); ?>";
        window.isAuthenticated = <?php echo e(Auth::check() ? 'true' : 'false'); ?>;
    </script>

    <?php echo e($header ?? null); ?>


    <?php echo $__env->yieldPushContent('header'); ?>

    <?php echo apply_filters(BASE_FILTER_HEAD_LAYOUT_TEMPLATE, null); ?>

</head>

<body
    class="<?php echo $__env->yieldContent('body-class', $bodyClass ?? 'page-sidebar-closed-hide-logo page-content-white page-container-bg-solid'); ?> <?php echo e(session()->get('sidebar-menu-toggle') ? 'page-sidebar-closed' : ''); ?>"
    style="<?php echo $__env->yieldContent('body-style', $bodyStyle ?? null); ?>"
    <?php if(BaseHelper::adminLanguageDirection() === 'rtl'): ?> dir="rtl" <?php endif; ?>
    <?php echo Html::attributes($bodyAttributes ?? []); ?>

>
    <?php echo e($headerLayout ?? null); ?>


    <?php echo apply_filters(BASE_FILTER_HEADER_LAYOUT_TEMPLATE, null); ?>


    <div id="app">
        <?php echo e($slot); ?>

    </div>

    <?php echo $__env->make('core/base::elements.common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo Assets::renderFooter(); ?>


    <?php echo $__env->yieldContent('javascript'); ?>

    <div id="stack-footer">
        <?php echo e($footer ?? null); ?>

        <?php echo $__env->yieldPushContent('footer'); ?>
    </div>

    <?php echo apply_filters(BASE_FILTER_FOOTER_LAYOUT_TEMPLATE, null); ?>

</body>

</html>
<?php /**PATH /home/baraa/Desktop/main/platform/core/base/resources/views/components/layouts/base.blade.php ENDPATH**/ ?>