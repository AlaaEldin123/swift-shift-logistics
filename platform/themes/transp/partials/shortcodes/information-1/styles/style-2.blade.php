<section class="section pt-60 pb-65">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-30">
                <div class="box-image-info-7" @if($shapeVertical = $shortcode->shape_image_vertical) style="background: url({{ RvMedia::getImageUrl($shapeVertical) }})" @endif>
                    @if($image = $shortcode->left_background)
                        <img src="{{ RvMedia::getImageUrl($image) }}" alt="{{ __('Image') }}">
                    @endif
                    <div class="quote shape-2" @if($shapeHorizontal = $shortcode->shape_image_horizontal) style="background-image: url({{ RvMedia::getImageUrl($shapeHorizontal) }})" @endif></div>
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="box-info-7">
                    @if ($subtitle = $shortcode->subtitle)
                        <span class="btn btn-tag">{!! BaseHelper::clean($subtitle) !!}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h2 class="color-grey-900 mb-30 mt-20">{!! BaseHelper::clean($title) !!}</h2>
                    @endif

                    @if ($description = $shortcode->description)
                        <p class="font-md color-grey-900 mb-40">{!! BaseHelper::clean($description) !!}</p>
                    @endif
                    <div class="row">
                        @foreach($tabs as $tab)
                            <div class="col-lg-6 mb-30">
                                @if($tab['title'])
                                    <h6 class="chart-title font-md-bold color-grey-900" @if($tab['icon']) style="background-image: url({{ RvMedia::getImageUrl($tab['icon']) }})" @endif>
                                        {!! BaseHelper::clean($tab['title']) !!}
                                    </h6>
                                @endif

                                @if ($tab['description'])
                                    <p class="font-xs color-grey-900">{!! BaseHelper::clean($tab['description']) !!}</p>
                                @endif
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-30 text-start d-flex">
                        @foreach(range(1, 2) as $i)
                            @php
                                $image = $shortcode->{"button_image_$i"};
                                $label = $shortcode->{"button_label_$i"};
                                $url = $shortcode->{"button_url_$i"};
                            @endphp

                            @continue(! $label)

                            <a @class(['hover-up', 'btn btn-brand-1' => ! $image, 'me-2' => ! $loop->last]) href="{{ $url }}">
                                @if($image)
                                    <img src="{{ RvMedia::getImageUrl($image) }}" alt="{{ $label ?: $shortcode->title }}"/>
                                @else
                                    {{ $label }}
                                @endif
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
