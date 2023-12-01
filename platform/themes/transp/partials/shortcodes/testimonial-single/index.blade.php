<section class="section mt-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                @if ($title = $shortcode->title)
                    <h2 class="title-favicon color-brand-2 mb-20">{!! BaseHelper::clean($title) !!}</h2>
                @endif

                @if ($description = $shortcode->description)
                    <p class="font-lg color-brand-2 pl-55">{!! BaseHelper::clean($description) !!}</p>
                @endif

                @if ($testimonial)
                    <div class="box-testimonial-4-item">
                        <div class="card-testimonial-grid">
                            <div class="box-author mb-25">
                                <div>
                                    <img src="{{ RvMedia::getImageUrl($testimonial->image) }}" alt="{{ $testimonial->title }}">
                                </div>
                                <div class="author-info">
                                    <p>
                                        <span class="font-xl-bold color-brand-2 author-name">{{ $testimonial->name }}</span>
                                    </p>
                                    <span class="font-sm color-grey-500 department">{{ $testimonial->company }}</span>
                                </div>
                            </div>
                            <p class="font-md color-grey-700">{!! BaseHelper::clean($testimonial->content) !!}</p>
                            <div class="card-bottom-info justify-content-between">
                                <div class="rating text-start">
                                    @foreach(range(0, 5) as $i)
                                        <img src="{{ Theme::asset()->url('images/icons/star.svg') }}" alt="{{ __('Star') }}">
                                    @endforeach
                                    <br>
                                    <span class="font-sm color-white">{{ __('For customer support') }}</span>
                                </div>
                                <span class="font-xs color-grey-500 rate-post text-end">{{ __('Rate: :form / :to', ['form' => 4.95, 'to' => 5]) }}</span>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-lg-6">
                <div class="box-img-testimonials-4">
                    @if ($backgroundShape = $shortcode->background_shape)
                        <div class="background-shape">
                            <img src="{{ RvMedia::getImageUrl($backgroundShape) }}" alt="{{ __('Background shape') }}">
                        </div>
                    @endif
                    @if ($image = $shortcode->image)
                        <img src="{{ RvMedia::getImageUrl($image) }}" alt="{{ __('Image') }}">
                    @endif
                    <div class="box-info-testimonial-4">
                        @if ($boxTitle = $shortcode->box_info_title)
                            <h3 class="color-brand-2 mb-10">{!! BaseHelper::clean($boxTitle) !!}</h3>
                        @endif

                        @if ($boxDescription = $shortcode->box_info_description)
                            <p class="font-sm color-grey-900">{!! BaseHelper::clean($boxDescription) !!}</p>
                        @endif

                        @if (($boxLabel = $shortcode->box_info_label) && ($buttonAction = $shortcode->box_info_action))
                            <div class="box-button mt-30">
                                <a href="{{ $buttonAction }}" class="btn btn-link font-sm color-brand-2"> {!! BaseHelper::clean($boxLabel) !!}
                                    <span>
                                        <svg class="icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
