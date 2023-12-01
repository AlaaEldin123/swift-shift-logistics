<?php

namespace Botble\Logistics\Forms;

use Botble\Base\Forms\FieldOptions\StatusFieldOption;
use Botble\Base\Forms\Fields\SelectField;
use Botble\Base\Forms\FormAbstract;
use Botble\Logistics\Http\Requests\ServiceRequest;
use Botble\Logistics\Models\Service;
use Botble\Logistics\Models\ServiceCategory;

class ServiceForm extends FormAbstract
{
    public function buildForm(): void
    {
        $this
            ->setupModel(new Service())
            ->setValidatorClass(ServiceRequest::class)
            ->withCustomFields()
            ->add('category_id', 'customSelect', [
                'label' => trans('plugins/logistics::logistics.category'),
                'required' => true,
                'attr' => [
                    'class' => 'select-search-full',
                ],
                'choices' => [null => trans('plugins/logistics::logistics.form.none')] + ServiceCategory::query()
                        ->wherePublished()
                        ->whereNot('id', $this->model->id)
                        ->pluck('name', 'id')
                        ->all(),
            ])
            ->add('title', 'text', [
                'label' => trans('core/base::forms.title'),
                'required' => true,
                'attr' => [
                    'placeholder' => trans('plugins/logistics::logistics.form.title_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('description', 'textarea', [
                'label' => trans('core/base::forms.description'),
                'attr' => [
                    'placeholder' => trans('plugins/logistics::logistics.form.description_placeholder'),
                    'data-counter' => 400,
                    'rows' => 3,
                ],
            ])
            ->add('content', 'editor', [
                'label' => trans('core/base::forms.content'),
                'required' => true,
                'attr' => [
                    'rows' => 4,
                    'placeholder' => trans('core/base::forms.description_placeholder'),
                    'with-short-code' => true,
                ],
            ])
            ->add('images[]', 'mediaImages', [
                'label' => trans('plugins/logistics::logistics.form.images'),
                'label_attr' => ['class' => 'control-label'],
                'values' => $this->getModel()->images,
            ])
            ->add('is_featured', 'onOff', [
                'label' => trans('plugins/logistics::logistics.form.is_featured'),
            ])
            ->add('status', SelectField::class, StatusFieldOption::make()->toArray())
            ->add('thumbnail', 'mediaImage', [
                'label' => trans('plugins/logistics::logistics.thumbnail'),
                'label_attr' => ['class' => 'control-label'],
            ])
            ->setBreakFieldPoint('status');
    }
}
