<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Gallery\Models\Gallery;
use Botble\Gallery\Models\GalleryMeta;
use Botble\Slug\Facades\SlugHelper;

class GallerySeeder extends BaseSeeder
{
    public function run(): void
    {
        $this->uploadFiles('galleries');

        Gallery::query()->truncate();
        GalleryMeta::query()->truncate();

        $galleries = [
            'Shipping',
            'Transport',
            'Express',
            'Customs',
            'SupplyChain',
            'Logistics',
        ];

        $descriptions = [
            'Our expert solutions streamline operations, ensuring efficient transport, warehousing, and global shipping. Your success, our mission.',
            'From last mile to international shipping, our services excel with reliability, cutting-edge tech, and customer-centricity.',
            'We orchestrate intricate supply chains, optimizing processes for cost-effective, timely, and eco-conscious logistics.',
            'Tailored to your needs, our diverse services ensure secure, swift deliveries, empowering your business growth.',
            'Beyond borders, we connect businesses with the world through expert logistics, managing complexities with finesse.',
            'Unparalleled speed, strategic route planning, and real-time tracking define our service, setting new logistics standards.',
            'Eco-friendly practices underpin our services, contributing to both efficient operations and a greener planet.',
            'Our commitment extends beyond transport. It’s a promise of satisfaction, reliability, and logistical brilliance.',
        ];

        $faker = fake();

        $images = [];

        foreach (range(1, 9) as $i) {
            $images[] = [
                'img' => "galleries/$i.png",
                'description' => $faker->realText(),
            ];
        }

        foreach ($galleries as $item) {
            $gallery = Gallery::query()->create([
                'user_id' => 1,
                'name' => $item,
                'description' => $faker->randomElement($descriptions),
                'image' => $faker->randomElement($images)['img'],
                'is_featured' => true,
            ]);

            SlugHelper::createSlug($gallery);

            GalleryMeta::query()->create([
                'images' => $images,
                'reference_id' => $gallery->getKey(),
                'reference_type' => Gallery::class,
            ]);
        }

        $gallery = Gallery::query()
            ->create([
                'user_id' => 1,
                'name' => 'FAQs',
                'description' => 'Everything you need to know about the product and billing. Can not find the answer you are looking for? Please Contact our support team.',
                'image' => 'homepage/img-faq1.png',
                'is_featured' => false,
            ]);

        SlugHelper::createSlug($gallery);

        GalleryMeta::query()->create([
            'images' => [
                [
                    'img' => 'homepage/img-faq1.png',
                    'description' => $faker->realText(),
                ],
                [
                    'img' => 'homepage/img-faq2.png',
                    'description' => $faker->realText(),
                ],
                [
                    'img' => 'homepage/img-faq3.png',
                    'description' => $faker->realText(),
                ],
            ],
            'reference_id' => $gallery->getKey(),
            'reference_type' => Gallery::class,
        ]);
    }
}
