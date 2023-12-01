<section class="section mt-85 mb-50">
    <div class="container">
        <div class="row mt-50 align-items-center">
            <div class="col-xl-7 col-lg-6 mb-30">
                <div class="box-images-info-3">
                    @if ($image = $shortcode->image)
                        <img class="img-main" src="{{ RvMedia::getImageUrl($image) }}" alt="{{ $shortcode->title }}">
                    @endif

                    @if (($boxLeftTitle = $shortcode->box_info_left_title) && ($boxLeftDescription = $shortcode->box_info_left_description))
                        <div class="box-info-3-bottom">
                            <h3 class="color-brand-2 mb-10">{!! BaseHelper::clean($boxLeftTitle) !!}</h3>
                            <p class="font-sm color-grey-900">{!! BaseHelper::clean($boxLeftDescription) !!}</p>

                            @if (($boxLeftButtonUrl = $shortcode->box_info_left_button_url) && ($boxLeftButtonLabel = $shortcode->box_info_left_button_label))
                                <div class="mt-30">
                                    <a class="btn btn-link font-sm color-brand-2" href="{{ $boxLeftButtonUrl }}">{!! BaseHelper::clean($boxLeftButtonLabel) !!}<span>
                                <svg class="icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    @endif

                </div>
            </div>
            <div class="col-xl-5 col-lg-6 mb-30">
                <div class="box-info-pround">
                    @if ($subtitle = $shortcode->subtitle)
                        <h6 class="color-grey-700 mb-25">{!! BaseHelper::clean($subtitle) !!}</h6>
                    @endif

                    @if ($title = $shortcode->title)
                        <h3 class="color-brand-2 mb-15">{!! BaseHelper::clean($title) !!}</h3>
                    @endif

                    <div class="row mt-30 mb-30">
                        @foreach($tabs as $tab)
                            <div class="col-lg-6 mb-30">
                                @if ($tab['title'])
                                    <h6 class="feature-title font-md-bold color-grey-900" @if($tab['image']) style="background-image: url({{ RvMedia::getImageUrl($tab['image']) }})" @endif>
                                        {!! BaseHelper::clean($tab['title']) !!}
                                    </h6>
                                @endif

                                @if($tab['description'])
                                    <p class="font-xs color-grey-900">{!! BaseHelper::clean($tab['description']) !!}</p>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    @if (($boxBottomTitle = $shortcode->box_info_bottom_title) && ($boxBottomDescription = $shortcode->box_info_bottom_description))
                        <div class="box-info-bottom-img box-info-bottom-img-2">
                            @if ($boxBottomIcon = $shortcode->box_info_bottom_icon)
                                <div class="image-play">
                                    <img class="mb-15" src="{{ RvMedia::getImageUrl($boxBottomIcon) }}" alt="{{ $boxBottomTitle }}">
                                </div>
                            @endif

                            <div class="info-play">
                                <h4 class="color-white mb-15">{!! BaseHelper::clean($boxBottomTitle) !!}</h4>
                                <p class="font-sm color-white">{!! BaseHelper::clean($boxBottomDescription) !!}</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
