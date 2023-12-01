<?php

return [
    [
        'name' => 'Logistics',
        'flag' => 'plugins.logistics',
    ],
    [
        'name' => 'Service Categories',
        'flag' => 'logistics.service-categories.index',
        'parent_id' => 'plugins.logistics',
    ],
    [
        'name' => 'Create',
        'flag' => 'logistics.service-categories.create',
        'parent_flag' => 'logistics.service-categories.index',
    ],
    [
        'name' => 'Edit',
        'flag' => 'logistics.service-categories.edit',
        'parent_flag' => 'logistics.service-categories.index',
    ],
    [
        'name' => 'Delete',
        'flag' => 'logistics.service-categories.destroy',
        'parent_flag' => 'logistics.service-categories.index',
    ],

    [
        'name' => 'Services',
        'flag' => 'logistics.services.index',
        'parent_id' => 'plugins.logistics',
    ],
    [
        'name' => 'Create',
        'flag' => 'logistics.services.create',
        'parent_flag' => 'logistics.services.index',
    ],
    [
        'name' => 'Edit',
        'flag' => 'logistics.services.edit',
        'parent_flag' => 'logistics.services.index',
    ],
    [
        'name' => 'Delete',
        'flag' => 'logistics.services.destroy',
        'parent_flag' => 'logistics.services.index',
    ],

    [
        'name' => 'Packages',
        'flag' => 'logistics.packages.index',
        'parent_id' => 'plugins.logistics',
    ],
    [
        'name' => 'Create',
        'flag' => 'logistics.packages.create',
        'parent_flag' => 'logistics.packages.index',
    ],
    [
        'name' => 'Edit',
        'flag' => 'logistics.packages.edit',
        'parent_flag' => 'logistics.packages.index',
    ],
    [
        'name' => 'Delete',
        'flag' => 'logistics.packages.destroy',
        'parent_flag' => 'logistics.packages.index',
    ],

    [
        'name' => 'Custom Fields',
        'flag' => 'logistics.custom-fields.index',
        'parent_id' => 'plugins.logistics',
    ],
    [
        'name' => 'Create',
        'flag' => 'logistics.custom-fields.create',
        'parent_flag' => 'logistics.custom-fields.index',
    ],
    [
        'name' => 'Edit',
        'flag' => 'logistics.custom-fields.edit',
        'parent_flag' => 'logistics.custom-fields.index',
    ],
    [
        'name' => 'Delete',
        'flag' => 'logistics.custom-fields.destroy',
        'parent_flag' => 'logistics.custom-fields.index',
    ],

    [
        'name' => 'Quotation Requests',
        'flag' => 'logistics.quotation-requests.index',
        'parent_id' => 'plugins.logistics',
    ],
    [
        'name' => 'Show',
        'flag' => 'logistics.quotation-requests.show',
        'parent_flag' => 'logistics.quotation-requests.index',
    ],
    [
        'name' => 'Delete',
        'flag' => 'logistics.quotation-requests.destroy',
        'parent_flag' => 'logistics.quotation-requests.index',
    ],
];
