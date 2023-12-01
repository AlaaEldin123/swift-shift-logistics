@php
    $style = in_array($shortcode->style, ['style-1', 'style-2']) ? $shortcode->style : 'style-1';
@endphp

{!! Theme::partial('shortcodes.information-1.styles.' . $style, compact('shortcode', 'tabs')) !!}
