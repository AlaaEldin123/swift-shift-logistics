<?php

use Botble\Widget\AbstractWidget;

class HeaderContactWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Header Contact'),
            'description' => __('Display contact information in header when using header style 2.'),
        ]);
    }
}
