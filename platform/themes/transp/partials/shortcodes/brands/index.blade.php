<div
    @class(['section pt-65 pb-35', 'bg-2' => ! $bgColor = $shortcode->background_color])
    @style(['background-color: ' . $bgColor => $bgColor])
>
    <div class="container">
        <div class="row align-items-center">
            @if($title = $shortcode->title)
                <div class="col-lg-3 mb-30 text-center text-lg-start">
                    <p class="font-2xl-bold color-brand-2">
                        {!! BaseHelper::clean(str_replace($shortcode->highlight_text, '<span class="color-brand-1">' . $shortcode->highlight_text . '</span>', $title)) !!}
                    </p>
                </div>
            @endif
            <div class="col-lg-9 mb-30">
                <div class="box-swiper">
                    <div class="swiper-container swiper-group-6 pb-0">
                        <div class="swiper-wrapper">
                            @foreach($tabs as $tab)
                                <a class="swiper-slide" href="{{ $tab['link'] }}" target="_blank">
                                    <img src="{{ RvMedia::getImageUrl($tab['image']) }}" alt="{{ $tab['name'] }}" />
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
