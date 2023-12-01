<section class="section mt-100 mb-50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-30">
                @if ($title = $shortcode->title)
                    <h2 class="color-brand-2 mb-25">{!! BaseHelper::clean($title) !!}</h2>
                @endif

                @if ($description = $shortcode->description)
                    <p class="font-md color-grey-900 mb-20">
                        {!! BaseHelper::clean($description) !!}
                    </p>
                @endif
                <div class="box-button mt-40">
                    @if (($buttonPrimaryLabel = $shortcode->button_primary_label) && ($buttonPrimaryUrl = $shortcode->button_primary_url))
                        <a class="btn btn-brand-1-big hover-up mr-40" href="{{ $buttonPrimaryUrl }}">
                            {!! BaseHelper::clean($buttonPrimaryLabel) !!}
                        </a>
                    @endif

                    @if (($icon = $shortcode->icon) && ($iconUrl = $shortcode->icon_url))
                        <a class="btn btn-play popup-youtube hover-up" href="{{ $iconUrl }}">
                            <img src="{{ RvMedia::getImageUrl($icon) }}" alt="{{ $iconUrl }}" />
                        </a>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 position-relative mb-30">
                <div class="row align-items-end">
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        @if($imageLeftTop = $shortcode->image_1)
                            <img class="mb-20" src="{{ RvMedia::getImageUrl($imageLeftTop) }}" alt="{{ $title ?: theme_option('site_title') }}" />
                        @endif

                        @if($imageLeftBottom = $shortcode->image_2)
                            <img src="{{ RvMedia::getImageUrl($imageLeftBottom) }}" alt="{{ $title ?: theme_option('site_title') }}" />
                        @endif
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7">
                        @if($imageRight = $shortcode->image_3)
                            <img src="{{ RvMedia::getImageUrl($imageRight) }}" alt="{{ $title ?: theme_option('site_title') }}" />
                        @endif
                    </div>
                </div>
                @if ($floatingIcon = $shortcode->floating_icon)
                    <div
                        class="quote-center shape-2"
                        style="background: url({{ RvMedia::getImageUrl($floatingIcon) }}) no-repeat center;"
                    >
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
