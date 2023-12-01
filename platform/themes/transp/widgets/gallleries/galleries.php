<?php

use Botble\Gallery\Models\Gallery;
use Botble\Widget\AbstractWidget;
use Illuminate\Support\Collection;

class GalleriesWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Galleries'),
            'description' => __('Add a gallery to your sidebar.'),
            'gallery_id' => null,
            'limit' => 9,
        ]);
    }

    protected function adminConfig(): array
    {
        if (! is_plugin_active('gallery')) {
            return ['galleries' => []];
        }

        return [
            'galleries' => Gallery::query()
                ->wherePublished()
                ->pluck('name', 'id'),
        ];
    }

    protected function data(): array|Collection
    {
        if (! is_plugin_active('gallery')) {
            return ['galleries' => []];
        }

        return [
            'gallery' => Gallery::query()
                ->wherePublished()
                ->find($this->getConfig()['gallery_id']),
        ];
    }
}
