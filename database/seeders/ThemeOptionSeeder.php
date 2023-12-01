<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Page\Models\Page;
use Botble\Setting\Facades\Setting;
use Botble\Theme\Facades\ThemeOption;
use Carbon\Carbon;

class ThemeOptionSeeder extends BaseSeeder
{
    public function run(): void
    {
        $this->uploadFiles('general');
        $this->uploadFiles('icons');
        $this->uploadFiles('shapes');
        $this->uploadFiles('banners');

        Setting::newQuery()->where('key', 'LIKE', ThemeOption::getOptionKey('%'))->delete();

        Setting::set(ThemeOption::prepareFromArray([
            'site_title' => 'TransP - Transport Courier Logistics',
            'seo_description' => 'With experience, we make sure to get every project done very fast and in time with high quality using our Botble CMS https://1.envato.market/LWRBY',
            'copyright' => sprintf('© %s Botble Technologies. Designed by Jthemes.', Carbon::now()->format('Y')),
            'favicon' => 'general/favicon.png',
            'website' => 'https://botble.com',
            'contact_email' => 'support@botble.com',
            'site_description' => 'We fuse our global network with our depth of expertise in air freight, ocean freight, railway transportation, trucking, and multi-mode transportation, also we are providing sourcing, warehousing, E-commercial fulfillment, and value-added service to our customers including kitting, assembly, customized package and business inserts, etc.',
            'phone' => '+01-246-357',
            'subtext_phone' => 'Any time 24/7',
            'address' => '4517 Washington Ave. Manchester, Kentucky 39495',
            'cookie_consent_message' => 'Your experience on this site will be improved by allowing cookies ',
            'cookie_consent_learn_more_url' => '/cookie-policy',
            'cookie_consent_learn_more_text' => 'Cookie Policy',
            'homepage_id' => Page::query()->value('id'),
            'logo' => 'general/logo.png',
            'logo_light' => 'general/logo-footer.png',
            'primary_color' => '#fec201',
            'primary_color_hover' => '#066a4c',
            'secondary_color' => '#034460',
            'primary_font' => 'Epilogue',
            '404_page_image' => 'general/404.png',
            'breadcrumb_background' => 'general/world-map.png',
            'header_button_label' => 'Get a quote',
            'header_button_url' => '/request-a-quote',
            'social_links' => [
                [
                    ['key' => 'name', 'value' => 'Facebook'],
                    ['key' => 'icon', 'value' => 'icons/fb.png'],
                    ['key' => 'url', 'value' => 'https://www.facebook.com'],
                ],
                [
                    ['key' => 'name', 'value' => 'Twitter'],
                    ['key' => 'icon', 'value' => 'icons/tw.png'],
                    ['key' => 'url', 'value' => 'https://twitter.com'],
                ],
                [
                    ['key' => 'name', 'value' => 'Youtube'],
                    ['key' => 'icon', 'value' => 'icons/youtube.png'],
                    ['key' => 'url', 'value' => 'https://www.youtube.com'],
                ],
                [
                    ['key' => 'name', 'value' => 'Instagram'],
                    ['key' => 'icon', 'value' => 'icons/inst.png'],
                    ['key' => 'url', 'value' => 'https://www.instagram.com'],
                ],
                [
                    ['key' => 'name', 'value' => 'Skype'],
                    ['key' => 'icon', 'value' => 'icons/skype.png'],
                    ['key' => 'url', 'value' => 'https://www.skype.com'],
                ],
            ],
        ]));

        Setting::save();
    }
}
