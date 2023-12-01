<section class="section pt-60 pb-65 mt-50">
    <div class="bg-testimonial-3" style="
    @if ( $bgImage = $shortcode->background)
        --bg-image: url('{{ RvMedia::getImageUrl($bgImage) }}');
    @endif
        --bg-color: {{ $bgColor }};
    ">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-xl-4 col-lg-12 mb-30">
                    <div class="d-flex align-items-center">
                        @if ($prefixIcon = $shortcode->prefix_title_icon)
                            <img class="mb-15" src="{{ RvMedia::getImageUrl($prefixIcon) }}" alt="{{ __('Icon') }}">
                        @endif

                        @if ($title = $shortcode->title)
                            <h2 class="color-white mb-10 ml-10">{!! BaseHelper::clean($title) !!}</h2>
                        @endif
                    </div>

                    @if ($description = $shortcode->description)
                        <p class="font-md color-white mb-30">{!! BaseHelper::clean($description) !!}</p>
                    @endif
                    <div class="mt-20">
                        @if (($buttonPrimaryLabel = $shortcode->button_primary_label) && ($buttonPrimaryUrl = $shortcode->button_primary_url))
                            <a class="btn btn-brand-1-big mr-20" href="{{ $buttonPrimaryUrl }}">{!! BaseHelper::clean($buttonPrimaryLabel) !!}</a>
                        @endif

                        @if (($buttonSecondaryLabel = $shortcode->button_secondary_label) && (($buttonSecondaryUrl = $shortcode->button_secondary_url)))
                            <a class="btn btn-link-medium btn-link-white" href="{{ $buttonSecondaryUrl }}"> {!! BaseHelper::clean($buttonSecondaryLabel) !!}
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>
                <div class="col-xl-8 col-lg-12 mb-30">
                    <div class="row align-items-start">
                        @foreach($testimonials->split(2) as $items)
                            <div class="col-lg-6 position-relative">
                                <div @class(['box-testimonial-3-left' => $loop->first, 'box-testimonial-3-right' => ! $loop->first])>
                                    @foreach($items as $testimonial)
                                        <div class="mb-30">
                                            <div class="card-testimonial-grid card-testimonial-3">
                                                <div class="box-author mb-25">
                                                    <div>
                                                        <img src="{{ RvMedia::getImageUrl($testimonial->image) }}" alt="{{ $testimonial->name }}">
                                                    </div>
                                                    <div class="author-info">
                                                        <p>
                                                            <span class="font-xl-bold color-brand-2 author-name">{{ $testimonial->name }}</span>
                                                        </p>
                                                        <span class="font-sm color-grey-500 department">{{ $testimonial->company }}</span></div>
                                                </div>
                                                <p class="font-sm color-grey-700">
                                                    {!! BaseHelper::clean($testimonial->content) !!}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
