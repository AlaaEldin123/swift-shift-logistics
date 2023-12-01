<?php

use Botble\Base\Facades\BaseHelper;
use Botble\Shortcode\View\View;
use Botble\Theme\Theme;

return [
    'inherit' => null,

    'events' => [
        'beforeRenderTheme' => function (Theme $theme) {
            $theme->asset()->usePath()->add('normalize-css', 'plugins/normalize.css');
            $theme->asset()->usePath()->add('swiper-css', 'plugins/swiper/swiper-bundle.min.css');
            $theme->asset()->usePath()->add('magnific-popup-css', 'plugins/magnific-popup/magnific-popup.css');
            $theme->asset()->usePath()->add('select2-css', 'plugins/select2/css/select2.min.css');
            $theme->asset()->usePath()->add('slick-css', 'plugins/slick/slick.css');
            $theme->asset()->usePath()->add('perfect-scrollbar-css', 'plugins/perfect-scrollbar/perfect-scrollbar.css');
            $theme->asset()->usePath()->add('animate.css', 'plugins/animate.css/animate.min.css');
            $theme->asset()->usePath()->add('icon-css', 'fonts/uicons/uicons-regular-rounded.css');

            if (BaseHelper::isRtlEnabled()) {
                $theme->asset()->usePath()->add('bootstrap-rtl', 'plugins/bootstrap/bootstrap.rtl.min.css');
            } else {
                $theme->asset()->usePath()->add('bootstrap', 'plugins/bootstrap/bootstrap.min.css');
            }

            $theme->asset()->usePath()->add('style', 'css/style.css');

            $theme->asset()->container('footer')->usePath()->add('jquery', 'plugins/jquery-3.7.0.min.js');
            $theme->asset()->container('footer')->usePath()->add('jquery-migrate', 'plugins/jquery-migrate-3.3.0.min.js');
            $theme->asset()->container('footer')->usePath()->add('bootstrap', 'plugins/bootstrap.bundle.min.js');
            $theme->asset()->container('footer')->usePath()->add('waypoints', 'plugins/waypoints.js');
            $theme->asset()->container('footer')->usePath()->add('wow', 'plugins/wow.js');
            $theme->asset()->container('footer')->usePath()->add('magnific-popup', 'plugins/magnific-popup/jquery.magnific-popup.min.js');
            $theme->asset()->container('footer')->usePath()->add('perfect-scrollbar', 'plugins/perfect-scrollbar/perfect-scrollbar.min.js');
            $theme->asset()->container('footer')->usePath()->add('select2', 'plugins/select2/js/select2.min.js');
            $theme->asset()->container('footer')->usePath()->add('isotope', 'plugins/isotope.js');
            $theme->asset()->container('footer')->usePath()->add('scrollup', 'plugins/scrollup.js');
            $theme->asset()->container('footer')->usePath()->add('swiper-bundle', 'plugins/swiper/swiper-bundle.min.js');
            $theme->asset()->container('footer')->usePath()->add('noUISlider', 'plugins/noUISlider.js');
            $theme->asset()->container('footer')->usePath()->add('slider', 'plugins/slider.js');
            $theme->asset()->container('footer')->usePath()->add('jquery.countdown', 'plugins/jquery.countdown.min.js');
            $theme->asset()->container('footer')->usePath()->add('jquery.elevatezoom', 'plugins/jquery.elevatezoom.js');
            $theme->asset()->container('footer')->usePath()->add('counterup', 'plugins/counterup.js');
            $theme->asset()->container('footer')->usePath()->add('slick', 'plugins/slick/slick.min.js');
            $theme->asset()->container('footer')->usePath()->add('main', 'js/main.js');
            $theme->asset()->container('footer')->usePath()->add('script', 'js/script.js');

            if (function_exists('shortcode')) {
                $theme->composer(['page', 'post', 'logistics.service', 'logistics.package'], function (View $view) {
                    $view->withShortcodes();
                });
            }
        },
    ],
];
