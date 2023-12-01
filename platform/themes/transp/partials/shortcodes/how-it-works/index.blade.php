@php
    $style = in_array($shortcode->style, ['style-1', 'style-2']) ? $shortcode->style : 'style-1';
    $bgColor = $shortcode->background_color ?: theme_option('secondary_color', '#034460');
    $bgImage = $shortcode->inner_background ? RvMedia::getImageUrl($shortcode->inner_background) : null;
@endphp

{!! Theme::partial('shortcodes.how-it-works.styles.' . $style, compact('shortcode', 'tabs', 'youtubeUrlId', 'bgColor', 'bgImage')) !!}
