<section class="section pt-110 pb-110">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="row">
                    @foreach(collect($tabs)->split(2) as $items)
                        <div @class(['col-xl-6 col-lg-12 col-md-6', 'mt-30' => !$loop->first])>
                            @foreach($items as $tab)
                                @continue(! $tab['title'])

                                <div class="item-reason">
                                    <div class="card-offer cardServiceStyle3 hover-up">
                                        @if ($tab['icon'])
                                            <div class="card-image">
                                                <img src="{{ RvMedia::getImageUrl($tab['icon']) }}" alt="{!! BaseHelper::clean($tab['title']) !!}" />
                                            </div>
                                        @endif
                                        <div class="card-info">
                                            <h5 class="color-brand-2 mb-15">{!! BaseHelper::clean($tab['title']) !!}</h5>

                                            @if ($tab['description'])
                                                <p class="font-sm color-grey-900">{!! BaseHelper::clean($tab['description']) !!}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box-info-pround box-whychooseus-3">
                    @if ($subtitle = $shortcode->subtitle)
                        <span class="btn btn-tag color-grey-900">{{ $subtitle }}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h2 class="color-brand-2 mb-15 mt-20">{!! BaseHelper::clean($title) !!}</h2>
                    @endif

                    @if ($description = $shortcode->description)
                        <p class="font-md color-grey-900">{!! BaseHelper::clean($description) !!}</p>
                    @endif

                    @if(! empty($tickedArray))
                        <div class="mt-30">
                            <ul class="list-ticks">
                                @foreach($tickedArray as $tickedItem)
                                    <li>
                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        {!! BaseHelper::clean($tickedItem) !!}
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    @endif
                    <div class="mt-30 text-start">
                        @if(($buttonPrimaryLabel = $shortcode->button_primary_label) && ($buttonPrimaryUrl = $shortcode->button_primary_url))
                            <a class="btn btn-brand-2 mr-20" href="{{ $buttonPrimaryUrl }}">{!! BaseHelper::clean($buttonPrimaryLabel) !!}</a>
                        @endif

                        @if(($buttonSecondaryLabel = $shortcode->button_secondary_label) && ($buttonSecondaryUrl = $shortcode->button_secondary_url))
                            <a class="btn btn-link-medium" href="{{ $buttonSecondaryUrl }}">
                                {!! BaseHelper::clean($buttonSecondaryLabel) !!}
                                <svg class="icon-16 ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
