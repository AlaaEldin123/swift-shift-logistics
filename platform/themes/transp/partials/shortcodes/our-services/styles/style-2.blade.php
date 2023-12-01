<section class="section pb-5 pt-50 mb-80">
    <div class="container">
        <div class="text-center">
            @if($icon = $shortcode->icon)
                <img class="mb-15" src="{{ RvMedia::getImageUrl($icon) }}" alt="{{ $shortcode->title ?: 'logo' }}">
            @endif

            @if ($title = $shortcode->title)
                <h2 class="color-brand-2 mb-15">{!! BaseHelper::clean($title) !!}</h2>
            @endif

            @if ($description = $shortcode->description)
                <p class="font-md color-grey-700 mb-35">{!! BaseHelper::clean($description) !!}</p>
            @endif
        </div>
        <div class="box-slider-homepage2 box-slider-homepage-4 box-slider-service-4">
            <div class="container">
                <div class="box-swiper">
                        <div class="swiper-container swiper-group-4 swiper-group-3-style-2">
                            <div class="swiper-wrapper">
                                @foreach ($services as $service)
                                <div class="swiper-slide">
                                    <div class="card-offer hover-up">
                                        @if($service->category && $categoryIcon = $service->category->getMetaData('icon',true))
                                            <div class="card-image">
                                                <img src="{{ RvMedia::getImageUrl($categoryIcon) }}" alt="{{ $service->title }}">
                                            </div>
                                        @endif
                                        <div class="card-info">
                                            <h5 class="color-brand-2 mb-15">{{ $service->title }}</h5>
                                            <p class="font-sm color-grey-900 mb-35">{!! BaseHelper::clean($service->description) !!}</p>
                                            <div class="box-button-offer mb-30">
                                                <a class="btn btn-link font-sm color-brand-2">
                                                    {{ __('View Details') }}
                                                    <span>
                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
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
    </div>
</section>
