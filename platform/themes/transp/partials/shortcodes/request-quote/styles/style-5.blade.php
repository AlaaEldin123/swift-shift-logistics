<section class="section mt-200 bg-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="box-request-quote-2">
                    @if ($title = $shortcode->title)
                        <h2 class="color-grey-900 mb-20 mt-15">{!! BaseHelper::clean($title) !!}</h2>
                    @endif

                    @if ($description = $shortcode->description)
                        <p class="font-md color-grey-900 mb-35">{!! BaseHelper::clean($description) !!}</p>
                    @endif
                    <div class="row">
                        @foreach(range(1, $shortcode->quantity) as $i)
                            @php($title = $shortcode->{"title_$i"})
                            @continue(! $title)
                            <div class="col-lg-6 mb-30">
                                <h6 class="chart-title font-md-bold color-grey-900"
                                    style="
                                        @if($icon = $shortcode->{"image_$i"}) background-image: url({{ RvMedia::getImageUrl($icon) }}) @endif
                                    "
                                >
                                    {!! BaseHelper::clean($title) !!}
                                </h6>

                                @if ($description = $shortcode->{"description_$i"})
                                    <p class="font-xs color-grey-900">{!! BaseHelper::clean($description) !!}</p>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box-form-request-quote-2"
                     style="
                        @if ($image = $shortcode->background)
                            --bg-image: url({{ RvMedia::getImageUrl($image) }})
                        @endif
                     "
                >
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
        </div>
    </div>
</section>
