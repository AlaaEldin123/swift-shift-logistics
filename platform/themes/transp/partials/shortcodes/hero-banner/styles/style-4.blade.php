<section class="section d-block">
    <div class="banner-1 banner-4" @if($background = $shortcode->banner_image) style="background-image: url({{ RvMedia::getImageUrl($background) }})" @endif >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    @if ($subtitle = $shortcode->subtitle)
                        <p class="font-md color-white mb-15">{!! BaseHelper::clean($subtitle) !!}</p>
                    @endif

                    @if ($title = $shortcode->title)
                        <h1 class="color-white mb-25">{!! BaseHelper::clean($title) !!}</h1>
                    @endif

                    @if ($description = $shortcode->description)
                        <div class="row">
                            <div class="col-lg-9">
                                <p class="font-md color-white mb-20">{!! BaseHelper::clean($description) !!}</p>
                            </div>
                        </div>
                    @endif
                    <div class="box-button mt-30">
                        @if (($buttonPrimaryLabel = $shortcode->button_primary_label) && ($buttonPrimaryUrl = $shortcode->button_primary_url))
                            <a class="btn btn-brand-1-big hover-up mr-40" href="{{ $buttonPrimaryUrl }}">{!! BaseHelper::clean($buttonPrimaryLabel) !!}</a>
                        @endif

                        @if ($youtubeUrlId && ($buttonLabel = $shortcode->button_label))
                            <a class="btn btn-play popup-youtube hover-up" href="https://www.youtube.com/watch?v={{ $youtubeUrlId }}">
                                @if($buttonIcon = $shortcode->button_icon)
                                    <img src="{{ RvMedia::getImageUrl($buttonIcon) }}" alt="{{ __('Play') }}">
                                @else
                                    <img src="{{ Theme::asset()->url('images/icons/play.svg') }}" alt="{{ __('Play') }}">
                                @endif
                                {!! BaseHelper::clean($buttonLabel) !!}
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box-slider-homepage2 box-slider-homepage-4">
        <div class="container">
            <div class="box-swiper">
                <div class="swiper-container swiper-group-4 swiper-group-3-style-2">
                    <div class="swiper-wrapper">
                        @foreach ($tabs as $tab)
                            <div class="swiper-slide">
                                <div class="card-offer hover-up">
                                    @if($tab['image'])
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

                                        @if($tab['label'] && $tab['action'])
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
                    <div class="swiper-pagination swiper-pagination-banner swiper-pagination-style-2 swiper-pagination-group-4"></div>
                </div>
                <div class="swiper-button-prev swiper-button-prev-style-1 swiper-button-prev-style-2 swiper-button-prev-group-4">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                    </svg>
                </div>
                <div class="swiper-button-next swiper-button-next-style-1 swiper-button-next-style-2 swiper-button-next-group-4">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
