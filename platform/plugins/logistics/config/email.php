<?php

return [
    'name' => 'plugins/logistics::logistics.settings.email.title',
    'description' => 'plugins/logistics::logistics.settings.email.description',
    'templates' => [
        'quote-request-notice' => [
            'title' => 'plugins/logistics::logistics.settings.email.templates.notice_title',
            'description' => 'plugins/logistics::logistics.settings.email.templates.notice_description',
            'subject' => 'Request for Quotation',
            'can_off' => true,
            'variables' => [
                'site_name' => 'Site name',
                'contact_name' => 'Contact name',
                'contact_email' => 'Contact email',
                'contact_message' => 'Contact message',
                'fields' => 'Custom fields',
            ],
        ],
    ],
];
