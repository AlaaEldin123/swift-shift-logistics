<section
    @if($backgroundColor = $shortcode->background_color) style="background-color: {{ $shortcode->background_color }}" @endif
    class="section bg-leading-company pt-95">
    @if($background = $shortcode->background)
        <div class="box-bg-leading" style="background-image: url('{{ RvMedia::getImageUrl($shortcode->background) }}')"></div>
    @endif
    <div class="container">
        <div class="text-center mb-45">
            @if($title = $shortcode->title)
                <h2 class="color-brand-1 mb-15">
                    {!! BaseHelper::clean($title) !!}
                </h2>
            @endif
            @if($description = $shortcode->description)
                <p class="font-md color-white">{!! BaseHelper::clean($description) !!}</p>
            @endif
        </div>
        <div class="row">
            @foreach(range(1, $shortcode->quantity) as $i)
                @php($title = $shortcode->{"title_$i"})
                @continue(! $title)
                <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="cardLeadingCompany">
                        @if($image = $shortcode->{"image_$i"})
                            <div class="cardImage">
                                <span class="img">
                                    <img src="{{ RvMedia::getImageUrl($image) }}" alt="{{ $title }}" />
                                </span>
                            </div>
                        @endif
                        <div class="cardInfo">
                            @if($number = $shortcode->{"number_$i"})
                                <h3 class="color-brand-1">{{ $number }}</h3>
                            @endif
                            <p class="font-lg color-white">{{ $title }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div
            class="box-form-contact-leading"
            id="get-a-quote-form"
            @if($innerBackground = $shortcode->inner_background)
                style="background-image: url('{{ RvMedia::getImageUrl($innerBackground) }}');"
            @endif
        >
            <div class="row">
                <div class="col-lg-8">
                    @if($formTitle = $shortcode->form_title)
                        <h2 class="title-favicon color-brand-2 mb-15">
                            {!! BaseHelper::clean($formTitle) !!}
                        </h2>
                    @endif
                    @if($formDescription = $shortcode->form_description)
                        <p class="font-md color-grey-700 mb-25">
                            {!! BaseHelper::clean($formDescription) !!}
                        </p>
                    @endif

                    {!! Theme::partial('request-quote-form', compact('shortcode', 'customFields', 'linkLabel')) !!}
                </div>
                @if($formBackground = $shortcode->form_background)
                    <div class="col-lg-4">
                        <div class="box-image-contact">
                            <img src="{{ RvMedia::getImageUrl($formBackground) }}" alt="{{ $formTitle ?: theme_option('site_name') }}" />
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
