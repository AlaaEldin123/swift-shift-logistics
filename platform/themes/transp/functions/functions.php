<?php

use Botble\Base\Facades\MetaBox;
use Botble\Base\Forms\FormAbstract;
use Botble\Base\Models\BaseModel;
use Botble\Logistics\Models\Package;
use Botble\Logistics\Models\ServiceCategory;
use Botble\Media\Facades\RvMedia;
use Botble\Menu\Facades\Menu;
use Botble\Page\Models\Page;
use Botble\SimpleSlider\Models\SimpleSliderItem;
use Botble\Slug\Facades\SlugHelper;
use Botble\Team\Forms\TeamForm;
use Botble\Team\Models\Team;
use Botble\Testimonial\Models\Testimonial;
use Illuminate\Http\Request;

register_page_template([
    'default' => __('Default'),
]);

register_sidebar([
    'id' => 'footer_sidebar',
    'name' => __('Footer sidebar'),
    'description' => __('Area for footer widgets'),
]);

register_sidebar([
    'id' => 'pre_footer_sidebar',
    'name' => __('Pre Footer sidebar'),
    'description' => __('Area for pre footer widgets'),
]);

register_sidebar([
    'id' => 'header_sidebar',
    'name' => __('Header sidebar'),
    'description' => __('Area for header widgets'),
]);

register_sidebar([
    'id' => 'mobile_menu_sidebar',
    'name' => __('Mobile menu sidebar'),
    'description' => __('Area for mobile menu widgets'),
]);

app()->booted(fn () => remove_sidebar('primary_sidebar'));

RvMedia::setUploadPathAndURLToPublic()
    ->addSize('medium', 440, 290)
    ->addSize('thumb', 280, 280);

Menu::addMenuLocation('footer-menu', __('Footer Menu'));

add_filter(BASE_FILTER_BEFORE_RENDER_FORM, function (FormAbstract $form, BaseModel $data): FormAbstract {
    switch (get_class($data)) {
        case Page::class:
            $data->loadMissing('metadata');

            $form
                ->addAfter('template', 'header_style', 'customSelect', [
                    'label' => __('Header style'),
                    'choices' => [
                        'style-1' => __('Header :number', ['number' => 1]),
                        'style-2' => __('Header :number', ['number' => 2]),
                    ],
                    'selected' => $data->getMetaData('header_style', true),
                ])
                ->addAfter('template', 'breadcrumb_image', 'mediaImage', [
                    'label' => __('Breadcrumb Image'),
                    'value' => $data->getMetaData('breadcrumb_image', true),
                ])
                ->addAfter('template', 'breadcrumb_background', 'mediaImage', [
                    'label' => __('Breadcrumb background'),
                    'value' => $data->getMetaData('breadcrumb_background', true),
                ])
                ->addAfter('template', 'breadcrumb_color', 'customColor', [
                    'label' => __('Breadcrumb color'),
                    'value' => $data->getMetaData('breadcrumb_color', true) ?: '#e0f0f6',
                ])
                ->addAfter('template', 'breadcrumb', 'customSelect', [
                    'label' => __('Breadcrumb'),
                    'choices' => [
                        'no' => __('No'),
                        'style-1' => __('Style :number', ['number' => 1]),
                        'style-2' => __('Style :number', ['number' => 2]),
                    ],
                    'selected' => $data->getMetaData('breadcrumb', true) ?: 'no',
                ])
                ->add('hide_pre_footer_sidebar', 'customSelect', [
                    'label' => __('Hide pre footer sidebar?'),
                    'choices' => [true => __('Yes'), false => __('No')],
                    'selected' => (bool)MetaBox::getMetaData($data, 'hide_pre_footer_sidebar', true),
                ]);

            break;

        case Testimonial::class:
            $form
                ->addAfter('company', 'title', 'text', [
                    'label' => __('Title'),
                    'value' => MetaBox::getMetaData($data, 'title', true),
                    'attr' => [
                        'placeholder' => __('Enter the title'),
                    ],
                ])
                ->addAfter('title', 'star', 'number', [
                    'label' => __('Star'),
                    'value' => MetaBox::getMetaData($data, 'star', true),
                    'attr' => [
                        'placeholder' => __('Enter the rating from 1 to 5'),
                    ],
                ]);

            break;

        case SimpleSliderItem::class:
            $form
                ->addAfter('title', 'subtitle', 'text', [
                    'label' => __('Subtitle'),
                    'value' => MetaBox::getMetaData($data, 'subtitle', true),
                    'attr' => [
                        'placeholder' => __('Enter the subtitle'),
                    ],
                ])
                ->addAfter('subtitle', 'description', 'textarea', [
                    'label' => __('Description'),
                    'value' => MetaBox::getMetaData($data, 'description', true),
                    'attr' => [
                        'placeholder' => __('Enter the description'),
                    ],
                ])
                ->addAfter('subtitle', 'link_icon', 'mediaImage', [
                    'label' => __('Link icon'),
                    'value' => MetaBox::getMetaData($data, 'link_icon', true),
                ])
                ->addAfter('subtitle', 'link_url', 'text', [
                    'label' => __('Link URL'),
                    'value' => MetaBox::getMetaData($data, 'link_url', true),
                    'attr' => [
                        'placeholder' => __('Enter the link url'),
                    ],
                ])
                ->addAfter('subtitle', 'link_label', 'text', [
                    'label' => __('Link label'),
                    'value' => MetaBox::getMetaData($data, 'link_label', true),
                    'attr' => [
                        'placeholder' => __('Enter the link label'),
                    ],
                ]);

            break;

        case ServiceCategory::class:
            $form
                ->addAfter('image', 'icon', 'mediaImage', [
                    'label' => __('Icon'),
                    'value' => $data->getMetaData('icon', true),
                ]);

            break;
    }

    return $form;
}, arguments: 3);

