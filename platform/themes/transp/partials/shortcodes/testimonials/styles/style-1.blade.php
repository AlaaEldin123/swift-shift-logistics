<section
    class="section mt-50 bg-customers-say"
    style="
        @if($shortcode->background)
            background-image: url('{{ RvMedia::getImageUrl($shortcode->background) }}');
        @endif
        @if($shortcode->right_background)
            --left-background: url('{{ RvMedia::getImageUrl($shortcode->right_background) }}');
        @endif
        @if($shortcode->shape_image)
            --shape-image: url('{{ RvMedia::getImageUrl($shortcode->shape_image) }}');
        @endif
        --bg-color: {{ $bgColor }};
    "
>
    <div class="container">
        @if ($title = $shortcode->title)
            <h2 class="title-favicon color-white mb-20 title-padding-left">
                {!! BaseHelper::clean($title) !!}
            </h2>
        @endif

        @if ($description = $shortcode->description)
            <p class="font-lg color-white pl-55">
                {!! BaseHelper::clean($description) !!}
            </p>
        @endif
    </div>
    <div class="box-slide-customers mt-50">
        <div class="box-swiper">
            <div class="swiper-container swiper-group-3-customers pb-50">
                <div class="swiper-wrapper">
                    @foreach($testimonials as $testimonial)
                        <div class="swiper-slide">
                            <div class="card-testimonial-grid">
                                <div class="box-author mb-25">
                                    <div>
                                        <img src="{{ RvMedia::getImageUrl($testimonial->image) }}" alt="{{ $testimonial->name }}">
                                    </div>
                                    <div class="author-info">
                                        <p>
                                            <span class="font-xl-bold color-brand-2 author-name">{{ $testimonial->name }}</span>
                                        </p>
                                        <span class="font-sm color-grey-500 department">{{ $testimonial->company }}</span>
                                    </div>
                                </div>
                                <p class="font-md color-grey-700">
                                    {!! BaseHelper::clean($testimonial->content) !!}
                                </p>
                                <div class="card-bottom-info justify-content-between">
                                    <div class="rating text-start">
                                        @foreach(range(1, $testimonial->getMetaData('star', true)) as $star)
                                            <img src="{{ Theme::asset()->url('images/icons/star.svg') }}" alt="{{ $testimonial->name }}">
                                        @endforeach
                                        <br>
                                        <span class="font-sm color-white">{{ __('For customer support') }}</span>
                                    </div>
                                    <span class="font-xs color-grey-500 rate-post text-end">{{ __('Rate: :star / 5', ['star' => $testimonial->getMetaData('star', true)]) }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="box-pagination-customers">
                    <div class="swiper-button-prev swiper-button-prev-customers swiper-button-prev-style-1">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                        </svg>
                    </div>
                    <div class="swiper-button-next swiper-button-next-customers swiper-button-next-style-1">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
