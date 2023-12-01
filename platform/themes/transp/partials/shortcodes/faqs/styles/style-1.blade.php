<section class="section pt-80 mb-70 bg-faqs">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="box-faqs-left">
                    @if ($title = $shortcode->title)
                        <h2 class="title-favicon mb-20">
                            {!! BaseHelper::clean($title) !!}
                        </h2>
                    @endif

                    @if ($description = $shortcode->description)
                        <p class="font-md color-grey-700 mb-50">
                            {!! BaseHelper::clean($description) !!}
                        </p>
                    @endif

                    @if ($gallery)
                        @php($images = gallery_meta_data($gallery))
                        <div class="box-gallery-faqs">
                            @if (isset($images[0]))
                                <div class="image-top">
                                    <img src="{{ RvMedia::getImageUrl($images[0]['img']) }}" alt="{{ $gallery->name }}" />
                                </div>
                            @endif
                            <div class="image-bottom">
                                @if (count($images) > 1)
                                    @foreach(array_slice($images, 1) as $image)
                                        <div class="image-faq-{{ $loop->iteration }}">
                                            <img src="{{ RvMedia::getImageUrl($image['img']) }}" alt="{{ $gallery->name }}" />
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box-accordion">
                    <div class="accordion" id="accordionFAQ">
                        @foreach($faqs as $faq)
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="heading{{ $faq->getKey() }}">
                                    <button @class(['accordion-button text-heading-5', 'collapsed' => ! ($loop->first && $shortcode->expand_first_time)]) type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->getKey() }}" aria-expanded="false" aria-controls="collapse{{ $faq->getKey() }}">
                                        {!! BaseHelper::clean($faq->question) !!}
                                    </button>
                                </h5>
                                <div @class(['accordion-collapse collapse', 'show' => $loop->first && $shortcode->expand_first_time]) id="collapse{{ $faq->getKey() }}" aria-labelledby="heading{{ $faq->getKey() }}" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        {!! BaseHelper::clean($faq->answer) !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="line-border mt-50 mb-50"></div>
                    @if ($bottomTitle = $shortcode->bottom_title)
                        <h3 class="color-brand-2">
                            {!! BaseHelper::clean($bottomTitle) !!}
                        </h3>
                    @endif

                    <div class="mt-20">
                        @if (($buttonLabel = $shortcode->button_label) && ($buttonUrl = $shortcode->button_url))
                            <a class="btn btn-brand-1-big mr-20" href="{{ $buttonUrl }}">
                                {!! BaseHelper::clean($buttonLabel) !!}
                            </a>
                        @endif

                        @if (($linkLabel = $shortcode->link_label) && $linkUrl = $shortcode->link_url)
                            <a class="btn btn-link-medium" href="{{ $linkUrl }}">
                                {!! BaseHelper::clean($linkLabel) !!}
                                <svg class="icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
