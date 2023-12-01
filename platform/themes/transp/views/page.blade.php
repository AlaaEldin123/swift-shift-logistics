@php
    Theme::set('headerStyle', $page->getMetaData('header_style', 'style-1'));
    Theme::set('breadcrumbBackground', $page->getMetaData('breadcrumb_background', true));
    Theme::set('breadcrumbImage', $page->getMetaData('breadcrumb_image', true));
    Theme::set('breadcrumbStyle', $page->getMetaData('breadcrumb', true) ?: 'no');
    Theme::set('breadcrumbColor', $page->getMetaData('breadcrumb_color', true));
    Theme::set('hidePreFooterSidebar', (bool) $page->getMetaData('hide_pre_footer_sidebar', true));
    Theme::set('pageTitle', $page->name);
    Theme::set('pageDescription', $page->description);
@endphp

<main class="main">
    @if(Theme::get('breadcrumbStyle') !== 'no' && ($page->name || $page->description))
        @include(Theme::getThemeNamespace('partials.breadcrumb'), compact('page'))
    @endif
    {!!
        apply_filters(
            PAGE_FILTER_FRONT_PAGE_CONTENT,
            Html::tag('div', BaseHelper::clean($page->content), ['class' => 'ck-content'])->toHtml(),
            $page
        )
    !!}
</main>
