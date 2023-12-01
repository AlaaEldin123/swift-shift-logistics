<section class="section mt-50 mb-50">
    <div class="container">
        @foreach(range(1, $shortcode->quantity) as $i)
            @continue(! $shortcode->{"title_$i"})
                <div
                    @class([
                        'item-about-2-revert' => $loop->even,
                        'row',
                        'align-items-center',
                        'item-about-2'
                    ])
                >
                    @if($loop->odd)
                        @if($image = $shortcode->{"image_$i"})
                            <div class="col-lg-6">
                                <img src="{{ RvMedia::getImageUrl($image) }}" alt="{{ $shortcode->{"title_$i"} }}" />
                            </div>
                        @endif
                    @endif
                    <div class="col-lg-6">
                        <div class="box-info-about-2">
                            @if($badge = $shortcode->{"badge_$i"})
                                <span class="btn btn-tag">{{ $badge }}</span>
                            @endif

                            @if($title = $shortcode->{"title_$i"})
                                <h2 class="color-brand-2 mt-15 mb-25">{!! BaseHelper::clean($title) !!}</h2>
                            @endif

                            @if($description = $shortcode->{"description_$i"})
                                <p class="font-md color-grey-900 mb-20">
                                    {!! BaseHelper::clean($description) !!}
                                </p>
                            @endif

                            @if($shortcode->{"feature_1_$i"} || $shortcode->{"feature_2_$i"})
                                <div class="box-button mt-40">
                                    <div class="row">
                                        <div class="col-lg-6 mb-30">
                                            @if($feature1 = $shortcode->{"feature_1_$i"})
                                                <h6
                                                    style="background-image: url({{ RvMedia::getImageUrl($shortcode->{"icon_for_feature_1_$i"}) }});"
                                                    class="chart-title font-md-bold color-grey-900">{{ $feature1 }}</h6>
                                            @endif

                                            @if($featureDescription1 = $shortcode->{"feature_description_1_$i"})
                                                <p class="font-xs color-grey-900">{!! BaseHelper::clean($featureDescription1) !!}</p>
                                            @endif
                                        </div>

                                        <div class="col-lg-6 mb-30">
                                            @if($feature2 = $shortcode->{"feature_2_$i"})
                                                <h6
                                                    style="background-image: url({{ RvMedia::getImageUrl($shortcode->{"icon_for_feature_2_$i"}) }});"
                                                    class="feature-title font-md-bold color-grey-900">{{ $feature2 }}</h6>
                                            @endif

                                            @if($featureDescription2 = $shortcode->{"feature_description_2_$i"})
                                                <p class="font-xs color-grey-900">{!! BaseHelper::clean($featureDescription2) !!}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if(($shortcode->{"button_primary_label_$i"} && $shortcode->{"button_primary_url_$i"}) || ($shortcode->{"button_secondary_label_$i"} && $shortcode->{"button_secondary_url_$i"}))
                                <div class="box-button mt-40">
                                    @if($buttonPrimaryLabel = $shortcode->{"button_primary_label_$i"})
                                        <a class="btn btn-brand-2 mr-20" href="{{ $shortcode->{"button_primary_url_$i"} }}">
                                            {{ $buttonPrimaryLabel }}
                                        </a>
                                    @endif

                                    @if($buttonSecondaryLabel = $shortcode->{"button_secondary_label_$i"})
                                        <a class="btn btn-link-medium" href="{{ $shortcode->{"button_secondary_url_$i"} }}">
                                            {{ $buttonSecondaryLabel }}
                                            <svg class="icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                            </svg>
                                        </a>
                                    @endif
                                </div>
                            @endif

                            @if(($shortcode->{"platform_google_play_logo_$i"} && $shortcode->{"platform_google_play_url_$i"}) || ($shortcode->{"platform_apple_store_logo_$i"} && $shortcode->{"platform_apple_store_url_$i"}))
                                <div class="box-button d-flex mt-40">
                                    @if($appleStoreLogo = $shortcode->{"platform_apple_store_logo_$i"})
                                        <a class="hover-up mr-10" href="{{ $shortcode->{"platform_apple_store_url_$i"} ?: 'https://www.apple.com/vn/app-store/' }}">
                                            <img src="{{ RvMedia::getImageUrl($appleStoreLogo) }}" alt="{{ $shortcode->{"platform_apple_store_url_$i"} }}" />
                                        </a>
                                    @endif

                                    @if($googlePlayLogo = $shortcode->{"platform_google_play_logo_$i"})
                                        <a class="hover-up" href="{{ $shortcode->{"platform_google_play_url_$i"} ?: 'https://store.google.com/regionpicker' }}">
                                            <img src="{{ RvMedia::getImageUrl($googlePlayLogo ) }}" alt="{{ $shortcode->{"platform_google_play_url_$i"} }}" />
                                        </a>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                    @if($loop->even)
                        @if($image = $shortcode->{"image_$i"})
                            <div class="col-lg-6">
                                <img src="{{ RvMedia::getImageUrl($image) }}" alt="{{ $shortcode->{"title_$i"} }}" />
                            </div>
                        @endif
                    @endif
                </div>
        @endforeach
    </div>
</section>
