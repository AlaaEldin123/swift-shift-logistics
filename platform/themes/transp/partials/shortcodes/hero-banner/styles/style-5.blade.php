<section class="section bg-2 position-relative">
    <div class="container box-hero-blog position-relative">
        <div class="row">
            <div class="col-lg-6 col-md-7">
                @if ($subtitle = $shortcode->subtitle)
                    <h6 class="color-brand-2 mb-15">{!! BaseHelper::clean($subtitle) !!}</h6>
                @endif

                @if ($title = $shortcode->title)
                    <h2 class="color-brand-2 mb-25">{!! BaseHelper::clean($title) !!}</h2>
                @endif

                @if ($description = $shortcode->description)
                    <p class="font-md-color-grey-900">{!! BaseHelper::clean($description) !!}</p>
                @endif
            </div>
        </div>
        <div class="quote-blog shape-1" @if ($shape = $shortcode->shape_icon) style="background-image: url({{ RvMedia::getImageUrl($shape) }})" @endif></div>
    </div>
    <div class="bg-right-blog" @if ($bannerImage = $shortcode->banner_image) style='background-image: url({{ RvMedia::getImageUrl($bannerImage) }})' @endif></div>
</section>
