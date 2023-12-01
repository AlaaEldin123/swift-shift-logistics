<?php

namespace Database\Seeders;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Facades\MetaBox;
use Botble\Base\Supports\BaseSeeder;
use Botble\Team\Models\Team;

class TeamSeeder extends BaseSeeder
{
    public function run(): void
    {
        $this->uploadFiles('teams');

        $teams = [
            [
                'name' => 'Devon Lane',
                'title' => 'Founder / CEO',
                'location' => 'USA',
            ],
            [
                'name' => 'Lori Stevens',
                'title' => 'Founder / CTO',
                'location' => 'Qatar',
            ],
            [
                'name' => 'Devon Lane',
                'title' => 'Business Manager',
                'location' => 'India',
            ],
            [
                'name' => 'Pete',
                'title' => 'Founder / CTO',
                'location' => 'China',
            ],
        ];

        Team::query()->truncate();

        $description = 'Sharing content online allows you to craft an online persona that reflects your personal values and professional skills. Even if you only use social media occasionally';

        foreach ($teams as $index => $item) {
            $item['photo'] = 'teams/' . ($index + 1) . '.png';
            $item['socials'] = json_encode([
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'instagram' => 'https://www.instagram.com/',
            ]);

            $item['status'] = BaseStatusEnum::PUBLISHED;

            $team = Team::query()->create($item);

            MetaBox::saveMetaBoxData($team, 'description', $description);
        }
    }
}
