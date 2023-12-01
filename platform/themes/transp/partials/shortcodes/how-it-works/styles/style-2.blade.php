@php
    $lastIndex = count($tabs) - 1;
    $middleIndex = floor($lastIndex / 2);
@endphp

<section class="section">
    <div class="container">
        <div
            @class(['box-how-it-work-2 bg-how-it-work-2', 'bg-brand-2' => !$bgColor])
            @style(["background-color: $bgColor; background-image: url($bgImage)"])
        >
            <div class="text-center">
                @if ($title = $shortcode->title)
                    <h2 class="color-white">{!! BaseHelper::clean($title) !!}</h2>
                @endif
            </div>
            <div class="box-list-how-it-work">
                <ul class="list-how-works">
                    @foreach($tabs as $tab)
                        <li @class(['dashed-2' => $loop->index == $middleIndex])>
                            <div class="image-how">
                                @if($tab['image'])
                                    <span class="img">
                                        <img src="{{ RvMedia::getImageUrl($tab['image']) }}" alt="{{ $tab['title'] }}">
                                    </span>
                                @endif
                            </div>
                            <div class="info-how">
                                @if ($tab['title'])
                                    <h5 class="color-white">{!! BaseHelper::clean($tab['title']) !!}</h5>
                                @endif

                                @if($tab['description'])
                                    <p class="font-md color-white">{!! BaseHelper::clean($tab['description']) !!}</p>
                                @endif
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
            @if ($youtubeUrlId && ($buttonLabel = $shortcode->button_label))
                <div class="box-button-play-2">
                    <a class="btn btn-play popup-youtube hover-up" href="https://www.youtube.com/watch?v={{ $youtubeUrlId }}">
                        @if($buttonIcon = $shortcode->button_icon)
                            <img src="{{ RvMedia::getImageUrl($buttonIcon) }}" alt="{{ __('Play') }}">
                        @else
                            <img src="{{ Theme::asset()->url('images/icons/play.svg') }}" alt="{{ __('Play') }}">
                        @endif
                        <span class="color-brand-2"> {!! BaseHelper::clean($buttonLabel) !!}</span>
                    </a>
                </div>
            @endif
        </div>
    </div>
</section>
