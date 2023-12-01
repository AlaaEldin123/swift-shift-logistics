<section class="section mt-85">
    <div class="container">
        <div class="text-center">
            @if ($icon = $shortcode->icon)
                <img class="mb-15" src="{{ RvMedia::getImageUrl($icon) }}" alt="{{ $shortcode->title }}" />
            @endif

            @if ($subtitle = $shortcode->subtitle)
                <p class="font-md color-grey-700">
                    {!! BaseHelper::clean($subtitle) !!}
                </p>
            @endif

            @if ($title = $shortcode->title)
                <h2 class="color-brand-2 mb-65 mt-15">
                    {!! BaseHelper::clean($title) !!}
                </h2>
            @endif
        </div>
        <div class="row mt-50 align-items-center">
            <div class="col-xl-7 col-lg-6 mb-30">
                <div class="box-images-pround">
                    <div class="box-images" style="--image-url: url('{{ RvMedia::getImageUrl($shortcode->shape_image_vertical) }}')">
                        <img class="img-main" src="{{ RvMedia::getImageUrl($shortcode->left_background) }}" alt="{{ $shortcode->title }}" />
                        <div class="image-2 shape-3">
                            <img src="{{ RvMedia::getImageUrl($shortcode->shape_image_horizontal) }}" alt="{{ $shortcode->title }}" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 mb-30">
                <div class="box-info-pround">
                    @if ($rightTitle = $shortcode->right_title)
                        <h3 class="color-brand-2 mb-15">
                            {!! BaseHelper::clean($rightTitle) !!}
                        </h3>
                    @endif

                    @if ($description = $shortcode->right_description)
                        <p class="font-md color-grey-500">
                            {!! BaseHelper::clean($description) !!}
                        </p>
                    @endif
                    <div class="mt-30">
                        <ul class="list-ticks">
                            @foreach(range(1, 10) as $i)
                                @continue(! $shortcode->{"feature_$i"})
                                <li>
                                    <svg class="icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    {{ $shortcode->{"feature_$i"} }}
                                </li>
                            @endforeach
                        </ul>
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
