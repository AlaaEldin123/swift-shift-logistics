<section class="section mt-50 position-relative" dir="ltr">
    <div class="container">
        <div class="banner-786">
            <a href="{{ $shortcode->url }}">
                <div class="box-banner-ads"
                     @if ($rightBackground = $shortcode->right_background)
                         style="background-image: url({{ RvMedia::getImageUrl($rightBackground) }});"
                    @endif
                >
                    <div class="box-banner-left" @if ($leftBackground = $shortcode->left_background) style="background-image: url({{ RvMedia::getImageUrl($leftBackground) }})" @endif>
                        @if ($title = $shortcode->title)
                            <h6 class="color-brand-2">{!! BaseHelper::clean($title) !!}</h6>
                        @endif
                    </div>
                    <div class="box-banner-right"></div>
                </div>
            </a>
        </div>
    </div>
</section>
