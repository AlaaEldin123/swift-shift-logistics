<section class="section mt-80">
    <div class="container">
        <div class="text-center">
            @if ($icon = $shortcode->icon)
                <img class="mb-15" src="{{ RvMedia::getImageUrl(theme_option('favicon')) }}" alt="{{ theme_option('site_name') }}" />
            @endif

            @if ($title = $shortcode->title)
                <h2 class="color-brand-2 mb-25">{!! BaseHelper::clean($title) !!}</h2>
            @endif

            @if ($description = $shortcode->description)
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <p class="color-grey-700 font-md">{!! BaseHelper::clean($description) !!}</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

<section class="section mt-70">
    <div class="container">
        @foreach($tabs as $tab)
            @continue(! $tab['title'])
            <div class="row align-items-center d-flex justify-content-center">
                @if ($loop->odd)
                    <div class="col-lg-6 mb-60">
                        @if ($tab['icon'])
                            <img class="mb-15" src="{{ RvMedia::getImageUrl($tab['icon']) }}" alt="{{ $tab['title'] }}" />
                        @endif

                        <h3 class="color-brand-2 mb-15">{!! BaseHelper::clean($tab['title']) !!}</h3>

                        @if ($tab['description'])
                            <p class="font-md color-grey-700">{!! BaseHelper::clean($tab['description']) !!}</p>
                        @endif

                        @if ($tab['link_url'] && $tab['link_label'])
                            <div class="mt-20">
                                <a class="btn btn-link font-sm color-brand-2" href="{{ $tab['link_url'] }}">
                                        {!! BaseHelper::clean($tab['link_label']) !!}
                                    <span>
                                        <svg class="icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        @endif
                    </div>

                    @if ($tab['image'] && $tab['link_url'])
                        <div class="col-lg-6 mb-60">
                            <a href="{{ $tab['link_url'] }}">
                                <img src="{{ RvMedia::getImageUrl($tab['image']) }}" alt="{{ $tab['title'] }}" />
                            </a>
                        </div>
                    @endif
                @else
                    @if ($tab['image'] && $tab['link_url'])
                        <div class="col-lg-6 mb-60">
                            <a href="{{ $tab['link_url'] }}">
                                <img src="{{ RvMedia::getImageUrl($tab['image']) }}" alt="{{ $tab['title'] }}" />
                            </a>
                        </div>
                    @endif

                    <div class="col-lg-6 mb-60">
                        @if ($tab['icon'])
                            <img class="mb-15" src="{{ RvMedia::getImageUrl($tab['icon']) }}" alt="{{ $tab['title'] }}" />
                        @endif

                        <h3 class="color-brand-2 mb-15">{!! BaseHelper::clean($tab['title']) !!}</h3>

                        @if ($tab['description'])
                            <p class="font-md color-grey-700">{!! BaseHelper::clean($tab['description']) !!}</p>
                        @endif

                        @if ($tab['link_url'] && $tab['link_label'])
                            <div class="mt-20">
                                <a class="btn btn-link font-sm color-brand-2" href="{{ $tab['link_url'] }}">
                                    {!! BaseHelper::clean($tab['link_label']) !!}
                                    <span>
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
        @endforeach
    </div>
</section>
