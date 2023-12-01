<div class="mt-35">
    <div class="box-swiper">
        <div class="swiper-container swiper-group-4 pb-50">
            <div class="swiper-wrapper">
                @foreach(range(1, $shortcode->quantity) as $i)
                    @continue(! $shortcode->{"name_$i"})

                    <div class="swiper-slide">
                        <div class="cardGrid">
                            <div class="cardImage">
                                <img src="{{ RvMedia::getImageUrl($shortcode->{"image_$i"}) }}" alt="{{ $shortcode->{"name_$i"} }}">
                            </div>
                            <div class="cardInfo">
                                <h5 class="color-brand-2 mb-10">{{ $shortcode->{"name_$i"} }}</h5>
                                <p class="font-xs color-grey-500">
                                    {!! $shortcode->{"description_$i"} !!}
                                </p>
                                @if($link = $shortcode->{"url_$i"})
                                    <div class="box-button mt-30">
                                        <a class="btn btn-link font-sm color-brand-2" href="{{ $link }}">
                                            {{ __('View Details') }}
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
            <div class="box-pagination-customers text-center">
                <div class="swiper-button-prev swiper-button-prev-style-1 swiper-button-prev-group-4">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                    </svg>
                </div>
                <div class="swiper-button-next swiper-button-next-style-1 swiper-button-next-group-4">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
