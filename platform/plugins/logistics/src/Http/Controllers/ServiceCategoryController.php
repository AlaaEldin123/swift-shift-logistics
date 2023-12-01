<?php

namespace Botble\Logistics\Http\Controllers;

use Botble\Base\Events\BeforeEditContentEvent;
use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;
use Botble\Base\Facades\PageTitle;
use Botble\Base\Forms\FormBuilder;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Logistics\Forms\ServiceCategoryForm;
use Botble\Logistics\Http\Requests\ServiceCategoryRequest;
use Botble\Logistics\Models\ServiceCategory;
use Botble\Logistics\Tables\ServiceCategoryTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ServiceCategoryController extends BaseController
{
    public function __construct(protected BaseHttpResponse $response)
    {
    }

    public function index(ServiceCategoryTable $table): View|JsonResponse
    {
        PageTitle::setTitle(trans('plugins/logistics::logistics.service_category.name'));

        return $table->renderTable();
    }

    public function create(FormBuilder $formBuilder): string
    {
        PageTitle::setTitle(trans('plugins/logistics::logistics.service_category.create'));

        return $formBuilder->create(ServiceCategoryForm::class)->renderForm();
    }

    public function store(ServiceCategoryRequest $request): BaseHttpResponse
    {
        $serviceCategory = ServiceCategory::query()->create($request->validated());

        event(new CreatedContentEvent('service-categories', $request, $serviceCategory));

        return $this->response
            ->setNextUrl(route('logistics.service-categories.edit', $serviceCategory))
            ->setMessage(trans('core/base::notices.create_success_message'));
    }

    public function edit(ServiceCategory $serviceCategory, Request $request, FormBuilder $formBuilder): string
    {
        event(new BeforeEditContentEvent($request, $serviceCategory));

        PageTitle::setTitle(trans('core/base::forms.edit_item', ['name' => $serviceCategory->name]));

        return $formBuilder->create(ServiceCategoryForm::class, ['model' => $serviceCategory])->renderForm();
    }

    public function update(ServiceCategory $serviceCategory, ServiceCategoryRequest $request): BaseHttpResponse
    {
        $serviceCategory->update($request->validated());

        event(new UpdatedContentEvent('service-categories', $request, $serviceCategory));

        return $this->response
            ->setNextUrl(route('logistics.service-categories.edit', $serviceCategory))
            ->setMessage(trans('core/base::notices.update_success_message'));
    }

    public function destroy(ServiceCategory $serviceCategory, Request $request): BaseHttpResponse
    {
        $serviceCategory->delete();

        event(new DeletedContentEvent('service-categories', $request, $serviceCategory));

        return $this->response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
