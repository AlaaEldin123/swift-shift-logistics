<?php

namespace Botble\Logistics\Forms;

use Botble\Base\Forms\FieldOptions\StatusFieldOption;
use Botble\Base\Forms\Fields\SelectField;
use Botble\Base\Forms\FormAbstract;
use Botble\Logistics\Http\Requests\ServiceCategoryRequest;
use Botble\Logistics\Models\ServiceCategory;

class ServiceCategoryForm extends FormAbstract
{
    public function buildForm(): void
    {
        $this
            ->setupModel(new ServiceCategory())
            ->setValidatorClass(ServiceCategoryRequest::class)
            ->withCustomFields()
            ->add('name', 'text', [
                'label' => trans('core/base::forms.name'),
                'required' => true,
                'attr' => [
                    'placeholder' => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('parent_id', 'customSelect', [
                'label' => trans('core/base::forms.parent'),
                'attr' => [
                    'class' => 'select-search-full',
                ],
                'choices' => ['' => trans('plugins/logistics::logistics.form.none')] + ServiceCategory::query()
                        ->where('parent_id', null)
                        ->whereNot('id', $this->model->id)
                        ->pluck('name', 'id')
                        ->all(),
            ])
            ->add('order', 'number', [
                'label' => trans('core/base::forms.order'),
                'attr' => [
                    'placeholder' => trans('core/base::forms.order_by_placeholder'),
                ],
                'default_value' => 0,
            ])
            ->add('status', SelectField::class, StatusFieldOption::make()->toArray())
            ->add('image', 'mediaImage', [
                'label' => trans('core/base::forms.image'),
                'label_attr' => ['class' => 'control-label'],
            ])
            ->setBreakFieldPoint('status');
    }
}
