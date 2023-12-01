<section class="section pt-100">
    <div class="container">
        <div class="text-center">
            @if ($subtitle = $shortcode->subtitle)
                <span class="btn btn-tag color-grey-900">{!! BaseHelper::clean($subtitle) !!}</span>
            @endif

            @if ($title = $shortcode->title)
                <h2 class="color-brand-2 mb-15 mt-20">{!! BaseHelper::clean($title) !!}</h2>
            @endif
        </div>
        <div class="row mt-60">
            @foreach($tabs as $tab)
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="item-reason">
                        <div class="card-offer cardServiceStyle3 hover-up">
                            @if ($tab['icon'])
                                <div class="card-image">
                                    <img src="{{ RvMedia::getImageUrl($tab['icon']) }}" alt="{{ $tab['title'] }}">
                                </div>
                            @endif

                            <div class="card-info">
                                @if ($tab['title'])
                                    <h5 class="color-brand-2 mb-15">{!! BaseHelper::clean($tab['title']) !!}</h5>
                                @endif

                                @if ($tab['description'])
                                    <p class="font-sm color-grey-900">{!! BaseHelper::clean($tab['description']) !!}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
