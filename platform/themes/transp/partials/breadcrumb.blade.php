@php
    $breadcrumbStyle = Theme::get('breadcrumbStyle', 'style-1');
    $breadcrumbColor = Theme::get('breadcrumbColor', '#E0F0F6');
    $breadcrumbBackground = Theme::get('breadcrumbBackground', theme_option('breadcrumb_background'));
    $breadcrumbImage = Theme::get('breadcrumbImage');
@endphp

<section class="section d-block position-relative">
    @if($breadcrumbStyle === 'style-1')
        <div
            style="
            background-color: {{ $breadcrumbColor }};
            background-image: url({{ RvMedia::getImageUrl($breadcrumbBackground) }});
            background-position: top center;
            background-size: cover"
            class="banner-howitwork3"
        >
            <div class="container">
                <div class="box-info-trackyourparcel">
                    @if($breadcrumbImage)
                        <img class="mb-15" src="{{ RvMedia::getImageUrl($breadcrumbImage) }}" alt="{{ Theme::get('pageTitle') ?: theme_option('site_name') }}" />
                    @endif
                    <h2 class="color-brand-2 mb-25">{!! BaseHelper::clean(Theme::get('pageTitle')) !!}</h2>
                    <p class="color-grey-700 font-md">{!! BaseHelper::clean(Theme::get('pageDescription')) !!}</p>
                </div>
            </div>
        </div>
    @elseif($breadcrumbStyle === 'style-2')
        <div
            style="background: {{ $breadcrumbColor }} url({{ RvMedia::getImageUrl($breadcrumbBackground) }}) no-repeat top center; background-size: cover;"
            class="box-pageheader-1 text-center"
        >
            @if($breadcrumbImage)
                <img class="mb-15" src="{{ RvMedia::getImageUrl($breadcrumbImage) }}" alt="{{ Theme::get('pageTitle') ?: theme_option('site_name') }}" />
            @endif
            <h2 class="color-brand-1 mt-15 mb-10">{!! BaseHelper::clean(Theme::get('pageTitle')) !!}</h2>
            <p class="font-md color-white">
                {!! BaseHelper::clean(Theme::get('pageDescription')) !!}
            </p>
        </div>
    @endif
</section>

