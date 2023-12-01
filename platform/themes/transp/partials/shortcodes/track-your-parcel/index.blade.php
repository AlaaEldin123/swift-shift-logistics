@php
    $background = $shortcode->background ?: theme_option('breadcrumb_background');
    $bgColor = $shortcode->background_color ?: '#e0f0f6';
@endphp

<section class="section d-block"
     style="
         @if ($background)
            --bg-breadcrumb: url({{ RvMedia::getImageUrl($background) }});
         @endif
         --bg-color: {{ $bgColor }};
     "
>
    <div class="position-relative">
        <div class="banner-trackyourparcel"></div>
        <div class="box-info-trackyourparcel">
            @if ($title = $shortcode->title)
                <h2 class="color-brand-2 mb-25">{!! BaseHelper::clean($title) !!}</h2>
            @endif

            @if ($description = $shortcode->description)
                <p class="color-grey-900 font-md">{!! BaseHelper::clean($description) !!}</p>
            @endif

            <div class="mt-40 d-flex justify-content-center">
                @if (($platformAppleStoreUrl = $shortcode->platform_apple_store_url) && ($platformAppleStoreLogo = $shortcode->platform_apple_store_logo))
                    <a class="hover-up mr-10" href="{{ $platformAppleStoreUrl }}">
                        <img src="{{ RvMedia::getImageUrl($platformAppleStoreLogo) }}" alt="{{ __('AppleStore') }}">
                    </a>
                @endif

                @if (($platformGooglePlayUrl = $shortcode->platform_google_play_url) && ($platformGooglePlayLogo = $shortcode->platform_google_play_logo))
                    <a class="hover-up" href="{{ $platformGooglePlayUrl }}">
                        <img src="{{ RvMedia::getImageUrl($platformGooglePlayLogo) }}" alt="{{ __('GooglePlay') }}">
                    </a>
                @endif

            </div>
        </div>
    </div>
</section>
