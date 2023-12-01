@php
    $bgColor = $shortcode->background_color ?: '#E0F0F6'
@endphp

<section class="section d-block">
    <div class="box-banner-homepage2">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    @if ($subtitle = $shortcode->subtitle)
                        <span class="font-md-bold color-brand-2">{!! BaseHelper::clean($subtitle) !!}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h1 class="color-brand-2 mb-25 mt-15">{!! BaseHelper::clean($title) !!}</h1>
                    @endif

                    @if ($description = $shortcode->description)
                        <p class="font-md color-brand-2 mb-20"> {!! BaseHelper::clean($description) !!} </p>
                    @endif
                    <div class="mt-45 text-start">
                        @if (($googlePlayUrl = $shortcode->platform_google_play_url) && ($googlePlayLogo = $shortcode->platform_google_play_logo))
                            <a class="hover-up mr-10" href="{{ $googlePlayUrl }}">
                                <img src="{{ RvMedia::getImageUrl($googlePlayLogo) }}" alt="{{ __('Google play') }}">
                            </a>
                        @endif

                        @if (($appleStoreUrl = $shortcode->platform_apple_store_url) && ($appleStoreLogo = $shortcode->platform_apple_store_logo))
                            <a class="hover-up" href="{{ $appleStoreUrl }}">
                                <img src="{{ RvMedia::getImageUrl($appleStoreLogo) }}" alt="{{ __('Apple store') }}">
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="box-slider-homepage2" style="--bg-color: {{ $bgColor }}">
                <div class="box-swiper">
                    <div class="swiper-container swiper-group-3-style-2 swiper-group-3-slider">
                        <div class="swiper-wrapper">
                            @foreach ($tabs as $tab)
                                <div class="swiper-slide">
                                    <div class="card-offer hover-up">
                                        @if ($tab['image'])
                                            <div class="card-image">
                                                <img src="{{ RvMedia::getImageUrl($tab['image']) }}" alt="{{ $tab['title'] }}">
                                            </div>
                                        @endif
                                        <div class="card-info">
                                            @if ($tab['title'])
                                                <h5 class="color-brand-2 mb-15">{!! BaseHelper::clean($tab['title']) !!}</h5>
                                            @endif

                                            @if ($tab['description'])
                                                    <p class="font-sm color-grey-900 mb-35">{!! BaseHelper::clean($tab['description']) !!}</p>
                                            @endif

                                            @if ($tab['label'] && $tab['action'])
                                                <div class="box-button-offer mb-30">
                                                    <a href="{{ $tab['action'] }}" class="btn btn-link font-sm color-brand-2">{!! BaseHelper::clean($tab['label']) !!}
                                                        <span>
                                                            <svg class="icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination swiper-pagination-banner swiper-pagination-style-2"></div>
                    </div>
                    <div class="swiper-button-prev swiper-button-prev-style-1 swiper-button-prev-style-2">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                        </svg>
                    </div>
                    <div class="swiper-button-next swiper-button-next-style-1 swiper-button-next-style-2">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        @if ($image = $shortcode->banner_image)
            <div class="bg-image-home2" style="background-image: url({{ RvMedia::getImageUrl($image) }})"></div>
        @endif
    </div>
</section>
