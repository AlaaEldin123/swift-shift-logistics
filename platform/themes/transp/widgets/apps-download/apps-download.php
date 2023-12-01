<?php

use Botble\Widget\AbstractWidget;

class AppsDownloadWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Apps Download'),
            'description' => __('Widget display platform apps download'),
            'text' => __('Download our Apps and get extra 15% Discount on your first Order...!'),
            'google_play_logo' => null,
            'google_play_url' => null,
            'app_store_logo' => null,
            'app_store_url' => null,
        ]);
    }
}
