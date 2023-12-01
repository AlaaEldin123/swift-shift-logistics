<section class="section mt-50">
    <div class="container">
        <div class="box-form-request-quote-2 box-form-request-quote-3 box-form-request-quote-newsletter-custom">
            <div class="box-form-contact-leading">
                @if($formTitle = $shortcode->form_title)
                    <h2 class="title-favicon color-brand-2 mb-15">{!! BaseHelper::clean($formTitle) !!}</h2>
                @endif

                @if($formDescription = $shortcode->form_description)
                    <p class="font-md color-grey-700 mb-25">{!! BaseHelper::clean($formDescription) !!}</p>
                @endif
                <div class="row align-items-center">
                    {!! Theme::partial('request-quote-form', compact('shortcode', 'customFields', 'linkLabel')) !!}
                </div>
            </div>
        </div>
    </div>
</section>
