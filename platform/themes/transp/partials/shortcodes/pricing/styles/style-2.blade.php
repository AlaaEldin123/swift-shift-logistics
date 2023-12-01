<section class="pricing-plan-section section pt-110 pb-50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-8">
                @if($title = $shortcode->title)
                    <h2 class="title-favicon mb-20">{!! BaseHelper::clean($title) !!}</h2>
                @endif

                @if($description = $shortcode->description)
                    <p class="font-md color-grey-700">{!! BaseHelper::clean($description) !!}</p>
                @endif
            </div>
            @if(isset($packages[0]) && $packages[0]->annual_price)
                <div class="col-lg-4 col-md-4 text-end">
                    <div class="text-center mt-10">
                        <span class="text-md color-grey-900 text-billed-month active">{{ __('Bill :duration', ['duration' => Str::title($packages[0]->duration)]) }}</span>
                        <label class="switch ml-20 mr-20">
                            <input id="cb_billed_type" type="checkbox" name="billed_type" />
                            <span class="slider round"></span>
                        </label>
                        <span class="text-md color-grey-900 text-billed-year">{{ __('Bill Annually') }}</span>
                    </div>
                </div>
            @endif
        </div>
        <div class="row mt-50 align-items-end pricing-style-2">
            @foreach($packages as $package)
                <div @class(['col-lg-6 col-md-6', "col-xl-$numberOfPackagesPerLine"])>
                    <div @class(['card-plan hover-up', 'popular' => $package->is_popular])>
                        <h3 class="color-brand-2 title-plan">{{ $package->name }}</h3>
                        <p class="font-md color-grey-500 desc-plan">{{ $package->description }}</p>
                        <div class="item-price-plan">
                            <div class="for-month display-month">
                                {!! Theme::partial('shortcodes.pricing.includes.pricing-plan', compact('package')) !!}
                            </div>
                            <div class="for-year">
                                {!! Theme::partial('shortcodes.pricing.includes.annual-pricing-plan', compact('package')) !!}
                            </div>
                        </div>
                        <div class="line-border"></div>
                        <div class="mt-30 mb-30">
                            <ul class="list-ticks list-ticks-2">
                                @foreach($package->feature_list as $feature)
                                    <li>
                                        @if($feature['is_available'])
                                            <svg class="icon-16" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path clip-rule="evenodd" fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"></path>
                                            </svg>
                                        @else
                                            <svg class="icon-16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        @endif
                                        {{ $feature['value'] }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="mt-20">
                            <a class="btn btn-brand-2-full hover-up" href="{{ $package->url }}">
                                {{ __('View Detail') }}
                                <svg class="w-6 h-6 icon-16 ml-10" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
