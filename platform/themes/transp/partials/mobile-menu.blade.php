<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
            <div class="mobile-logo">
                @if(($label = theme_option('header_button_label')) && ($url = theme_option('header_button_url')))
                    <a class="btn btn-brand-1 hover-up" href="{{ $url }}">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"> </path>
                        </svg>
                        {!! BaseHelper::clean($label) !!}
                    </a>
                @endif
            </div>
            <div class="burger-icon">
                <span class="burger-icon-top"></span>
                <span class="burger-icon-mid"></span>
                <span class="burger-icon-bottom"></span>
            </div>
            <div class="perfect-scroll">
                <div class="mobile-menu-wrap mobile-header-border">
                    <nav class="mt-15">
                        {!! Menu::renderMenuLocation('main-menu', [
                            'options' => ['class' => 'mobile-menu font-heading'],
                            'view' => 'main-menu',
                        ]) !!}
                    </nav>
                </div>
                <div class="site-copyright color-grey-400 mt-0">
                    {!! dynamic_sidebar('mobile_menu_sidebar') !!}
                    <div class="mb-0">
                        <span class="font-xs color-grey-500">{{ theme_option('copyright') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
