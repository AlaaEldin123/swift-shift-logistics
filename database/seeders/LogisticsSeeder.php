<?php

namespace Database\Seeders;

use Botble\ACL\Models\User;
use Botble\Base\Facades\MetaBox;
use Botble\Base\Supports\BaseSeeder;
use Botble\Logistics\Enums\PackageDuration;
use Botble\Logistics\Models\CustomField;
use Botble\Logistics\Models\CustomFieldOption;
use Botble\Logistics\Models\Package;
use Botble\Logistics\Models\Service;
use Botble\Logistics\Models\ServiceCategory;
use Botble\Media\Facades\RvMedia;
use Botble\Slug\Facades\SlugHelper;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;

class LogisticsSeeder extends BaseSeeder
{
    public function run(): void
    {
        $this->uploadFiles('services');

        ServiceCategory::query()->truncate();
        Service::query()->truncate();
        Package::query()->truncate();
        CustomField::query()->truncate();
        CustomFieldOption::query()->truncate();

        $fake = fake();

        $categories = [
            [
                'name' => 'Sea Forwarding',
                'icon' => '/icons/cargo-ship.png',
            ],
            [
                'name' => 'Air Freight Forwarding',
                'icon' => '/icons/plane.png',
            ],
            [
                'name' => 'Land Transportation',
                'icon' => '/icons/delivery.png',
            ],
            [
                'name' => 'Railway Logistics',
                'icon' => '/icons/train.png',
            ],
            [
                'name' => 'Warehouse',
                'icon' => '/icons/pallet.png',
            ],
            [
                'name' => 'Cross Border',
                'icon' => '/icons/worldwide.png',
            ],
            [
                'name' => 'Customs Brokerages',
                'icon' => '/icons/order.png',
            ],
        ];

        foreach ($categories as $index => $item) {
            $index++;

            $serviceCategory = ServiceCategory::query()->create([
                'name' => $item['name'],
                'description' => $fake->text(400),
                'image' => "services/menu$index.png",
                'order' => $index,
            ]);

            if (array_key_exists('icon', $item)) {
                MetaBox::saveMetaBoxData($serviceCategory, 'icon', $item['icon']);
            }

            SlugHelper::createSlug($serviceCategory);
        }

        $services = [
            [
                'title' => 'Sea Freight Forwarding',
                'description' => 'TransP’s roots are in Sea Freight! Whether it’s full containers, consolidations, roll-on/roll-off <br> equipment or entire projects, moving shipments by sea is our “flagship” service.',
                'category_id' => $this->getCategoryId('Sea Forwarding'),
                'content' => File::get(
                    database_path('seeders/contents/service-1.html')
                ),
            ],
            [
                'title' => 'Air Freight Forwarding',
                'description' => 'TransP’s roots are in Sea Freight! Whether it’s full containers, consolidations, roll-on/roll-off <br> equipment or entire projects, moving shipments by sea is our “flagship” service.',
                'category_id' => $this->getCategoryId('Air Freight Forwarding'),
                'content' => File::get(
                    database_path('seeders/contents/service-1.html')
                ),
            ],
            [
                'title' => 'Land Transportation',
                'description' => 'TransP’s roots are in Sea Freight! Whether it’s full containers, consolidations, roll-on/roll-off <br> equipment or entire projects, moving shipments by sea is our “flagship” service.',
                'category_id' => $this->getCategoryId('Land Transportation'),
                'content' => File::get(
                    database_path('seeders/contents/service-1.html')
                ),
            ],
            [
                'title' => 'Railway Logistics',
                'description' => 'TransP’s roots are in Sea Freight! Whether it’s full containers, consolidations, roll-on/roll-off <br> equipment or entire projects, moving shipments by sea is our “flagship” service.',
                'category_id' => $this->getCategoryId('Railway Logistics'),
                'content' => File::get(
                    database_path('seeders/contents/service-1.html')
                ),
            ],
            [
                'title' => 'Warehouse & Distribution',
                'description' => 'TransP’s roots are in Sea Freight! Whether it’s full containers, consolidations, roll-on/roll-off <br> equipment or entire projects, moving shipments by sea is our “flagship” service.',
                'category_id' => $this->getCategoryId('Warehouse'),
                'content' => File::get(
                    database_path('seeders/contents/service-1.html')
                ),
            ],
            [
                'title' => 'Cross Border',
                'description' => 'TransP’s roots are in Sea Freight! Whether it’s full containers, consolidations, roll-on/roll-off <br> equipment or entire projects, moving shipments by sea is our “flagship” service.',
                'category_id' => $this->getCategoryId('Cross Border'),
                'content' => File::get(
                    database_path('seeders/contents/service-1.html')
                ),
            ],
            [
                'title' => 'Customs Brokerages',
                'description' => 'TransP’s roots are in Sea Freight! Whether it’s full containers, consolidations, roll-on/roll-off <br> equipment or entire projects, moving shipments by sea is our “flagship” service.',
                'category_id' => $this->getCategoryId('Customs Brokerages'),
                'content' => File::get(
                    database_path('seeders/contents/service-1.html')
                ),
            ],
        ];

        foreach ($services as $index => $item) {
            $index++;

            $images = [];

            foreach ($fake->randomElements(range(1, 2), 2) as $image) {
                $images[] = "services/img$image.png";
            }

            $service = Service::query()->create(array_merge($item, [
                'author_id' => 1,
                'author_type' => User::class,
                'description' => 'TransP’s roots are in ' . $item['title'] . '! Whether it’s full containers, consolidations, roll-on/roll-<br>off equipment or entire projects, moving shipments by sea is our “flagship” service.',
                'thumbnail' => "services/service$index.png",
                'images' => array_filter($images),
                'is_featured' => $fake->boolean(),
                'views' => rand(0, 10000),
                'content' => str_replace(
                    'services/',
                    RvMedia::getImageUrl('services/'),
                    $item['content'],
                ),
            ]));

            SlugHelper::createSlug($service);
        }

        $packages = [
            [
                'name' => 'Premium',
                'description' => 'Advanced features for pros who need more customization.',
                'price' => 125,
                'annual_price' => 1500,
                'metadata' => [
                    'price_monthly' => 125,
                    'price_yearly' => 1500,
                ],
                'duration' => PackageDuration::MONTHLY,
                'features' => <<<HTML
                + 15-Days Shipping Worldwide
                + 1 Kg Weight Max /Package
                + Free Bubble Warp
                + 24/7 Support
                HTML,
            ],
            [
                'name' => 'Essentials',
                'description' => 'All the basics for businesses that are just getting started.',
                'price' => 89,
                'annual_price' => 1068,
                'metadata' => [
                    'price_monthly' => 89,
                    'price_yearly' => 1068,
                ],
                'duration' => PackageDuration::MONTHLY,
                'features' => <<<HTML
                + 7-Days Shipping Worldwide
                + 3 Kg Weight Max /Package
                + Free Wood Crate
                + Get in touch to discuss
                + Use Personal And Commercial
                + 24/7 Support
                HTML,
                'is_popular' => true,
            ],
            [
                'name' => 'Enterprise',
                'description' => 'Advanced features for pros who need more customization.',
                'price' => 199,
                'annual_price' => 2388,
                'metadata' => [
                    'price_monthly' => 19,
                    'price_yearly' => 2388,
                ],
                'duration' => PackageDuration::MONTHLY,
                'features' => <<<HTML
                + 4-Days Shipping Worldwide
                + 1 Kg Weight Max /Package
                + Free Bubble Warp
                + 24/7 Support
                HTML,
            ],
            [
                'name' => 'Unlimited',
                'description' => 'Advanced features for pros who need more customization.',
                'price' => 4788,
                'annual_price' => 1500,
                'metadata' => [
                    'price_monthly' => 399,
                    'price_yearly' => 4788,
                ],
                'duration' => PackageDuration::MONTHLY,
                'features' => <<<HTML
                + 4-Days Shipping Worldwide
                + 1 Kg Weight Max /Package
                + Free Bubble Warp
                + 24/7 Support
                HTML,
            ],
        ];

        foreach ($packages as $item) {
            $package = Package::query()->create(array_merge(Arr::except($item, 'metadata'), [
                'price' => '$' . number_format($item['price'], 0),
                'annual_price' => '$' . number_format($item['annual_price'], 0),
                'content' => File::get(
                    database_path('seeders/contents/package-detail.html')
                ),
            ]));

            if (array_key_exists('metadata', $item)) {
                foreach ($item['metadata'] as $key => $value) {
                    MetaBox::saveMetaBoxData($package, $key, $value);
                }
            }

            SlugHelper::createSlug($package);
        }

        $customFields = [
            [
                'name' => 'Service',
                'type' => 'dropdown',
                'options' => [
                    [
                        'label' => 'Service 1',
                        'value' => 'Service 1',
                    ],
                    [
                        'label' => 'Service 2',
                        'value' => 'Service 2',
                    ],
                    [
                        'label' => 'Service 3',
                        'value' => 'Service 3',
                    ],
                    [
                        'label' => 'Service 4',
                        'value' => 'Service 4',
                    ],
                    [
                        'label' => 'Service 4',
                        'value' => 'Service 4',
                    ],
                ],
            ],
            [
                'name' => 'Commodities',
                'type' => 'dropdown',
                'options' => [
                    [
                        'label' => 'Commodities 1',
                        'value' => 'Commodities 1',
                    ],
                    [
                        'label' => 'Commodities 2',
                        'value' => 'Commodities 2',
                    ],
                    [
                        'label' => 'Commodities 3',
                        'value' => 'Commodities 3',
                    ],
                    [
                        'label' => 'Commodities 4',
                        'value' => 'Commodities 4',
                    ],
                    [
                        'label' => 'Commodities 4',
                        'value' => 'Commodities 4',
                    ],
                ],
            ],
            [
                'name' => 'Delivery to',
                'type' => 'dropdown',
                'options' => [
                    [
                        'label' => 'Delivery to 1',
                        'value' => 'Delivery to 1',
                    ],
                    [
                        'label' => 'Delivery to 2',
                        'value' => 'Delivery to 2',
                    ],
                    [
                        'label' => 'Delivery to 3',
                        'value' => 'Delivery to 3',
                    ],
                    [
                        'label' => 'Delivery to 4',
                        'value' => 'Delivery to 4',
                    ],
                    [
                        'label' => 'Delivery to 4',
                        'value' => 'Delivery to 4',
                    ],
                ],
            ],
            [
                'name' => 'Weight',
                'type' => 'text',
            ],
            [
                'name' => 'Quantity of goods',
                'type' => 'dropdown',
                'options' => [
                    [
                        'label' => 'Quantity of goods 1',
                        'value' => 'Quantity of goods 1',
                    ],
                    [
                        'label' => 'Quantity of goods 2',
                        'value' => 'Quantity of goods 2',
                    ],
                    [
                        'label' => 'Quantity of goods 3',
                        'value' => 'Quantity of goods 3',
                    ],
                    [
                        'label' => 'Quantity of goods 4',
                        'value' => 'Quantity of goods 4',
                    ],
                    [
                        'label' => 'Quantity of goods 4',
                        'value' => 'Quantity of goods 4',
                    ],
                ],
            ],
            [
                'name' => 'Extra Services',
                'type' => 'checkbox',
                'options' => [
                    [
                        'label' => 'Express Delivery (+$40)',
                        'value' => 'Express Delivery (+$40)',
                    ],
                    [
                        'label' => 'Add Insurance (+$20)',
                        'value' => 'Add Insurance (+$20)',
                    ],
                    [
                        'label' => 'Packaging (+$15)',
                        'value' => 'Packaging (+$15)',
                    ],
                ],
            ],
        ];

        foreach ($customFields as $item) {
            $customField = CustomField::query()->create(array_merge(Arr::except($item, 'options'), [
                'author_id' => 1,
                'author_type' => User::class,
                'required' => fake()->boolean(),
            ]));

            $customField->options()->createMany($item['options'] ?? []);
        }
    }

    protected function getCategoryId(string $name): int
    {
        return (int)ServiceCategory::query()->where('name', $name)->value('id');
    }
}
