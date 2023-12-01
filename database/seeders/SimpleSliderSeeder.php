<?php

namespace Database\Seeders;

use Botble\Base\Facades\MetaBox;
use Botble\Base\Supports\BaseSeeder;
use Botble\Language\Models\LanguageMeta;
use Botble\Setting\Facades\Setting;
use Botble\SimpleSlider\Models\SimpleSlider;
use Botble\SimpleSlider\Models\SimpleSliderItem;
use Illuminate\Support\Arr;

class SimpleSliderSeeder extends BaseSeeder
{
    public function run(): void
    {
        SimpleSlider::query()->truncate();
        SimpleSliderItem::query()->truncate();

        $sliders = [
            [
                'name' => 'Home slider',
                'key' => 'home-slider',
                'description' => 'The main slider on homepage',
            ],
        ];

        $sliderItems = [
            [
                'title' => 'Digital & Trusted Transport<br>Logistic Company',
                'subtitle' => 'Logistics & Transportation',
                'description' => 'Our experienced team of problem solvers and a commitment to always align with our client’s business goals and objectives is what drives mutual success.',
            ],
            [
                'title' => 'Digital & Trusted Transport<br>Logistic Company',
                'subtitle' => 'Logistics & Transportation',
                'description' => 'Our experienced team of problem solvers and a commitment to always align with our client’s business goals and objectives is what drives mutual success.',
            ],
        ];

        foreach ($sliders as $value) {
            $slider = SimpleSlider::query()->create($value);

            LanguageMeta::saveMetaData($slider);

            foreach ($sliderItems as $key => $item) {
                $key++;

                $sliderItem = SimpleSliderItem::query()->create(array_merge(Arr::except($item, 'subtitle'), [
                    'simple_slider_id' => $slider->getKey(),
                    'link' => '/contact-us',
                    'image' => sprintf('banners/slider-%d.png', $key),
                    'order' => $key,
                ]));

                MetaBox::saveMetaBoxData($sliderItem, 'subtitle', $item['subtitle']);
                MetaBox::saveMetaBoxData($sliderItem, 'button_label', __('Contact Us'));
                MetaBox::saveMetaBoxData($sliderItem, 'link_label', __('How It Works'));
                MetaBox::saveMetaBoxData($sliderItem, 'link_url', __('https://www.youtube.com/watch?v=v2qeqkKgw7U'));
                MetaBox::saveMetaBoxData($sliderItem, 'link_icon', 'icons/play.png');
            }
        }

        Setting::set('simple_slider_using_assets', false)->save();
    }
}
