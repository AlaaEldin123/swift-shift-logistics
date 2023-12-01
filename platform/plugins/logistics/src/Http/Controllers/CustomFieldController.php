<?php

namespace Botble\Logistics\Http\Controllers;

use Botble\Base\Events\BeforeEditContentEvent;
use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Facades\PageTitle;
use Botble\Base\Forms\FormBuilder;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Logistics\Forms\CustomFieldForm;
use Botble\Logistics\Http\Requests\CustomFieldRequest;
use Botble\Logistics\Models\CustomField;
use Botble\Logistics\Tables\CustomFieldTable;
use Botble\RealEstate\Http\Resources\CustomFieldResource;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CustomFieldController extends BaseController
{
    public function __construct(protected BaseHttpResponse $response)
    {
    }

    public function index(CustomFieldTable $table): View|JsonResponse
    {
        PageTitle::setTitle(trans('plugins/logistics::logistics.custom_field.name'));

        return $table->renderTable();
    }

    public function create(FormBuilder $formBuilder): string
    {
        PageTitle::setTitle(trans('plugins/logistics::logistics.custom_field.create'));

        return $formBuilder->create(CustomFieldForm::class)->renderForm();
    }

    public function store(CustomFieldRequest $request): BaseHttpResponse
    {
        $customField = CustomField::query()->create(array_merge($request->validated(), [
            'author_type' => $request->user()::class,
            'author_id' => $request->user()->getKey(),
        ]));

        event(new CreatedContentEvent('custom-fields', $request, $customField));

        return $this->response
            ->setPreviousUrl(route('logistics.custom-fields.index'))
            ->setNextUrl(route('logistics.custom-fields.edit', $customField->getKey()))
            ->setMessage(trans('core/base::notices.create_success_message'));
    }

    public function edit(CustomField $customField, FormBuilder $formBuilder, Request $request): string
    {
        $customField->loadMissing('options');

        event(new BeforeEditContentEvent($request, $customField));

        PageTitle::setTitle(trans('core/base::forms.edit_item', ['name' => $customField->name]));

        return $formBuilder->create(CustomFieldForm::class, ['model' => $customField])->renderForm();
    }

    public function update(CustomField $customField, CustomFieldRequest $request): BaseHttpResponse
    {
        $customField->update($request->validated());

        $customField->saveRelations($request->validated());

        return $this->response
            ->setPreviousUrl(route('logistics.custom-fields.index'))
            ->setMessage(trans('core/base::notices.update_success_message'));
    }

    public function destroy(CustomField $customField, Request $request): BaseHttpResponse
    {
        $customField->delete();

        event(new DeletedContentEvent('custom-fields', $request, $customField));

        return $this->response->setMessage(trans('core/base::notices.delete_success_message'));
    }

    public function getInfo(Request $request): CustomFieldResource
    {
        $customField = CustomField::query()
            ->with(['options'])
            ->findOrFail($request->input('id'));

        return new CustomFieldResource($customField);
    }
}
