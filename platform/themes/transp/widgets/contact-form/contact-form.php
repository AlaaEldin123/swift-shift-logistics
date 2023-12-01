<?php

use Botble\Theme\Facades\Theme;
use Botble\Widget\AbstractWidget;

class ContactFormWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Contact form'),
            'description' => __('Contact Us'),
            'title' => null,
            'background_color' => '#ffe799',
            'shape_icon_top' => null,
            'shape_icon_bottom' => null,
        ]);

        Theme::asset()
            ->usePath(false)
            ->add('contact-css', asset('vendor/core/plugins/contact/css/contact-public.css'), [], [], '1.0.0');
        Theme::asset()
            ->container('footer')
            ->usePath(false)
            ->add(
                'contact-public-js',
                asset('vendor/core/plugins/contact/js/contact-public.js'),
                ['jquery'],
                [],
                '1.0.0'
            );
    }
}
