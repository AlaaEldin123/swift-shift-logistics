@php
    $style = in_array($shortcode->style, ['style-1', 'style-2', 'style-3', 'style-4']) ? $shortcode->style : 'style-1';
    $bgColor = $shortcode->background_color ?: '#034460'
@endphp

{!! Theme::partial("shortcodes.testimonials.styles.$style", compact('shortcode', 'testimonials', 'bgColor')) !!}
