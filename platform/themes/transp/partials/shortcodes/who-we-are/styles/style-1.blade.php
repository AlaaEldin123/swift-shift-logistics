<section class="section mt-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-50">
                <div class="box-image-why">
                    @if ($image = $shortcode->image)
                        <img src="{{ RvMedia::getImageUrl($image) }}" alt="{{ $shortcode->title }}">
                    @endif
                    <div class="box-button-play">
                        @if ($youtubeUrlId)
                            <a class="btn btn-play popup-youtube hover-up" href="https://www.youtube.com/watch?v={{ $youtubeUrlId }}">
                                @if ($buttonIcon = $shortcode->button_icon)
                                    <img src="{{ RvMedia::getImageUrl($buttonIcon) }}" alt="{{ __('Play') }}">
                                @else
                                    <img src="{{ Theme::asset()->url('/images/icons/play.svg') }}" alt="{{ __('Play') }}">
                                @endif

                                @if($buttonLabel = $shortcode->button_label)
                                    <span class="color-white">{!! BaseHelper::clean($buttonLabel) !!}</span>
                                @endif
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-50">
                <div class="box-info-6">
                    @if ($subtitle = $shortcode->subtitle)
                        <span class="btn btn-tag">{!! BaseHelper::clean($subtitle) !!}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h2 class="color-grey-900 mb-20 mt-15">{!! BaseHelper::clean($title) !!}</h2>
                    @endif

                    @if ($description = $shortcode->description)
                        <p class="font-md color-grey-900 mb-35">{!! BaseHelper::clean($description) !!}</p>
                    @endif
                    <div class="row">
                        {!! Theme::partial('shortcodes.who-we-are.includes.features-list', compact('tabs')) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
