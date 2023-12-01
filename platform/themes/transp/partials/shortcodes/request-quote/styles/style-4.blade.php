<section class="section box-requestaquote-4">
    @if($background = $shortcode->background)
        <div class="box-bg-requestaquote-4" style="background-image: url('{{ RvMedia::getImageUrl($shortcode->background) }}')"></div>
    @endif
    <div class="container">
        <div class="text-center mt-100">
            @if($title = $shortcode->title)
                <h2 class="color-brand-2">
                    {!! BaseHelper::clean($title) !!}
                </h2>
            @endif
            <div class="box-button mt-30">
                @if($shortcode->primary_button_label && $shortcode->primary_button_url)
                    <a class="btn btn-brand-1-big hover-up mr-40" href="{{ $shortcode->primary_button_url }}">
                        {{ $shortcode->primary_button_label }}
                    </a>
                @endif

                @if($shortcode->secondary_button_icon && $shortcode->secondary_button_url && $shortcode->secondary_button_label)
                    <a class="btn btn-play popup-youtube hover-up color-brand-2" href="{{ $shortcode->secondary_button_url }}">
                        <img src="{{ RvMedia::getImageUrl($shortcode->secondary_button_icon) }}" alt="{{ $shortcode->secondary_button_url }}" />
                        {{ $shortcode->secondary_button_label }}
                    </a>
                @endif
            </div>
        </div>
        <div class="box-form-contact-leading"
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
                        <p class="font-md color-grey-700 mb-25">{!! BaseHelper::clean($formDescription) !!}</p>
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
