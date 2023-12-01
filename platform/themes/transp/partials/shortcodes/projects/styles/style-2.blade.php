<section class="section pb-5 pt-110">
    <div class="container">
        <div class="text-center">
            @if ($prefixIcon = $shortcode->prefix_title_icon)
                <img class="mb-15" src="{{ RvMedia::getImageUrl($prefixIcon) }}" alt="{{ __('Icon') }}">
            @endif

            @if ($description = $shortcode->description)
                <p class="font-md color-grey-700">{!! BaseHelper::clean($description) !!}</p>
            @endif

            @if ($title = $shortcode->title)
                <h2 class="color-brand-2 mb-65 mt-15">{!! BaseHelper::clean($title) !!}</h2>
            @endif
        </div>
        @include(Theme::getThemeNamespace('partials.shortcodes.projects.includes.projects'))
    </div>
</section>
