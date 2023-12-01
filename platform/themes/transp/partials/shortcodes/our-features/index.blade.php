@php
    $bgColor = $shortcode->background_color ?: '#E0F0F6'
@endphp

<section class="section mt-85 pt-110 bg-info-4" style="--bg-color: {{ $bgColor }}">
    <div class="container">
        <div class="text-center">
            @if ($titlePrimary = $shortcode->title_primary)
                <h2 class="color-brand-2 mb-20">{!! BaseHelper::clean($titlePrimary) !!}</h2>
            @endif
        </div>
        <div class="box-why-choose-us-2 mt-50">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-7 mb-30">
                    <div class="box-info-pround">
                        @if ($subtitle = $shortcode->subtitle)
                            <span class="btn btn-tag color-grey-900">{!! BaseHelper::clean($subtitle) !!}</span>
                        @endif

                        @if ($title = $shortcode->title)
                            <h2 class="color-brand-2 mb-15 mt-20">{!! BaseHelper::clean($title) !!}</h2>
                        @endif

                        @if ($description = $shortcode->description)
                            <p class="font-md color-grey-900">{!! BaseHelper::clean($description) !!}</p>
                        @endif
                        <div class="mt-30">
                            <ul class="list-ticks list-ticks-3">
                                @foreach($tabs as $tab)
                                    <li>
                                        <svg class="icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <h6 class="color-brand-2">{!! BaseHelper::clean($tab['title']) !!}</h6>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="mt-30 text-start">
                            @if (($buttonPrimaryLabel = $shortcode->button_primary_label) && ($buttonPrimaryUrl = $shortcode->button_primary_url))
                                <a class="btn btn-brand-2 mr-20" href="{{ $buttonPrimaryUrl }}">{!! BaseHelper::clean($buttonPrimaryLabel) !!}</a>
                            @endif

                            @if (($buttonSecondaryLabel = $shortcode->button_secondary_label) && ($buttonSecondaryUrl = $shortcode->button_secondary_url))
                                <a class="btn btn-link-medium" href="{{ $buttonSecondaryUrl }}"> {!! BaseHelper::clean($buttonSecondaryLabel) !!}
                                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 mb-30">
                    <div class="box-images-info-4">
                        @if ($image = $shortcode->image)
                            <div class="box-images-inner">
                                <img class="img-main" src="{{ RvMedia::getImageUrl($image) }}" alt="{{ __('Banner image') }}">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
