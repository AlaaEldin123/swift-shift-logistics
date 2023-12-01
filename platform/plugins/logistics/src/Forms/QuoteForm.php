<?php

namespace Botble\Logistics\Forms;

use Botble\Base\Forms\FieldOptions\StatusFieldOption;
use Botble\Base\Forms\Fields\SelectField;
use Botble\Base\Forms\FormAbstract;
use Botble\Logistics\Enums\QuoteStatus;
use Botble\Logistics\Models\Quote;

class QuoteForm extends FormAbstract
{
    public function buildForm(): void
    {
        $this
            ->setupModel(new Quote())
            ->withCustomFields()
            ->add('status', SelectField::class, StatusFieldOption::make()->required()->choices(QuoteStatus::labels())->toArray())
            ->setBreakFieldPoint('status')
            ->addMetaBoxes([
                'information' => [
                    'title' => trans('plugins/logistics::logistics.quotation_request.information'),
                    'content' => view('plugins/logistics::quotation-requests.show', ['quote' => $this->getModel()])->render(),
                ],
            ]);
    }
}
