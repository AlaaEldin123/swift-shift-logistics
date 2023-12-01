<section class="section mt-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-30">
                @if ($subtitle = $shortcode->subtitle)
                    <span class="btn btn-tag">{!! BaseHelper::clean($subtitle) !!}</span>
                @endif

                @if ($title = $shortcode->title)
                    <h3 class="color-grey-900 mb-25 mt-15">{!! BaseHelper::clean($title) !!}</h3>
                @endif

                @if ($description = $shortcode->description)
                    <p class="font-md color-grey-900">{!! BaseHelper::clean($description) !!}</p>
                @endif
                <div class="mt-70">
                    @if (($buttonPrimaryLabel = $shortcode->button_primary_label) && ($buttonPrimaryUrl = $shortcode->button_primary_url))
                        <a class="btn btn-brand-2 mr-20" href="{{ $buttonPrimaryUrl }}">{!! BaseHelper::clean($buttonPrimaryLabel) !!}</a>
                    @endif

                    @if (($buttonSecondaryLabel = $shortcode->button_secondary_label) && ($buttonSecondaryUrl = $shortcode->button_secondary_url))
                        <a class="btn btn-link-medium" href="{{ $buttonSecondaryUrl }}">{!! BaseHelper::clean($buttonSecondaryLabel) !!}
                            <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="box-img-testimonials-4" style="
                    @if ($shortcode->shape_icon)
                        --shape-icon: url('{{ RvMedia::getImageUrl($shortcode->shape_icon) }}');
                    @endif
                ">
                    @if ($bannerImage = $shortcode->banner_image)
                        <img src="{{ RvMedia::getImageUrl($bannerImage) }}" alt="{{ __('Banner image') }}">
                    @endif

                    <div class="box-info-testimonial-4">
                        @if ($boxInfoTitle = $shortcode->box_info_title)
                            <h3 class="color-brand-2 mb-10">{!! BaseHelper::clean($boxInfoTitle) !!}</h3>
                        @endif

                        @if ($boxInfoDescription = $shortcode->box_info_description)
                            <p class="font-sm color-grey-900">{!! BaseHelper::clean($boxInfoDescription) !!}</p>
                        @endif

                        @if (($boxInfoButtonLabel = $shortcode->box_info_button_label) && ($boxInfoButtonUrl = $shortcode->box_info_button_url))
                            <div class="box-button mt-30">
                                <a class="btn btn-link font-sm color-brand-2" href="{{ $boxInfoButtonUrl }}">{!! BaseHelper::clean($boxInfoButtonLabel) !!}
                                    <span>
                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
