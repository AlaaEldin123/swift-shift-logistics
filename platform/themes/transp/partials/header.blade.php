<header @class(['header sticky-bar', 'header-style-2' => Theme::get('headerStyle') === 'style-2'])>
    <div class="container">
        @if(Theme::get('headerStyle') === 'style-2')
            <div class="header-middle">
                @if ($logo = theme_option('logo'))
                    <div class="header-logo">
                        <a class="d-flex" href="{{ route('public.index') }}">
                            <img alt="{{ theme_option('site_name') }}" src="{{ RvMedia::getImageUrl($logo) }}" />
                        </a>
                    </div>
                @endif
                {!! dynamic_sidebar('header_sidebar') !!}
            </div>
        @endif

        <div class="main-header">
            <div class="header-left">
                @if ($logo = theme_option('logo'))
                    <div @class(['header-logo', 'd-inline-block d-md-none' => Theme::get('headerStyle') === 'style-2'])>
                        <a class="d-flex" href="{{ route('public.index') }}">
                            <img alt="{{ theme_option('site_name') }}" src="{{ RvMedia::getImageUrl($logo) }}" />
                        </a>
                    </div>
                @endif
                <div class="header-nav">
                    <nav class="nav-main-menu d-none d-xl-block">
                        {!! Menu::renderMenuLocation('main-menu', [
                            'options' => ['class' => 'main-menu'],
                            'view' => 'main-menu',
                        ]) !!}
                    </nav>

                    <div class="burger-icon burger-icon-white">
                        <span class="burger-icon-top"></span>
                        <span class="burger-icon-mid"></span>
                        <span class="burger-icon-bottom"></span>
                    </div>
                </div>
                <div class="header-right">
                    @if (is_plugin_active('blog'))
                        {!! Theme::partial('blog.search-box') !!}
                    @endif

                    @if (is_plugin_active('language'))
                        {!! Theme::partial('language-switcher') !!}
                    @endif

                    @if(($buttonLabel = theme_option('header_button_label')) && ($buttonUrl = theme_option('header_button_url')))
                        <div class="d-none d-sm-inline-block">
                            <a class="btn btn-brand-1 d-none d-xl-inline-block hover-up" href="{{ $buttonUrl }}">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"></path>
                                </svg>
                                {{ $buttonLabel }}
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>
