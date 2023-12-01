<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="https://fonts.googleapis.com/css?family={{ urlencode(theme_option('primary_font', 'Epilogue')) }}:400,500,600,700" rel="stylesheet" type="text/css">

        <style>
            :root {
                --primary-color: {{ theme_option('primary_color', '#fec201') }};
                --primary-color-hover: {{ theme_option('primary_color_hover', '#066a4c') }};
                --secondary-color: {{ theme_option('secondary_color', '#034460') }};
                --primary-font: '{{ theme_option('primary_font', 'Epilogue') }}', sans-serif;
            }
        </style>

        {!! Theme::header() !!}
    </head>
    <body @if (BaseHelper::isRtlEnabled()) dir="rtl" @endif>
        {!! apply_filters(THEME_FRONT_BODY, null) !!}

        @if (theme_option('preloader_enabled', 'yes') === 'yes')
            {!! Theme::partial('preloader') !!}
        @endif

        @if (theme_option('header_top_enabled', true))
            {!! Theme::partial('topbar') !!}
        @endif

        {!! Theme::partial('header') !!}

        {!! Theme::partial('mobile-menu') !!}

        @yield('content')

        {!! Theme::partial('footer') !!}

        {!! Theme::footer() !!}
    </body>
</html>
