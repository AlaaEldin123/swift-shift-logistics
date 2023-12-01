@php
    $style = in_array($shortcode->style, ['style-1', 'style-2']) ? $shortcode->style : 'style-1';
    $tickedArray = explode(', ', $shortcode->ticked_line);
@endphp

{!! Theme::partial('shortcodes.why-choose-us.styles.' . $style, compact('shortcode', 'tabs', 'tickedArray')) !!}
