@if (! Theme::get('hidePreFooterSidebar'))
    {!! dynamic_sidebar('pre_footer_sidebar') !!}
@endif

<footer class="footer">
    <div class="footer-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 width-23 mb-30">
                    <div class="mb-20">
                        <img src="{{ RvMedia::getImageUrl(theme_option('logo_light')) }}" alt="{{ theme_option('site_name') }}" />
                    </div>
                    <p class="font-xs mb-20 color-white">{{ theme_option('site_description') }}</p>
                    @if($socialLinks = json_decode(theme_option('social_links')))
                        <h6 class="color-brand-1">{{ __('Follow Us') }}</h6>
                        <div class="mt-15">
                            @foreach($socialLinks as $socialLink)
                                @php($socialLink = collect($socialLink)->pluck('value', 'key'))
                                <a
                                    href="{{ $socialLink->get('url') }}"
                                    class="icon-socials icon-footer"
                                    style="background-image: url('{{ RvMedia::getImageUrl($socialLink->get('icon')) }}')"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                ></a>
                            @endforeach
                        </div>
                    @endif
                </div>

                {!! dynamic_sidebar('footer_sidebar') !!}
            </div>
        </div>
    </div>
    <div class="footer-2">
        <div class="container">
            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 text-center text-lg-start">
                        <span class="color-grey-200 font-md">{{ theme_option('copyright') }}</span>
                    </div>
                    <div class="col-lg-6 col-md-12 text-center text-lg-end">
                        {!! Menu::renderMenuLocation('footer-menu', [
                            'view' => 'footer-menu',
                            'options' => ['class' => 'menu-bottom'],
                        ]) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div aria-live="polite" aria-atomic="true" class="position-relative">
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div class="toast position-relative" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-body text-white"></div>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="{{ __('Close') }}"></button>
        </div>
    </div>
</div>
