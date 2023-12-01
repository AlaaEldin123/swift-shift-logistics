<section class="section mt-60">
    <div class="container">
        @if ($title = $shortcode->title)
            <h2 class="title-favicon mb-20">{!! BaseHelper::clean($title) !!}</h2>
        @endif
        <div class="row">
            @foreach($testimonials as $testimonial)
                <div class="col-sm-6 mb-30">
                    <div class="card-testimonial-grid">
                        <div class="box-author mb-25">
                            <img src="{{ RvMedia::getImageUrl($testimonial->image) }}" alt="{{ $testimonial->name }}">
                            <div class="author-info">
                                <p>
                                    <span class="font-xl-bold color-brand-2 author-name">{{ $testimonial->name }}</span>
                                </p>
                                <span class="font-sm color-grey-500 department">{{ $testimonial->company }}</span>
                            </div>
                        </div>
                        <p class="font-md color-grey-700">{{ $testimonial->content }}</p>
                        <div class="card-bottom-info justify-content-between">
                            <div class="rating text-start">
                                @foreach(range(1, $testimonial->getMetaData('star', true)) as $star)
                                    <img src="{{ Theme::asset()->url('images/icons/star.svg') }}" alt="{{ $testimonial->name }}">
                                @endforeach
                                <br>
                                <span class="font-sm color-white">{{ __('For customer support') }}</span>
                            </div>
                            <span class="font-xs color-grey-500 rate-post text-end">{{ __('Rate: :star / 5', ['star' => $testimonial->getMetaData('star', true)]) }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
