<?php

namespace Database\Seeders;

use Botble\Base\Facades\MetaBox;
use Botble\Base\Supports\BaseSeeder;
use Botble\Testimonial\Models\Testimonial;
use Illuminate\Support\Arr;

class TestimonialSeeder extends BaseSeeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Guy Hawkins',
                'company' => 'Bank of America',
                'content' => 'Top-notch service! Swift delivery, professional handling. TransP made shipping a breeze. Highly recommended! ⭐⭐⭐⭐⭐',
                'title' => 'Satisfied client testimonial',
            ],
            [
                'name' => 'Eleanor Pena',
                'company' => 'Nintendo',
                'content' => 'Exceptional experience with TransP. They exceeded expectations in every way. Reliable, efficient, and hassle-free. ⭐⭐⭐⭐⭐',
                'title' => '98% of residents recommend us',
            ],
            [
                'name' => 'Cody Fisher',
                'company' => 'Starbucks',
                'content' => 'Impeccable service that goes the extra mile. TransP is my go-to for secure and timely shipping. Truly 5-star service! ⭐⭐⭐⭐⭐',
                'title' => 'Our success stories',
            ],
            [
                'name' => 'Albert Flores',
                'company' => 'Bank of America',
                'content' => 'Reliability at its finest. TransP delivered on time and with care. Outstanding customer service. A definite 5-star choice! ⭐⭐⭐⭐⭐',
                'title' => 'This is simply unbelievable',
            ],
        ];

        Testimonial::query()->truncate();

        foreach ($testimonials as $index => $item) {
            $item['image'] = sprintf('homepage/author%d.png', $index + 1);

            $testimonial = Testimonial::query()->create(Arr::except($item, ['title']));

            MetaBox::saveMetaBoxData($testimonial, 'title', Arr::get($item, 'title'));
            MetaBox::saveMetaBoxData($testimonial, 'star', 5);
        }
    }
}
