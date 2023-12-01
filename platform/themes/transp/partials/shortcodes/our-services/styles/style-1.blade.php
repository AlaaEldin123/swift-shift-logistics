<section class="section">
    <div class="container">
        <div class="box-pageheader-1 box-pageheader-services text-center">
            @if ($subtitle = $shortcode->subtitle)
                <span class="btn btn-tag">{!! BaseHelper::clean($subtitle) !!}</span>
            @endif

            @if ($title = $shortcode->title)
                <h2 class="color-brand-2 mt-15 mb-10">{!! BaseHelper::clean($title) !!}</h2>
            @endif

            @if ($description = $shortcode->description)
                <p class="font-md color-grey-900">{!! BaseHelper::clean($description) !!}</p>
            @endif
        </div>
    </div>
</section>
<section class="section mt-0">
    <div class="container">
        <div class="row">
            @foreach($services as $service)
                <div @class(['col-md-6 mb-50', 'col-xl-3' => $loop->index <= 3, 'col-xl-4' => $loop->index > 3])>
                    {!! Theme::partial('services.item-style-1', compact('service')) !!}
                </div>
            @endforeach
        </div>
    </div>
</section>

