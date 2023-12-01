<section class="section mt-100">
    <div class="container position-relative">
        @if($title = $shortcode->title)
            <h2 class="title-favicon mb-20">{!! BaseHelper::clean($title) !!}</h2>
        @endif

        @if($description = $shortcode->description)
            <p class="font-md color-grey-700">{!! BaseHelper::clean($description) !!}</p>
        @endif
        <div class="row mt-50">
            <div class="col-lg-6">
                @foreach($faqs as $faq)
                    @if($loop->odd)
                        <div class="item-faqs-2 mb-30">
                            <h6 class="color-brand-2 mb-10">{!! BaseHelper::clean($faq->question) !!}</h6>
                            <p class="font-md color-grey-700">{!! BaseHelper::clean($faq->answer) !!}</p>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-lg-6">
                @foreach($faqs as $faq)
                    @if($loop->even)
                        <div class="item-faqs-2 mb-30">
                            <h6 class="color-brand-2 mb-10">{!! BaseHelper::clean($faq->question) !!}</h6>
                            <p class="font-md color-grey-700">{!! BaseHelper::clean($faq->answer) !!}</p>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
