<section class="section pt-85 mb-80">
    <div class="container">
        <div class="row mt-50 align-items-center">
            <div class="col-lg-6 mb-30">
                @if ($subtitle = $shortcode->subtitle)
                    <h6 class="color-brand-2 mb-15">{!! BaseHelper::clean($subtitle) !!}</h6>
                @endif

                @if ($title = $shortcode->title)
                    <h2 class="color-brand-2 mb-25">{!! BaseHelper::clean($title) !!}</h2>
                @endif

                @if ($description = $shortcode->description)
                    <div class="row">
                        <div class="col-lg-9">
                            <p class="font-md color-grey-900">{!! BaseHelper::clean($description) !!}</p>
                        </div>
                    </div>
                @endif
                <div class="row mt-50">
                   {!! Theme::partial('shortcodes.who-we-are.includes.features-list', compact('tabs')) !!}
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="box-image-how">
                    @if ($image = $shortcode->image)
                        <img class="w-100" src="{{ RvMedia::getImageUrl($image) }}" alt="{{ $shortcode->title }}">
                    @endif

                        <div class="box-info-bottom-img">
                            @if ($youtubeUrlId)
                                <a class="btn btn-play popup-youtube hover-up" href="https://www.youtube.com/watch?v={{ $youtubeUrlId }}">
                                    <div class="image-play">
                                        @if ($buttonIcon = $shortcode->button_icon)
                                            <img class="mb-15" src="{{ RvMedia::getImageUrl($buttonIcon) }}" alt="{{ __('Play') }}">
                                        @else
                                            <img class="mb-15" src="{{ Theme::asset()->url('images/icon/play.svg') }}" alt="{{ __('Play') }}">
                                        @endif
                                    </div>
                                </a>
                            @endif

                            <div class="info-play">
                                @if ($buttonLabel = $shortcode->button_label)
                                    <h4 class="color-white mb-15">{!! BaseHelper::clean($buttonLabel) !!}</h4>
                                @endif

                                @if ($buttonHelperText = $shortcode->button_helper_text)
                                    <p class="font-sm color-white">{!! BaseHelper::clean($buttonHelperText) !!}</p>
                                @endif
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
