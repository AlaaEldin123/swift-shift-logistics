@php
    $style = in_array($shortcode->style, ['style-1', 'style-2']) ? $shortcode->style : 'style-1';
    $numberOfPackagesPerLine = 4;
    if($shortcode->number_of_packages_per_line > 0) {
        $numberOfPackagesPerLine = 12/$shortcode->number_of_packages_per_line;
    }
@endphp

{!! Theme::partial("shortcodes.pricing.styles.$style", compact('shortcode', 'packages', 'numberOfPackagesPerLine')) !!}
