<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Blog\Models\Post;
use Botble\Language\Models\LanguageMeta;
use Botble\Logistics\Models\Service;
use Botble\Logistics\Models\ServiceCategory;
use Botble\Menu\Facades\Menu;
use Botble\Menu\Models\Menu as MenuModel;
use Botble\Menu\Models\MenuLocation;
use Botble\Menu\Models\MenuNode;
use Botble\Page\Models\Page;
use Illuminate\Support\Arr;

class MenuSeeder extends BaseSeeder
{
    public function run(): void
    {
        $data = [
            [
                'name' => 'Main menu',
                'slug' => 'main-menu',
                'location' => 'main-menu',
                'items' => [
                    [
                        'title' => 'Home',
                        'children' => [
                            [
                                'title' => 'Homepage 1',
                                'reference_type' => Page::class,
                                'reference_id' => 1,
                            ],
                            [
                                'title' => 'Homepage 2',
                                'reference_type' => Page::class,
                                'reference_id' => 2,
                            ],
                            [
                                'title' => 'Homepage 3',
                                'reference_type' => Page::class,
                                'reference_id' => 3,
                            ],
                            [
                                'title' => 'Homepage 4',
                                'reference_type' => Page::class,
                                'reference_id' => 4,
                            ],
                        ],
                    ],
                    [
                        'title' => 'About Us',
                        'reference_type' => Page::class,
                        'reference_id' => 5,
                    ],
                    [
                        'title' => 'Services',
                        'children' => [
                            [
                                'title' => 'Services',
                                'reference_id' => $this->getPageId('Services'),
                                'reference_type' => Page::class,
                            ],
                            [
                                'title' => 'Service Details',
                                'url' => Service::query()->inRandomOrder()->first()->url,
                            ],
                        ],
                    ],
                    [
                        'title' => 'Pages',
                        'children' => [
                            [
                                'title' => 'Track Your Parcel',
                                'reference_id' => $this->getPageId('Track Your Parcel'),
                                'reference_type' => Page::class,
                            ],
                            [
                                'title' => 'Work Process',
                                'reference_id' => $this->getPageId('Work Process'),
                                'reference_type' => Page::class,
                            ],
                            [
                                'title' => 'Request a quote',
                                'reference_id' => $this->getPageId('Request a quote'),
                                'reference_type' => Page::class,
                            ],
                            [
                                'title' => 'Our team',
                                'reference_id' => $this->getPageId('Our team'),
                                'reference_type' => Page::class,
                            ],
                            [
                                'title' => "FAQ's",
                                'reference_id' => $this->getPageId('FAQ’s'),
                                'reference_type' => Page::class,
                            ],
                            [
                                'title' => 'Coming soon',
                                'reference_id' => $this->getPageId('Coming soon'),
                                'reference_type' => Page::class,
                            ],
                            [
                                'title' => 'Newsletter',
                                'reference_id' => $this->getPageId('Newsletter'),
                                'reference_type' => Page::class,
                            ],
                            [
                                'title' => 'Error 404',
                                'url' => '/404',
                            ],
                        ],
                    ],
                    [
                        'title' => 'Blog',
                        'children' => [
                            [
                                'title' => 'Blog',
                                'reference_id' => $this->getPageId('Blog'),
                                'reference_type' => Page::class,
                            ],
                            [
                                'title' => 'Blog Details',
                                'url' => Post::query()->inRandomOrder()->first()->url,
                            ],
                        ],
                    ],
                    [
                        'title' => 'Contact',
                        'reference_type' => Page::class,
                        'reference_id' => $this->getPageId('Contact Us'),
                    ],
                ],
            ],

            [
                'name' => 'Company',
                'slug' => 'company',
                'items' => [
                    [
                        'title' => 'Mission & Vision',
                        'url' => '/contact-us',
                    ],
                    [
                        'title' => 'Our Team',
                        'url' => '/our-team',
                    ],
                    [
                        'title' => 'Careers',
                        'url' => '/contact-us',
                    ],
                    [
                        'title' => 'Press & Media',
                        'url' => '/services',
                    ],
                    [
                        'title' => 'Advertising',
                        'url' => '/contact-us',
                    ],
                    [
                        'title' => 'Testimonials',
                        'url' => '/contact-us',
                    ],
                ],
            ],

            [
                'name' => 'Industries',
                'slug' => 'industries',
                'items' => [
                    [
                        'title' => 'Global coverage',
                        'url' => '/contact-us',
                    ],
                    [
                        'title' => 'Distribution',
                        'url' => '/contact-us',
                    ],
                    [
                        'title' => 'Accounting Tools',
                        'url' => '/contact-us',
                    ],
                    [
                        'title' => 'Freight Recovery',
                        'url' => '/contact-us',
                    ],
                    [
                        'title' => 'Supply Chain',
                        'url' => '/contact-us',
                    ],
                    [
                        'title' => 'Warehousing',
                        'url' => '/contact-us',
                    ],
                ],
            ],

            [
                'name' => 'Services',
                'slug' => 'services',
                'items' => [
                    [
                        'title' => 'Air Freight',
                        'reference_id' => $this->getServiceCategoryId('Air Freight Forwarding'),
                        'reference_type' => ServiceCategory::class,
                    ],
                    [
                        'title' => 'Ocean Freight',
                        'reference_id' => $this->getServiceCategoryId('Sea Forwarding'),
                        'reference_type' => ServiceCategory::class,
                    ],
                    [
                        'title' => 'Railway Freight',
                        'reference_id' => $this->getServiceCategoryId('Railway Logistics'),
                        'reference_type' => ServiceCategory::class,
                    ],
                    [
                        'title' => 'Warehousing',
                        'reference_id' => $this->getServiceCategoryId('Warehouse'),
                        'reference_type' => ServiceCategory::class,
                    ],
                    [
                        'title' => 'Distribution',
                        'reference_id' => $this->getServiceCategoryId('Land Transportation'),
                        'reference_type' => ServiceCategory::class,
                    ],
                    [
                        'title' => 'Value added',
                        'reference_id' => $this->getServiceCategoryId('Customs Brokerages'),
                        'reference_type' => ServiceCategory::class,
                    ],
                ],
            ],

            [
                'name' => 'Footer menu',
                'slug' => 'footer-menu',
                'location' => 'footer-menu',
                'items' => [
                    [
                        'title' => 'Privacy policy',
                        'reference_type' => Page::class,
                        'reference_id' => $this->getPageId('Privacy policy'),
                    ],
                    [
                        'title' => 'Cookies',
                        'reference_type' => Page::class,
                        'reference_id' => $this->getPageId('Cookies'),
                    ],
                    [
                        'title' => 'Terms of service',
                        'reference_type' => Page::class,
                        'reference_id' => $this->getPageId('Terms of service'),
                    ],
                ],
            ],
        ];

        MenuModel::query()->truncate();
        MenuLocation::query()->truncate();
        MenuNode::query()->truncate();

        foreach ($data as $index => $item) {
            $item['items'] = $this->mapMenuNodes($item['items']);

            $menu = MenuModel::query()->create(Arr::except($item, ['items', 'location']));

            if (isset($item['location'])) {
                $menuLocation = MenuLocation::query()->create([
                    'menu_id' => $menu->id,
                    'location' => $item['location'],
                ]);

                LanguageMeta::saveMetaData($menuLocation);
            }

            foreach ($item['items'] as $menuNode) {
                $this->createMenuNode($index, $menuNode, $menu->id);
            }

            LanguageMeta::saveMetaData($menu);
        }

        Menu::clearCacheMenuItems();
    }

