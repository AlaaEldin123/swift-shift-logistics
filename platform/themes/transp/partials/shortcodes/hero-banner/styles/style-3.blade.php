<section class="section d-block">
    <div class="box-banner-homepage3">
        @if ($bannerImage = $shortcode->banner_image)
            <div class="banner-homepage-3">
                <img src="{{ RvMedia::getImageUrl($bannerImage) }}" alt="{{ $shortcode->title }}">
            </div>
        @endif
        <div class="container position-relative">
            <div class="row align-items-end">
                <div class="col-lg-5">
                    <div
                        @if($sharpIcon = $shortcode->shape_icon) style="--shape-icon: url({{ RvMedia::getImageUrl($sharpIcon) }})" @endif
                        class="banner-left">
                        @if ($title = $shortcode->title)
                            <h2 class="color-brand-1 mb-25">{!! BaseHelper::clean($title) !!}</h2>
                        @endif

                        @if ($description = $shortcode->description)
                            <p class="color-white font-md">{!! BaseHelper::clean($description) !!}</p>
                        @endif


                        <div class="box-button mt-50">
                            @if (($buttonPrimaryLabel = $shortcode->button_primary_label) && ($buttonPrimaryUrl = $shortcode->button_primary_url))
                                <a class="btn btn-brand-1-big hover-up mr-40 mb-30" href="{{ $buttonPrimaryUrl }}">{!! BaseHelper::clean($buttonPrimaryLabel) !!}</a>
                            @endif

                            @if ($youtubeUrlId && ($buttonLabel = $shortcode->button_label))
                                <a class="btn btn-play popup-youtube hover-up mb-30" href="https://www.youtube.com/watch?v={{ $youtubeUrlId }}">
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
                <div class="col-lg-7">
                    <div class="row align-items-center">
                        @foreach($tabs as $tab)
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-45">
                                <div class="item-feature">
                                    @if ($tab['image'])
                                        <div class="icon-feature">
                                            <img src="{{ RvMedia::getImageUrl($tab['image']) }}" alt="{{ $tab['title'] }}">
                                        </div>
                                    @endif
                                    <div class="info-feature">
                                        @if ($tab['data'])
                                            <h4 class="color-brand-2">
                                                <span class="count">{{ $tab['data'] }}</span>
                                                <span>{{ $tab['unit'] }}</span>
                                            </h4>
                                        @endif

                                        @if ($tab['title'])
                                            <p class="font-sm color-grey-700">{!! BaseHelper::clean($tab['title']) !!}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
