<?php

namespace Botble\Logistics\Forms;

use Botble\Base\Forms\FieldOptions\StatusFieldOption;
use Botble\Base\Forms\Fields\SelectField;
use Botble\Base\Forms\FormAbstract;
use Botble\Logistics\Enums\PackageDuration;
use Botble\Logistics\Http\Requests\PackageRequest;
use Botble\Logistics\Models\Package;

class PackageForm extends FormAbstract
{
    public function buildForm(): void
    {
        $this
            ->setupModel(new Package())
            ->setValidatorClass(PackageRequest::class)
            ->withCustomFields()
            ->add('name', 'text', [
                'label' => trans('core/base::forms.name'),
                'required' => true,
                'attr' => [
                    'placeholder' => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('description', 'textarea', [
                'label' => trans('core/base::forms.description'),
                'attr' => [
                    'placeholder' => trans('plugins/logistics::logistics.form.description_placeholder'),
                    'data-counter' => 400,
                    'rows' => 2,
                ],
            ])
            ->addAfter('description', 'priceRowOpen', 'html', [
                'html' => '<div class="row">',
            ])
            ->addAfter('priceRowOpen', 'duration', 'customSelect', [
                'label' => trans('plugins/logistics::logistics.duration'),
                'required' => true,
                'wrapper' => [
                    'class' => 'col-md-4',
                ],
                'choices' => PackageDuration::labels(),
                'selected' => $this->getModel()->duration->getValue() ?: PackageDuration::MONTHLY,
            ])
            ->addAfter('duration', 'price', 'text', [
                'label' => trans('plugins/logistics::logistics.price'),
                'required' => true,
                'attr' => [
                    'placeholder' => trans('plugins/logistics::logistics.form.price_placeholder'),
                ],
                'wrapper' => [
                    'class' => 'col-md-4',
                ],
            ])
            ->addAfter('price', 'annual_price', 'text', [
                'label' => trans('plugins/logistics::logistics.annual_price'),
                'attr' => [
                    'placeholder' => trans('plugins/logistics::logistics.form.price_placeholder'),
                ],
                'wrapper' => [
                    'class' => 'col-md-4',
                ],
                'help_block' => [
                    'text' => trans('plugins/logistics::logistics.form.packages_switch_pricing_plan'),
                ],
            ])
            ->addAfter('description', 'priceRowClose', 'html', [
                'html' => '</div>',
            ])
            ->add('content', 'editor', [
                'label' => trans('core/base::forms.content'),
                'required' => true,
            ])
            ->add('features', 'textarea', [
                'label' => trans('plugins/logistics::logistics.form.features'),
                'required' => true,
                'attr' => [
                    'placeholder' => trans('plugins/logistics::logistics.form.features_placeholder'),
                ],
                'help_block' => [
                    'text' => trans('plugins/logistics::logistics.form.features_help_block'),
                ],
            ])
            ->add('is_popular', 'onOff', [
                'label' => trans('plugins/logistics::logistics.is_popular'),
            ])
            ->add('status', SelectField::class, StatusFieldOption::make()->toArray())
            ->setBreakFieldPoint('status');
    }
}
