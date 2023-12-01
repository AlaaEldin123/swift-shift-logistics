<section class="section pt-60 pb-65 bg-whychooseus-2" @if($image = $shortcode->image) style="background-image: url({{ RvMedia::getImageUrl($image) }})" @endif>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-1"> </div>
            <div class="col-lg-5 mb-30">
                @if ($prefixIcon = $shortcode->prefix_title_icon)
                    <img class="mb-20" src="{{ RvMedia::getImageUrl($prefixIcon) }}" alt="{{ $shortcode->title }}">
                @endif

                @if ($title = $shortcode->title)
                    <h2 class="color-white mb-50">{!! BaseHelper::clean(str_replace($shortcode->highlight_text, '<span class="color-brand-1">' . $shortcode->highlight_text . '</span>', $title)) !!}</h2>
                @endif

                @if (($buttonLabel = $shortcode->button_label) && ($buttonUrl = $shortcode->button_url))
                    <a class="btn btn-brand-1 hover-up" href="{{ $buttonUrl }}">
                        <svg class="mr-10" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"></path>
                        </svg>
                        {!! BaseHelper::clean($buttonLabel) !!}
                    </a>
                @endif
            </div>
            <div class="col-lg-5 mb-30">
                <div class="row">
                    @foreach(collect($tabs)->split(2) as $items)
                        <div @class(['col-sm-6'])>
                            @foreach($items as $item)
                                <div @class([
                                        'box-item-number mb-30', 'box-item-number-white' => $loop->parent->first && $loop->first,
                                        'box-item-number-' . $loop->iteration + $loop->parent->index => $loop->parent->first && ! $loop->first,
                                        'box-item-number-' . $loop->iteration + $loop->parent->iteration => ! $loop->parent->first
                                    ])>
                                    <div class="item-number">
                                        @if ($item['data'])
                                            <h2 @class([
                                                    'color-brand-1' => $loop->parent->first && $loop->first,
                                                    'color-white' => !($loop->first && $loop->parent->first)
                                                ])>
                                                <span class="count">{{ $item['data'] }}</span>
                                                <span>{{ $item['unit'] }}</span>
                                            </h2>
                                        @endif

                                        @if ($item['title'])
                                            <h6 @class([
                                                    'color-brand-1' => $loop->parent->first && $loop->first,
                                                    'color-white' => ! ($loop->first && $loop->parent->first)
                                                ])>
                                                {!! BaseHelper::clean($item['title']) !!}
                                            </h6>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
