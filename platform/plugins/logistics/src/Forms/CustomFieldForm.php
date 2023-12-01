<?php

namespace Botble\Logistics\Forms;

use Botble\Base\Facades\Assets;
use Botble\Base\Forms\FormAbstract;
use Botble\Logistics\Enums\CustomFieldType;
use Botble\Logistics\Http\Requests\CustomFieldRequest;
use Botble\Logistics\Models\CustomField;

class CustomFieldForm extends FormAbstract
{
    public function buildForm(): void
    {
        Assets::addScripts('jquery-ui')
            ->addScriptsDirectly('vendor/core/plugins/logistics/js/logistics.js');

        $this
            ->setupModel(new CustomField())
            ->setValidatorClass(CustomFieldRequest::class)
            ->withCustomFields()
            ->add('name', 'text', [
                'label' => trans('core/base::forms.name'),
                'required' => true,
                'attr' => [
                    'placeholder' => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('required', 'onOff', [
                'label' => trans('plugins/logistics::logistics.custom_field.required'),
            ])
            ->add('placeholder', 'text', [
                'label' => trans('plugins/logistics::logistics.custom_field.placeholder'),
                'attr' => [
                    'placeholder' => trans('plugins/logistics::logistics.custom_field.placeholder_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('type', 'customSelect', [
                'label' => trans('plugins/logistics::logistics.custom_field.type'),
                'required' => true,
                'attr' => ['class' => 'form-control custom-field-type'],
                'choices' => CustomFieldType::labels(),
            ])
            ->addMetaBoxes([
                'custom_fields_box' => [
                    'attributes' => [
                        'id' => 'custom_fields_box',
                    ],
                    'title' => trans('plugins/logistics::logistics.custom_field.options'),
                    'content' => view(
                        'plugins/logistics::custom-fields.options',
                        [
                            'customFields' => $this->getModel()->options->sortBy('order'),
                        ]
                    )->render(),
                ],
            ]);
    }
}
