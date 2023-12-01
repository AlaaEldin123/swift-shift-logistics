<section class="section mt-110">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-8">
                @if ($title = $shortcode->title)
                    <h2 class="title-favicon mb-20">
                        {!! BaseHelper::clean($title) !!}
                    </h2>
                @endif
                @if ($description = $shortcode->description)
                    <p class="font-md color-grey-700">
                        {!! BaseHelper::clean($description) !!}
                    </p>
                @endif
            </div>
            <div class="col-lg-4 col-md-4 text-end">
                <div class="box-button-sliders">
                    <div class="swiper-button-prev swiper-button-prev-style-1 swiper-button-prev-customers">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                        </svg>
                    </div>
                    <div class="swiper-button-next swiper-button-next-style-1 swiper-button-next-customers">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-60">
            {!! Theme::partial('blog.posts-slider', compact('posts')) !!}
        </div>
    </div>
</section>