add_action(
    [BASE_ACTION_AFTER_CREATE_CONTENT, BASE_ACTION_AFTER_UPDATE_CONTENT],
    function (string $type, Request $request, BaseModel $model): void {
        switch ($model::class) {
            case Page::class:
                if ($request->has('header_style')) {
                    MetaBox::saveMetaBoxData($model, 'header_style', $request->input('header_style'));
                }

                if ($request->has('breadcrumb_image')) {
                    MetaBox::saveMetaBoxData($model, 'breadcrumb_image', $request->input('breadcrumb_image'));
                }

                if ($request->has('breadcrumb')) {
                    MetaBox::saveMetaBoxData($model, 'breadcrumb', $request->input('breadcrumb'));
                }

                if ($request->has('breadcrumb_color')) {
                    MetaBox::saveMetaBoxData($model, 'breadcrumb_color', $request->input('breadcrumb_color'));
                }

                if ($request->has('breadcrumb_background')) {
                    MetaBox::saveMetaBoxData($model, 'breadcrumb_background', $request->input('breadcrumb_background'));
                }

                if ($request->has('hide_pre_footer_sidebar')) {
                    MetaBox::saveMetaBoxData(
                        $model,
                        'hide_pre_footer_sidebar',
                        $request->input('hide_pre_footer_sidebar')
                    );
                }

                break;
            case Testimonial::class:
                if ($request->has('title')) {
                    MetaBox::saveMetaBoxData($model, 'title', $request->input('title'));
                }

                if ($request->has('star')) {
                    MetaBox::saveMetaBoxData($model, 'star', $request->input('star'));
                }

                break;

            case SimpleSliderItem::class:
                if ($request->has('subtitle')) {
                    MetaBox::saveMetaBoxData($model, 'subtitle', $request->input('subtitle'));
                }

                if ($request->has('description')) {
                    MetaBox::saveMetaBoxData($model, 'description', $request->input('description'));
                }

                if ($request->has('link_icon')) {
                    MetaBox::saveMetaBoxData($model, 'link_icon', $request->input('link_icon'));
                }

                if ($request->has('link_url')) {
                    MetaBox::saveMetaBoxData($model, 'link_url', $request->input('link_url'));
                }

                if ($request->has('link_label')) {
                    MetaBox::saveMetaBoxData($model, 'link_label', $request->input('link_label'));
                }

                break;

            case Package::class:
                if ($request->has('action_label')) {
                    MetaBox::saveMetaBoxData($model, 'action_label', $request->input('action_label'));
                }

                if ($request->has('action_url')) {
                    MetaBox::saveMetaBoxData($model, 'action_url', $request->input('action_url'));
                }

                break;

            case ServiceCategory::class:
                if ($request->has('icon')) {
                    MetaBox::saveMetaBoxData($model, 'icon', $request->input('icon'));
                }

                break;
        }
    },
    arguments: 3
);

app()->booted(function () {
    if (is_plugin_active('team')) {
        TeamForm::extend(function (TeamForm $form) {
            $form
                ->remove('content')
                ->remove('phone')
                ->remove('address')
                ->remove('website');
        });
    }
});

if (is_plugin_active('team')) {
    SlugHelper::removeModule(Team::class);
}
