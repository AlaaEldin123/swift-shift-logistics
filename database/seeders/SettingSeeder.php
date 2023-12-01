<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Blog\Models\Category;
use Botble\Blog\Models\Post;
use Botble\Slug\Facades\SlugHelper;
use Botble\Slug\Models\Slug;

class SettingSeeder extends BaseSeeder
{
    public function run(): void
    {
        $this->saveSettings([
            'admin_favicon' => $this->filePath('general/favicon.png'),
            'admin_logo' => $this->filePath('general/logo-footer.png'),
            SlugHelper::getPermalinkSettingKey(Post::class) => 'blog',
            SlugHelper::getPermalinkSettingKey(Category::class) => 'blog',
        ]);

        Slug::query()->where('reference_type', Post::class)->update(['prefix' => 'blog']);
        Slug::query()->where('reference_type', Category::class)->update(['prefix' => 'blog']);
    }
}
