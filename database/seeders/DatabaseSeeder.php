<?php

namespace Database\Seeders;

use Botble\ACL\Database\Seeders\UserSeeder;
use Botble\Base\Supports\BaseSeeder;
use Botble\Language\Database\Seeders\LanguageSeeder;

class DatabaseSeeder extends BaseSeeder
{
    public function run(): void
    {
        $this->prepareRun();

        $this->call([
            UserSeeder::class,
            LanguageSeeder::class,
            PageSeeder::class,
            GallerySeeder::class,
            BlogSeeder::class,
            WidgetSeeder::class,
            ThemeOptionSeeder::class,
            SimpleSliderSeeder::class,
            TestimonialSeeder::class,
            FaqSeeder::class,
            TeamSeeder::class,
            LogisticsSeeder::class,
            SettingSeeder::class,
            MenuSeeder::class,
        ]);

        $this->finished();
    }
}
