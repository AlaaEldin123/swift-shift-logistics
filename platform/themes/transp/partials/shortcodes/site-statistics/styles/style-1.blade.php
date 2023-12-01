<section class="section mt-100">
    <div class="container">
        @if ($title = $shortcode->title)
            <h2 class="title-favicon mb-20">{!! BaseHelper::clean($title) !!}</h2>
        @endif
        <div class="row align-items-end">
            <div class="col-lg-8 col-md-8 mb-30">
                @if ($subtitle = $shortcode->subtitle)
                    <p class="font-md color-gray-700">{!! BaseHelper::clean($subtitle) !!}</p>
                @endif
            </div>
            <div class="col-lg-4 col-md-4 mb-30 text-md-end text-start">
                @if (($buttonLabel = $shortcode->button_label) && ($buttonUrl = $shortcode->button_url))
                    <a class="btn btn-brand-1 hover-up" href="{{ $buttonUrl }}">
                        <svg class="mr-10" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"></path>
                        </svg> {!! BaseHelper::clean($buttonLabel) !!}
                    </a>
                @endif
            </div>
        </div>
        <div class="row mt-30 align-items-center">
            <div class="col-lg-6 mb-30">
                <div class="box-image-why">
                    <div class="box-image-why-background" style="background-image: url({{ RvMedia::getImageUrl($shortcode->background_icon) }})"></div>
                    @if ($image = $shortcode->image)
                        <img src="{{ RvMedia::getImageUrl($image) }}" alt="{{ $shortcode->title }}">
                    @endif

                    @if ($miniIcon = $shortcode->mini_icon_bottom)
                        <div class="quote shape-2" style="background-image: url({{ RvMedia::getImageUrl($miniIcon) }})"></div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="box-why-choose-us">
                    <div class="row">
                        @foreach(collect($tabs)->split(2) as $items)
                            <div @class(['col-lg-6', 'mb-60 mt-50' => ! $loop->first])>
                                @foreach($items as $item)
                                    <div @class(['cardWhyChooseUs', 'mb-60' => $loop->first, 'mb-30' => ! $loop->first])>
                                        @if ($item['data'])
                                            <h2 class="color-brand-2">
                                                <span class="count">{{ $item['data'] }}</span>
                                                <span>{{ $item['unit'] }}</span>
                                            </h2>
                                        @endif

                                        @if ($item['title'])
                                            <h5 class="color-brand-2 mb-20">{!! BaseHelper::clean($item['title']) !!}</h5>
                                        @endif

                                        @if ($item['description'])
                                            <p class="font-md color-grey-700">{!! BaseHelper::clean($item['description']) !!}</p>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