    protected function createMenuNode(int $index, array $menuNode, int|string $menuId, int|string $parentId = 0): void
    {
        $menuNode['menu_id'] = $menuId;
        $menuNode['parent_id'] = $parentId;

        if (isset($menuNode['url'])) {
            $menuNode['url'] = str_replace(url(''), '', $menuNode['url']);
        }

        if (Arr::has($menuNode, 'children')) {
            $children = $menuNode['children'];
            $menuNode['has_child'] = true;

            unset($menuNode['children']);
        } else {
            $children = [];
            $menuNode['has_child'] = false;
        }

        $createdNode = MenuNode::query()->create($menuNode);

        if ($children) {
            foreach ($children as $child) {
                $this->createMenuNode($index, $child, $menuId, $createdNode->id);
            }
        }
    }

    protected function getPageId(string $name): int
    {
        return (int)Page::query()->where('name', $name)->value('id');
    }

    protected function getServiceCategoryId(string $name): int
    {
        return (int)ServiceCategory::query()->where('name', $name)->value('id');
    }

    protected function mapMenuNodes($items): array
    {
        if (empty($items)) {
            return $items;
        }

        foreach ($items as $position => $node) {
            $items[$position] = array_merge($node, [
                'position' => $position,
            ]);

            if (! empty($node['children'])) {
                $items[$position]['children'] = $this->mapMenuNodes($node['children']);
            }
        }

        return $items;
    }
}
