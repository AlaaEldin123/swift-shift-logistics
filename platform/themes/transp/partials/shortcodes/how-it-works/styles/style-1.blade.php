<section class="section pt-85 bg-worldmap" @if($shortcode->inner_background) style="background-image: url('{{ RvMedia::getImageUrl($shortcode->inner_background) }}')" @endif>
    <div class="container">
        <div @class(["text-$shortcode->title_direction"])>
            @if($icon = $shortcode->icon)
                <img class="mb-15" src="{{ RvMedia::getImageUrl($icon) }}" alt="{{ $shortcode->title }}" />
            @endif
            @if($title = $shortcode->title)
                <h2 class="color-brand-2 mb-20">
                    {!! BaseHelper::clean($title) !!}
                </h2>
            @endif
            @if($description = $shortcode->description)
                <p class="font-md color-grey-700">
                    {!! BaseHelper::clean($description) !!}
                </p>
            @endif
        </div>
        <div class="row mt-50">
            <div class="col-lg-6 mb-30">
                <div class="box-image-how">
                    @if($leftBackground = $shortcode->left_background)
                        <img class="w-100" src="{{ RvMedia::getImageUrl($leftBackground) }}" alt="{{ $leftBackground }}" />
                    @endif
                    <div class="box-info-bottom-img">
                        @if($shortcode->left_icon && $shortcode->youtube_video_url)
                            <div class="image-play">
                                <a class="btn btn-play popup-youtube hover-up" href="{{ $shortcode->youtube_video_url }}">
                                    <img class="mb-15" src="{{ RvMedia::getImageUrl($shortcode->left_icon) }}" alt="{{ $shortcode->left_title }}" />
                                </a>
                            </div>
                        @endif
                        <div class="info-play">
                            @if($leftTitle = $shortcode->left_title)
                                <h4 class="color-white mb-15">
                                    {!! BaseHelper::clean($leftTitle) !!}
                                </h4>
                            @endif
                            @if($leftDescription = $shortcode->left_description)
                                <p class="font-sm color-white">{!! BaseHelper::clean($leftDescription) !!}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <ul class="list-how-works">
                    @foreach($tabs as $tab)
                        @continue(! $tab['title'])
                        <li>
                            <div class="image-how">
                                @if ($tab['image'])
                                    <span class="img">
                                    <img src="{{ RvMedia::getImageUrl($tab['image']) }}" alt="{{ $tab['title'] }}" />
                                @endif
                            </div>
                            <div class="info-how">
                                <h5 class="color-brand-2">{!! BaseHelper::clean($tab['title']) !!}</h5>
                                @if ($tab['description'])
                                    <p class="font-md color-grey-700">{!! BaseHelper::clean($tab['description']) !!}</p>
                                @endif
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
