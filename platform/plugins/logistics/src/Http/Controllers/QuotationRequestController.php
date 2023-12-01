<?php

namespace Botble\Logistics\Http\Controllers;

use Botble\Base\Events\BeforeEditContentEvent;
use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;
use Botble\Base\Facades\PageTitle;
use Botble\Base\Forms\FormBuilder;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Logistics\Enums\QuoteStatus;
use Botble\Logistics\Forms\QuoteForm;
use Botble\Logistics\Models\Quote;
use Botble\Logistics\Tables\QuoteTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class QuotationRequestController extends BaseController
{
    public function index(QuoteTable $table): View|JsonResponse
    {
        PageTitle::setTitle(trans('plugins/logistics::logistics.quotation_request.name'));

        return $table->renderTable();
    }

    public function edit(Quote $quotationRequest, FormBuilder $formBuilder, Request $request): string
    {
        event(new BeforeEditContentEvent($request, $quotationRequest));

        PageTitle::setTitle(trans('plugins/logistics::logistics.quotation_request.viewing', ['name' => $quotationRequest->getKey()]));

        return $formBuilder->create(QuoteForm::class, ['model' => $quotationRequest])->renderForm();
    }

    public function update(Quote $quotationRequest, Request $request, BaseHttpResponse $response): BaseHttpResponse
    {
        $validated = $request->validate([
            'status' => ['required', 'string', Rule::in(QuoteStatus::values())],
        ]);

        $quotationRequest->update($validated);

        event(new UpdatedContentEvent('quotes', $request, $quotationRequest));

        return $response
            ->setPreviousUrl(route('logistics.quotation-requests.index'))
            ->setMessage(trans('core/base::notices.update_success_message'));
    }

    public function destroy(Quote $quotationRequest, Request $request, BaseHttpResponse $response): BaseHttpResponse
    {
        $quotationRequest->delete();

        event(new DeletedContentEvent('quotes', $request, $quotationRequest));

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
