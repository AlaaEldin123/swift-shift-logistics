<?php

use Carbon\Carbon;

app()->booted(function () {
    theme_option()
        ->setField([
            'id' => 'logo_light',
            'section_id' => 'opt-text-subsection-logo',
            'type' => 'mediaImage',
            'label' => __('Logo light'),
            'attributes' => [
                'name' => 'logo_light',
            ],
        ])
        ->setField([
            'id' => 'copyright',
            'section_id' => 'opt-text-subsection-general',
            'type' => 'text',
            'label' => __('Copyright'),
            'attributes' => [
                'name' => 'copyright',
                'value' => __('© :year Your Company. All right reserved.', ['year' => Carbon::now()->format('Y')]),
                'options' => [
                    'class' => 'form-control',
                    'placeholder' => __('Change copyright'),
                    'data-counter' => 250,
                ],
            ],
            'helper' => __('Copyright on footer of site'),
        ])
        ->setField([
            'id' => 'primary_font',
            'section_id' => 'opt-text-subsection-general',
            'type' => 'googleFonts',
            'label' => __('Primary font'),
            'attributes' => [
                'name' => 'primary_font',
                'value' => 'Epilogue',
            ],
        ])
        ->setField([
            'id' => 'primary_color',
            'section_id' => 'opt-text-subsection-general',
            'type' => 'customColor',
            'label' => __('Primary color'),
            'attributes' => [
                'name' => 'primary_color',
                'value' => '#fec201',
            ],
        ])
        ->setField([
            'id' => 'primary_color_hover',
            'section_id' => 'opt-text-subsection-general',
            'type' => 'customColor',
            'label' => __('Primary color hover'),
            'attributes' => [
                'name' => 'primary_color_hover',
                'value' => '#066a4c',
            ],
        ])
        ->setField([
            'id' => 'secondary_color',
            'section_id' => 'opt-text-subsection-general',
            'type' => 'customColor',
            'label' => __('Secondary color'),
            'attributes' => [
                'name' => 'secondary_color',
                'value' => '#034460',
            ],
        ])
        ->setField([
            'id' => '404_page_image',
            'section_id' => 'opt-text-subsection-page',
            'type' => 'mediaImage',
            'label' => __('404 page image'),
            'attributes' => [
                'name' => '404_page_image',
            ],
        ])
        ->setField([
            'id' => 'breadcrumb_background',
            'section_id' => 'opt-text-subsection-page',
            'type' => 'mediaImage',
            'label' => __('Breadcrumb background'),
            'attributes' => [
                'name' => 'breadcrumb_background',
            ],
        ])
        ->setField([
            'id' => 'preloader_enabled',
            'section_id' => 'opt-text-subsection-general',
            'type' => 'customSelect',
            'label' => __('Enable Preloader?'),
            'attributes' => [
                'name' => 'preloader_enabled',
                'list' => [
                    'yes' => trans('core/base::base.yes'),
                    'no' => trans('core/base::base.no'),
                ],
                'value' => 'yes',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id' => 'blog_post_style',
            'section_id' => 'opt-text-subsection-blog',
            'type' => 'customSelect',
            'label' => __('Blog post style'),
            'attributes' => [
                'name' => 'blog_post_style',
                'list' => [
                    'grid' => __('Grid'),
                    'list' => __('List'),
                ],
                'value' => 'grid',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setSection([
            'title' => __('Contact'),
            'desc' => __('Contact information.'),
            'id' => 'opt-text-subsection-contact',
            'subsection' => true,
            'icon' => 'fas fa-envelope',
            'fields' => [
                [
                    'id' => 'phone',
                    'type' => 'text',
                    'label' => __('Phone number'),
                    'attributes' => [
                        'name' => 'phone',
                        'value' => null,
                        'options' => [
                            'class' => 'form-control',
                            'placeholder' => __('Enter phone number'),
                        ],
                    ],
                ],
                [
                    'id' => 'subtext_phone',
                    'type' => 'text',
                    'label' => __('Subtext phone'),
                    'attributes' => [
                        'name' => 'subtext_phone',
                        'value' => null,
                        'options' => [
                            'class' => 'form-control',
                            'placeholder' => __('Enter subtext phone'),
                        ],
                    ],
                ],
                [
                    'id' => 'contact_email',
                    'type' => 'email',
                    'label' => __('Email'),
                    'attributes' => [
                        'name' => 'contact_email',
                        'value' => null,
                        'options' => [
                            'class' => 'form-control',
                            'placeholder' => __('Enter email address'),
                        ],
                    ],
                ],
                [
                    'id' => 'address',
                    'type' => 'textarea',
                    'label' => __('Address'),
                    'attributes' => [
                        'name' => 'address',
                        'value' => null,
                        'options' => [
                            'rows' => 2,
                            'class' => 'form-control',
                            'placeholder' => __('Enter location address'),
                        ],
                    ],
                ],
            ],
        ])
        ->setSection([
            'title' => __('Social Links'),
            'desc' => __('Social Links at the footer.'),
            'id' => 'opt-text-subsection-social-links',
            'subsection' => true,
            'icon' => 'fas fa-icons',
            'fields' => [
                [
                    'id' => 'social_links',
                    'type' => 'repeater',
                    'label' => __('Social Links'),
                    'attributes' => [
                        'name' => 'social_links',
                        'value' => null,
                        'fields' => [
                            [
                                'type' => 'text',
                                'label' => __('Name'),
                                'attributes' => [
                                    'name' => 'name',
                                    'value' => null,
                                    'options' => [
                                        'class' => 'form-control',
                                    ],
                                ],
                            ],
                            [
                                'type' => 'mediaImage',
                                'label' => __('Icon'),
                                'attributes' => [
                                    'name' => 'icon',
                                    'value' => null,
                                    'options' => [
                                        'class' => 'form-control',
                                    ],
                                ],
                            ],
                            [
                                'type' => 'text',
                                'label' => __('URL'),
                                'attributes' => [
                                    'name' => 'url',
                                    'value' => null,
                                    'options' => [
                                        'class' => 'form-control',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ])
        ->setSection([
            'title' => __('Header'),
            'desc' => __('Header config'),
            'id' => 'opt-text-subsection-header',
            'subsection' => true,
            'icon' => 'fa fa-link',
        ])
        ->setField([
            'id' => 'header_top_enabled',
            'section_id' => 'opt-text-subsection-header',
            'type' => 'customSelect',
            'label' => __('Enable header top'),
            'attributes' => [
                'name' => 'header_top_enabled',
                'list' => [
                    0 => trans('core/base::base.no'),
                    1 => trans('core/base::base.yes'),
                ],
                'value' => 1,
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id' => 'header_button_label',
            'section_id' => 'opt-text-subsection-header',
            'type' => 'text',
            'label' => __('Header button label'),
            'attributes' => [
                'name' => 'header_button_label',
                'value' => __('Get a quote'),
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id' => 'header_button_url',
            'section_id' => 'opt-text-subsection-header',
            'type' => 'text',
            'label' => __('Header button URL'),
            'attributes' => [
                'name' => 'header_button_url',
                'value' => '/request-a-quote',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ]);
});
