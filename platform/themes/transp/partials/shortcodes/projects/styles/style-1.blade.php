<section
    class="section bg-what-done pb-5 pt-110"
    @if ($shortcode->background)
        style="background-image: url('{{ RvMedia::getImageUrl($shortcode->background) }}');"
    @endif
>
    <div class="container">
        @if ($title = $shortcode->title)
            <h2 class="title-favicon mb-20">
                {!! BaseHelper::clean($title) !!}
            </h2>
        @endif

        <div class="row align-items-end">
            @if ($description = $shortcode->description)
                <div class="col-lg-8 col-md-8 mb-30">
                    <p class="font-md color-gray-700">
                        {!! BaseHelper::clean($description) !!}
                    </p>
                </div>
            @endif

            @if (($buttonLabel = $shortcode->button_label) && ($buttonUrl = $shortcode->button_url))
                <div class="col-lg-4 col-md-4 mb-30 text-md-end text-start">
                    <a class="btn btn-brand-1 hover-up" href="{{ $buttonUrl }}">
                        <svg class="mr-10" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"></path>
                        </svg>
                        {!! BaseHelper::clean($buttonLabel) !!}
                    </a>
                </div>
            @endif
        </div>
        @include(Theme::getThemeNamespace('partials.shortcodes.projects.includes.projects'))
    </div>
</section>
