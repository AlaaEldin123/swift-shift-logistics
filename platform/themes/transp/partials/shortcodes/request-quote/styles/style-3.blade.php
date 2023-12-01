<section class="section mt-200 bg-2 bg-request-quote-3"
         @if ($shortcode->background) style="
            --bg-request-quote: url('{{ RvMedia::getImageUrl($shortcode->background) }}');
         "
          @endif>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="box-form-request-quote-2 box-form-request-quote-3">
                    <div class="box-form-contact-leading">
                        @if ($formTitle = $shortcode->form_title)
                            <h2 class="title-favicon color-brand-2 mb-15">{!! BaseHelper::clean($formTitle) !!}</h2>
                        @endif

                        @if ($formDescription = $shortcode->form_description)
                            <p class="font-md color-grey-700 mb-25">{!! BaseHelper::clean($formDescription) !!}</p>
                        @endif
                        <div class="row align-items-center">
                            {!! Theme::partial('request-quote-form', compact('shortcode', 'customFields', 'linkLabel')) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="list-how-works">
                    @foreach(range(1, $shortcode->quantity) as $i)
                        @php($title = $shortcode->{"title_$i"})
                        @continue(! $title)
                        <li>
                        <div class="image-how">
                            @if ($image = $shortcode->{"image_$i"})
                                <span class="img">
                                    <img src="{{ RvMedia::getImageUrl($image) }}" alt="{{  $shortcode->{"title_$i"} }}">
                                </span>
                            @endif
                        </div>
                        <div class="info-how">
                            @if ($title = $shortcode->{"title_$i"})
                                <h5 class="color-brand-2">{!! BaseHelper::clean($title) !!}</h5>
                            @endif

                            @if ($description = $shortcode->{"description_$i"})
                                <p class="font-md color-grey-700">{!! BaseHelper::clean($description) !!}</p>
                            @endif
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
