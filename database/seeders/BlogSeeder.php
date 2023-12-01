<?php

namespace Database\Seeders;

use Botble\ACL\Models\User;
use Botble\Base\Supports\BaseSeeder;
use Botble\Blog\Models\Category;
use Botble\Blog\Models\Post;
use Botble\Blog\Models\Tag;
use Botble\Media\Facades\RvMedia;
use Botble\Slug\Facades\SlugHelper;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BlogSeeder extends BaseSeeder
{
    public function run(): void
    {
        $this->uploadFiles('news');

        Post::query()->truncate();
        Category::query()->truncate();
        Tag::query()->truncate();

        $faker = fake();

        $categories = [
            [
                'name' => 'Service',
                'is_default' => true,
            ],
            [
                'name' => 'Shipping',
            ],
            [
                'name' => 'Courier',
                'parent_id' => 2,
            ],
            [
                'name' => 'Transportation',
            ],
            [
                'name' => 'Supply Chain',
                'parent_id' => 4,
            ],
            [
                'name' => 'Delivery',
            ],
            [
                'name' => 'Freight Forwarding',
                'parent_id' => 6,
            ],
        ];

        foreach ($categories as $index => $item) {
            $item['description'] = $faker->text();
            $item['author_id'] = 1;
            $item['author_type'] = User::class;
            $item['is_featured'] = ! isset($item['parent_id']) && $index != 0;

            $category = Category::query()->create($item);

            SlugHelper::createSlug($category);
        }

        $tags = [
            'Efficiency',
            'Delivery',
            'SupplyChain',
            'Logistics',
            'Shipping',
            'Sustainability',
            'International',
        ];

        foreach ($tags as $item) {
            $tag = Tag::query()->create([
                'author_id' => 1,
                'author_type' => User::class,
                'name' => $item,
            ]);

            SlugHelper::createSlug($tag);
        }

        $posts = [
            'China and Asia how to find reliable logistics company',
            'How to find reliable logistics company Asia',
            'Smooth Sailing: Tips for Shipping Internationally',
            'Optimizing Supply Chain: A Guide to Logistics',
            'The Future of Logistics: Embracing Technology',
            'Green Logistics: Solutions for a Greener Future',
            'Last-Mile Delivery Revolution in Urban Logistics',
            'Navigating Global Trade Challenges for Logistics',
            'Warehouse Management 101: Maximizing Productivity ',
            'Logistics: Customer Expectations in World',
            'The Role of AI in Transforming Logistics',
            'Resilient Supply Chains: Adapting to Modern Logistics',
            'Logistics Trends: Insights and Predictions for Future',
        ];

        $descriptions = [
            'Logistic services are essential components of the supply chain that facilitate the seamless movement and management of goods and information from point of origin to the final destination. These services encompass a wide range of activities, including transportation, warehousing, inventory management, order fulfillment, and distribution. Logistics providers play a crucial role in optimizing.',
            'Transportation services are a cornerstone of logistics, involving the movement of goods by road, air, sea, or rail. Freight forwarders and carriers ensure timely and reliable deliveries, coordinating intricate routes and handling various shipment types, from perishable goods to hazardous materials. The choice of transportation mode depends on factors such as distance, urgency.',
            'Warehousing services are integral to the storage and management of inventory. Logistic providers operate warehouses strategically positioned to reduce transit times and optimize supply chain flow. They employ modern warehouse management systems (WMS) and automated technologies to maximize space utilization, streamline picking and packing processes, and maintain accurate inventory.',
            'Inventory management services focus on ensuring that the right products are available in the right quantities at the right time. Logistic providers employ advanced forecasting techniques and data analytics to anticipate demand patterns and avoid stockouts or overstock situations. Efficient inventory management minimizes carrying costs, prevents lost sales.',
            'Order fulfillment services encompass the entire process from receiving customer orders to delivering the goods. Logistic providers employ order processing systems, pick-and-pack operations, and shipping expertise to ensure accurate and timely order execution. By reducing order cycle times and increasing order accuracy, logistic services contribute to improved customer loyalty and retention.',
            'Value-added services are a significant aspect of modern logistic offerings. These services include product labeling, kitting, assembly, and customization, adding value to products before they reach the end consumers. By offering value-added services, logistic providers cater to unique customer needs, allowing businesses to focus on core competencies while outsourcing specialized tasks.',
            'Reverse logistics services deal with the efficient handling of product returns and managing the flow of goods back into the supply chain. Logistic providers develop streamlined processes for product inspection, refurbishment, recycling, or disposal, contributing to sustainable practices and reducing the environmental impact of returned products.',
            'Global logistics services play a crucial role in supporting international trade and cross-border operations. Logistic providers navigate complex customs regulations, coordinate with international partners, and ensure smooth transportation and delivery across borders. These services enable businesses to expand their reach to global markets and capitalize on new opportunities.',
            'Supply chain visibility is a key area where logistic services excel. Advanced technologies and tracking systems provide real-time insights into the location and status of goods throughout the supply chain. Enhanced visibility empowers businesses to proactively address potential issues, optimize logistics processes, and provide accurate delivery estimates to customers.',
        ];

        foreach ($posts as $index => $item) {
            $post = Post::query()->create([
                'author_id' => 1,
                'author_type' => User::class,
                'name' => $item,
                'views' => $faker->numberBetween(100, 2500),
                'is_featured' => $index < 6,
                'image' => "news/news{$faker->numberBetween(1, 6)}.png",
                'description' => Str::limit($faker->randomElement($descriptions), 250),
                'content' => str_replace(
                    'news/',
                    RvMedia::getImageUrl('news/'),
                    File::get(database_path('seeders/contents/post.html'))
                ),
            ]);

            $post->categories()->sync([
                $faker->numberBetween(1, 4),
                $faker->numberBetween(5, 7),
            ]);

            $post->tags()->sync([1, 2, 3, 4, 5]);

            SlugHelper::createSlug($post);
        }
    }
}
