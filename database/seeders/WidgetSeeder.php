<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Widget\Models\Widget;

class WidgetSeeder extends BaseSeeder
{
    public function run(): void
    {
        Widget::query()->truncate();

        $data = [
            [
                'widget_id' => 'CustomMenuWidget',
                'sidebar_id' => 'footer_sidebar',
                'position' => 1,
                'data' => [
                    'id' => 'CustomMenuWidget',
                    'name' => 'Company',
                    'menu_id' => 'company',
                ],
            ],
            [
                'widget_id' => 'CustomMenuWidget',
                'sidebar_id' => 'footer_sidebar',
                'position' => 2,
                'data' => [
                    'id' => 'CustomMenuWidget',
                    'name' => 'Industries',
                    'menu_id' => 'industries',
                ],
            ],
            [
                'widget_id' => 'CustomMenuWidget',
                'sidebar_id' => 'footer_sidebar',
                'position' => 3,
                'data' => [
                    'id' => 'CustomMenuWidget',
                    'name' => 'Services',
                    'menu_id' => 'services',
                ],
            ],
            [
                'widget_id' => 'GalleriesWidget',
                'sidebar_id' => 'footer_sidebar',
                'position' => 4,
                'data' => [
                    'id' => 'GalleriesWidget',
                    'name' => 'Gallery',
                    'gallery_id' => 1,
                ],
            ],
            [
                'widget_id' => 'HeaderContactWidget',
                'sidebar_id' => 'header_sidebar',
                'position' => 1,
                'data' => [
                    'id' => 'HeaderContactWidget',
                    'name' => 'Header Contact',
                    'icon_block_1' => 'icons/address.png',
                    'text_block_1' => '65 Allerton Street 901 N Pitt Str, USA',
                    'icon_block_2' => 'icons/phone.png',
                    'text_block_2' => '65 Allerton Street 901 N Pitt Str, USA',
                ],
            ],
            [
                'widget_id' => 'AppsDownloadWidget',
                'sidebar_id' => 'mobile_menu_sidebar',
                'position' => 1,
                'data' => [
                    'id' => 'AppsDownloadWidget',
                    'text' => 'Download our Apps and get extra 15% Discount on your first Order…!',
                    'google_play_logo' => 'general/google-play-btn.png',
                    'google_play_url' => 'https://play.google.com/store/apps',
                    'app_store_logo' => 'general/appstore-btn.png',
                    'app_store_url' => 'https://apps.apple.com/us/app',
                ],
            ],
            [
                'widget_id' => 'ContactFormWidget',
                'sidebar_id' => 'pre_footer_sidebar',
                'position' => 1,
                'data' => [
                    'id' => 'ContactFormWidget',
                    'title' => 'Get in touch',
                    'shape_icon_top' => 'shapes/bg-newsletter-1.png',
                    'shape_icon_bottom' => 'shapes/bg-newsletter-2.png',
                ],
            ],
        ];

        foreach ($data as $item) {
            $item['theme'] = Widget::getThemeName();

            Widget::query()->create($item);
        }
    }
}
